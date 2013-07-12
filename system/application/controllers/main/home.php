<?php
class Home extends controller {
	
	function Home(){
		parent::Controller();
		$this->load->helper('check_login');
		$this->load->model('home_model');
		$this->load->library('Adodbx');
		//$this->adodb->debug=true;
	}

	//home page
	function index(){
		$data['title']	= 'Procurement System';
		$data['main_content'] 	= 'home/index';
		$data['page']		= 'index-landing';
		$this->load->view('home/default/template',$data);
	}
	
	//testdrive page
	/*function testdrive(){
		$data['title']	= 'Procurement System';
		$data['main_content'] 	= 'home/testdrive';
		$data['page']		= 'testdrive';
		$this->load->view('home/default/template',$data);
	}*/
	
	//testdrive page
	function testdrive(){
		$data['title']			= 'Procurement System';
		$data['main_content'] 	= 'home/testdrive';
		$data['page']			= 'testdrive';
		$data['product']	 	= 	$this->input->post('product');
		$data['products'] 		= $this->testdrive_model->get_products_detail($data['product']);
		if($data['product']!=""){
			$data['productselected'] 	= $this->testdrive_model->get_products_selected($data['product']);
			$data['match'] 				= $this->testdrive_model->get_products_match($data['product']);
		}
		$this->load->view('home/default/template',$data);
	}
	
	//user signup form page
	function user_register(){
		$data['title']	= 'Procurement System';
		$data['main_content'] 	= 'home/user_register';
		$data['page']		= 'user_register';
		$this->load->view('home/default/template',$data);
	}
	
	//user create account function
	function user_create_account(){
		$data['uid']		= $this->home_model->select_max_id('USER_ID','USERS');
		$data['name'] 		= $this->input->post('name');
		$data['email'] 		= $this->input->post('email');
		$data['password'] 	= md5($this->input->post('password'));
		$data['uname'] 		= $this->input->post('uname');
		$data['agree'] 		= $this->input->post('agree');
		
		$result = $this->home_model->user_create_account($data);
		
		$this->session->set_flashdata('alert_message','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" style="top: 3px;"><i class="icon-remove-sign"></i></button><strong>Account Created!</strong><br/>Please check your email for account activation details.</div>');
		redirect("main/home/activate_account/");
	}
	
	//user activate account page
	function activate_account(){
		$data['title']	= 'Procurement System';
		$data['main_content'] 	= 'home/user_activation';
		$data['page']		= 'user_activation';
		$this->load->view('home/default/template',$data);
	}
	
	//user resend code function
	function resend_code(){
		$data['email'] 		= $this->input->post('email');
		
		$result = $this->home_model->user_resend_code($data);
		
		$this->session->set_flashdata('alert_message','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" style="top: 3px;"><i class="icon-remove-sign"></i></button><strong>Verification Code Sent!</strong><br/>Verification Code is resend to your Email Address ('.$data['email'].') Successfully.</div>');
		redirect("main/home/activate_account/");
	}
	
	//user activate using verification code function
	function user_activated($key=''){
		$data['key'] = $this->input->post('key');
		if($data['key']==""){ $data['key']=$key; } 
		
		$result = $this->home_model->user_activate_account($data);
		
		$this->session->set_flashdata('alert_message','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" style="top: 3px;"><i class="icon-remove-sign"></i></button><strong>Account Activated!</strong><br/>Your account has been successfully activated. Please login to continue.</div>');
		redirect("main/home/login/");
	}
	
	//user login page
	function login(){
		$data['title']	= 'Procurement System';
		$data['main_content'] 	= 'home/user_login';
		$data['page']		= 'user_login';
		$this->load->view('home/default/template',$data);
	}
	
	//do user login
	function user_dologin(){
		$data['uname'] 		= 	$this->input->post('username_login');
		$data['password'] 	= 	$this->input->post('password_login');
		$result = $this->home_model->user_dologin($this->strip_slashes($data));
		if($result->RecordCount() == 1){ 
			
			foreach ($result as $row) {
				$user_id 	= $row['USER_ID'];
				$user_name 	= $row['USER_NAME'];
				$user_full_name = $row['USER_FULL_NAME'];
				$user_email 	= $row['USER_EMAIL'];
			}

			$data = array(
				'user_id' => $user_id,
				'user_name' => $user_name,
				'user_email' => $user_email,
				'user_full_name' => $user_full_name,
				'user_login' => TRUE);
			$this->session->set_userdata($data);
			
			redirect('main/user/supplier_info');
			
		}else{		 
			$this->session->set_flashdata('alert_message','<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert" style="top: 3px;"><i class="icon-remove-sign"></i></button><strong>Login Failed!</strong><br/>Invalid username or password. Please try again. </div>');
			redirect('main/home/login',$data);
		}
	}
	
	//verify email function
	function verify_email()
	{ 	
		$data['email']	= $this->input->post('email');
		if(preg_match('/\.([^\.]*$)/i', $data['email']))
		{
			$result = $this->home_model->verify_email($data);
		}
		else
		{
			$result = "invalid";
		}
		return $result;
	}
	
	//verify uname function
	function verify_uname()
	{ 	
		$data['uname']	= $this->input->post('uname');
		$result = $this->home_model->verify_uname($data);
		return $result;
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
