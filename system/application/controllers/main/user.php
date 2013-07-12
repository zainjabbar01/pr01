<?php
class User extends controller {
	
	function User(){
		parent::Controller();
		$this->load->helper('check_login');
		//$this->output->enable_profiler(TRUE);
		if(!user_login()){
			redirect('main/home/login');
		}
	}

	//supplier info page
	function supplier_info(){
		$data['title']			= 	'Procurement System';
		$data['page']			= 	'supplier_info';
		$data['main_content'] 		= 	'user/supplier_info';
		$this->load->view('home/default/template',$data);
	}
	
	//company info page
	function company_info(){
		$data['title']			= 	'Procurement System';
		$data['page']			= 	'company_info';
		$data['main_content'] 		= 	'user/company_info';
		$this->load->view('home/default/template',$data);
	}
	
	//company revenue page
	function company_revenue(){
		$data['title']			= 	'Procurement System';
		$data['page']			= 	'company_revenue';
		$data['main_content'] 		= 	'user/company_revenue';
		$this->load->view('home/default/template',$data);
	}
	
	//company contact page
	function company_contact(){
		$data['title']			= 	'Procurement System';
		$data['page']			= 	'company_contact';
		$data['main_content'] 		= 	'user/company_contact';
		$this->load->view('home/default/template',$data);
	}
	
	//license page
	function license(){
		$data['title']			= 	'Procurement System';
		$data['page']			= 	'license';
		$data['main_content'] 		= 	'user/license';
		$this->load->view('home/default/template',$data);
	}
	
	//services page
	function services(){
		$data['title']			= 	'Procurement System';
		$data['page']			= 	'services';
		$data['main_content'] 		= 	'user/services';
		$this->load->view('home/default/template',$data);
	}
	
	//user logout
	function user_dologout(){
		$data = array(
			'user_id' => NULL,
			'user_email' => NULL,
			'user_name' => NULL,
			'user_full_name' => NULL,
			'user_login' => FALSE);
		$this->session->unset_userdata($data);
		redirect('main/home/');
	}
	
	
	
	//Sanitize String
	function strip_slashes($input)
	{
		$this->load->helper('string');
		if(is_array($input))
		{
			foreach($input as $k=>$v)
			{
				$input[$k] = quotes_to_entities($v);
			}
		}
		else
		{
			$input = quotes_to_entities($input);
		}
		
		return $input;
	}
	
	
}
?>
