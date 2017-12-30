<?php

class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('register');
    }

    public function home() {
        $this->load->view('main');
    }

    public function login() {
        $userdata = array(
            'username' => 'hlyawile',
            'firsName' => 'Hassan',
            'middleName' => 'Ally',
            'surname' => 'Lyawile',
            'loginTime' => date('Y-M-d HH:mm:ss')
        );
        $this->session->set_userdata($userdata);
        $this->load->view('dashboard');
    }

}
