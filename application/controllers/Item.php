<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 1/20/19
 * Time: 7:08 AM
 */

class Item extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('userModel');
        $this->load->model('itemModel');
    }

    public function index(){
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            $user_id = $this->input->get("user");
            $items = $this->itemModel->getList($user_id);
            header('Content-Type: application/json');
            echo json_encode($items);
        }elseif ($this->input->server('REQUEST_METHOD') == 'DELETE'){
            $item_id = $this->input->get("id");
            echo $item_id;
        }elseif ($this->input->server('REQUEST_METHOD') == 'PUT'){
            $item_id = $this->input->get("id");
            echo $item_id;
        }elseif ($this->input->server('REQUEST_METHOD') == 'POST'){

        }
    }

}