<?php

class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
    }

    public function index() {
        $this->load->view('register');
    }

    public function home() {
        $this->load->view('main');
    }

    public function register() {
        if (isset($_POST['register'])) {
            $config = array(
                array(
                    'field' => 'firstname',
                    'label' => 'First Name',
                    'rules' => 'required|min_length[3]|max_length[25]|callback_validateHumanName',
                    'errors' => array(
                        'required' => 'You must provide %s',
                        'min_length' => 'Minimum is 3 characters ',
                        'max_length' => 'Maximum is 25 characters'
                    )),
                array(
                    'field' => 'middlename',
                    'label' => 'middle Name',
                    'rules' => 'required|min_length[3]|max_length[25]|callback_validateHumanName',
                    'errors' => array(
                        'required' => 'You must provide %s'
                    )
                ),
                array(
                    'field' => 'surname',
                    'label' => 'Surname',
                    'rules' => 'min_length[3]|max_length[25]|callback_validateHumanName'
                ),
                array(
                    'field' => 'phonenumber',
                    'label' => 'Phone Number',
                    'rules' => 'required|callback_validatePhoneNumber',
                    'errors' => array(
                        'required' => 'You must provide %s'
                    )
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email Address',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must provide %s'
                    )
                )
            );
            $this->form_validation->set_rules($config); // validates the input values 
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('main');
            } else {
                // LOAD THE MODEL TO HAND THE FORM POST DATA
                $this->load->model('register_model');
                $this->register_model->register();
            }
        }
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

    public function validateHumanName($name) {
        if ($name !== "") {
            if (preg_match('/^[A-Za-z\']+$/', $name)) {
                return TRUE;
            } else {
                $this->form_validation->set_message('validateHumanName', 'The %s is invalid');
                return FALSE;
            }
        }
    }
    function validatePhoneNumber($phoneNumber) {
        if ($phoneNumber !== "") {
            if (substr($phoneNumber, 0, 4) === "+255") {
                $restNumberPattern = substr($phoneNumber, 4, 9);
                $code = 0;
                $phoneNumber = $code . $restNumberPattern;
            }
            if (preg_match('/^[0][6-7][1-9][2-9][0-9][0-9][0-9][0-9][0-9][0-9]$/', $phoneNumber)) {
                return TRUE;
            } else {
                $this->form_validation->set_message('validatePhoneNumber', 'The %s is invalid');
                return FALSE;
            }
        }
    }

}
