<h1>Welcome to The Dashboard</h1>
<?php
echo 'Your login informaton are as follows:<br/> ';
echo '<pre>';
print_r($this->session);
echo '</pre>';
echo $this->session->flashdata('username');

