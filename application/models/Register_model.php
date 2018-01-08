<?php
class register_model extends CI_Model{
    public function register (){
      echo $firstname = $this->input->post('firstname').  br(); 
      echo $middlename = $this->input->post('middlename'). br();
      echo  $surname = $this->input->post('surname') .  br();
      echo  $phoneNumber = $this->input->post('phonenumber');
    }
    
}

 function br(){
   echo "<br/>";
}