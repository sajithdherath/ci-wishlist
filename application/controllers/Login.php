<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 1/20/19
 * Time: 8:22 PM
 */

class Login extends CI_Controller {

    public function index() {
        $this->load->view('login');
    }

}