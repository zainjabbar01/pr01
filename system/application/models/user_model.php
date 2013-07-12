<?php

class User_model extends model {
	
	//Constructor
	function User_model(){
		parent::Model();
		$this->load->library('Adodbx'); //Load Adodb Library
		$this->load->library('email'); // Load Email Library
	}

	
}

?>