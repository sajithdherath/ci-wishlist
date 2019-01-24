<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 1/20/19
 * Time: 6:29 AM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');
require(APPPATH . 'libraries/Format.php');

use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('userModel');
    }

    function login_post() {

        $username = $this->post("username");
        $password = $this->post("password");
        $user = array("username" => $username, "password" => $password);

        if (!$this->checkSession($username)) {
            $result = $this->userModel->login($user);
            $login_status = $result["status"];
            if ($login_status == "SUCCESS") {
                $user_data = array(
                    'user_id' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                $this->response(array('user_id' => $result["user_id"]), 200);

            } elseif ($login_status == "NOT_REGISTERED") {
                $this->response(array("status" => "NOT_REGISTERED"), 401);
            } elseif ($login_status == "PWD_INCORRECT") {
                $this->response(array("status" => "PWD_INCORRECT"), 401);
            }

        } else {
            $response["status"] = "ALREADY_LOGGED";;
            $result = $this->userModel->login($user);
            $response["user_id"] = $result["user_id"];
        }

    }


    public function signup_post() {

        $user = array(
            "username" => $this->post('username'),
            "password" => $this->post('password'),
            "list_name" => $this->post('list_name'),
            "description" => $this->post('description')
        );
        $signup_status = $this->userModel->insertUser($user);
        if ($signup_status["status"] == "ALREADY_USER") {
            $this->response(array("status" => "ALREADY_USER"), 409);
        } else {
            $this->response(array(
                "status" => "USER_REGISTERED",
                "user_id" => $signup_status["user_id"],
                "user" => $user), 200);
        }
    }


    public function checkSession($username) {

        if ($this->session->username == $username) {
            return true;
        } else {
            return false;
        }
    }

    public function is_logged() {

    }

    public function logout() {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            $username = $this->input->get("user");
            $session_items = array('username', "logged_in");
            $this->session->unset_userdata($session_items);
            var_dump($this->session->userdata);
            echo json_encode(array("status" => "successfully logged out"));
        }
    }

}