<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 1/20/19
 * Time: 6:29 AM
 */
require(APPPATH.'/libraries/REST_Controller.php');

class User extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('userModel');
        $arr = array();

    }

    public function login_post() {

            $username = $this->post["username"];
            $password = $this->post["password"];
            $user = array("username" => $username, "password" => $password);

            if (!$this->checkSession($username)) {
                $result = $this->userModel->login($user);
                $login_status = $result["status"];
                if ($login_status == "SUCCESS") {
                    $user_data = array(
                        'username' => $username,
                        'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);
                    $response["status"] = "SUCCESS";
                    $response["user_id"]=$result["user_id"];
                } elseif ($login_status == "NOT_REGISTERED") {
                    $response["status"] = "NOT_REGISTERED";
                } elseif ($login_status == "PWD_INCORRECT") {
                    $response["status"] = "PWD_INCORRECT";
                }

            } else {
                $response["status"] = "ALREADY_LOGGED";;
                $result = $this->userModel->login($user);
                $response["user_id"]=$result["user_id"];
            }
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function signup() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $response = array();
            $input_data = json_decode(file_get_contents('php://input'), true);
            $input_data["password"]=sha1($input_data["password"]);
            unset($input_data["user_id"]);
            unset($input_data["rpt_password"]);
            $signup_status = $this->userModel->insertUser($input_data);
            if ($signup_status["status"] == "ALREADY_USER") {
                $response["status"] = "ALREADY_USER";
            } else {
                $response["status"] = "USER_REGISTERED";
                $user["user_id"] = $signup_status["user_id"];
                $response["user"] = $user;
            }
            echo json_encode($response);
        }

    }

    public function checkSession($username) {

        if ($this->session->username == $username) {
            return true;
        } else {
            return false;
        }
    }
    public function is_logged(){

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