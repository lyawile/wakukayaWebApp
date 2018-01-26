<?php

class register_model extends CI_Model {

    public function register() {
        $firstname = $this->input->post('firstname');
        $middlename = $this->input->post('middlename');
        $surname = $this->input->post('surname');
        $phoneNumber = $this->input->post('phonenumber');
        $gender = $this->input->post('gender');
        $email = $this->input->post('email');
        // check if phone number exiests
        $result = $this->db->get_where('register', array('mobile' => $phoneNumber));
        if ($result->num_rows() == 0) {
            // insert the form data into the database
            $data = array(
                'fName' => $firstname,
                'sName' => $surname,
                'mobile' => $phoneNumber,
                'gender' => $gender,
                'email' => $email
            );
            $result = $this->db->insert('register', $data);
            $data['message'] = "successfully inserted";
            $data['content'] = 'register_user';
            $this->form_validation->unset_field_data();
            $this->load->view('main_layout', $data);
        } else {
            echo "The phone number " . $phoneNumber . " exists";
        }
    }

}
