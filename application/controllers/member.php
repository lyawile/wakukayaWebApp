<?php

class Member extends CI_Controller {

    public function index() {
        $this->load->view('register');
        
    }
    public function home(){
        $this->load->view('main');
    }

}
