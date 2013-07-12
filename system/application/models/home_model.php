<?php

class Home_model extends model {
	
	//Constructor
	function Homw_model(){
		parent::Model();
	}
	
	//user create account function
	function user_create_account($data){
		$user_id = $data['uid'];
		$user_full_name = $data['name'];
		$user_email = $data['email'];
		$user_password = $data['password'];
		$user_name = $data['uname'];
		$terms = $data['agree'];
		$key = rand(11111, 99999);
		$ip = $_SERVER['REMOTE_ADDR'];
		$sql = "INSERT INTO USERS (USER_ID, USER_NAME, USER_FULL_NAME, USER_EMAIL, USER_PASSWORD, USER_AGREEMENT, USER_STATUS, UPDT_TIME, USER_VERIFY_CODE, VERIFY_CODE_TIME, USER_IP) VALUES ('".$user_id."', '".$user_name."', '".$user_full_name."', '".$user_email."', '".$user_password."', '".$terms."', 'D', SYSDATE, '".$key."', SYSDATE, '".$ip."')";
		$result = $this->adodb->Execute($sql);
		
		
		if($result){
			$this->load->library('email');
			
			$url = base_url();
			$salutation = $user_full_name."<br /><br /><br />";
			$messageSubject = "Account Activation Email from ProcurementRegistration.com";
			$messageText	= "Dear $user_full_name, <br><br>   
					   Kindly, click on the link below or copy and paste it to the browser location bar to activate your account i.e.
					   <br>
					   $url/main/home/user_activated/$key
					   <br><br>
					   Note the verification code and then add activate the account manually to link provided below:
					   <br><br>
					   <b>Verification Code: </b> $key <br><br>
					   Use or click the following URL i.e. <br> $url/main/home/activate_account
					   <br><br>
					   In case of any problem, contact the helpdesk.
					   <br><br>
					   Thank you, <br>
					   Procurement Registration";
			
			$this->email->from('contact@procurementregistration.com', 'Procurement Registration');
			$this->email->to($user_email);
			$this->email->subject($messageSubject);
			$this->email->message($messageText);
			$this->email->send();
			//echo $this->email->print_debugger();
		}
		
		return $result;	
	}
	
	//user activate account function
	function user_activate_account($data){
		$key = $data['key'];
		
		$sql = "SELECT USER_ID, USER_FULL_NAME, USER_EMAIL FROM USERS WHERE USER_VERIFY_CODE = '$key' AND USER_STATUS != 'E'";
		$result = $this->adodb->Execute($sql);
		$count = $result->RecordCount();
		if($count > 0){
			foreach ($result->GetArray() as $row){
				$user_id = $row['USER_ID'];
				$user_full_name = $row['USER_FULL_NAME'];
				$user_email = $row['USER_EMAIL'];
			}
			
			$sql = "UPDATE USERS SET USER_STATUS = 'E', VERIFY_CODE_TIME = SYSDATE WHERE USER_ID = '$user_id'";
			$result = $this->adodb->Execute($sql);
			
			
			$data['sid']		= $this->home_model->select_max_id('SUPPLIER_ID','SUPPLIER');
			
			$sql = "INSERT INTO SUPPLIER (SUPPLIER_ID, USER_ID, CREATE_DATE) VALUES ('".$data['sid']."', '$user_id', SYSDATE)";
			$result = $this->adodb->Execute($sql);
			
		}else{
			die("Invalid Activation Code");	
		}
		
		return $result;	
	}
	
	//user resend code function
	function user_resend_code($data){
		$email = $data['email'];
		
		$sql = "SELECT USER_ID, USER_FULL_NAME, USER_VERIFY_CODE FROM USERS WHERE USER_EMAIL = '$email'";
		$result = $this->adodb->Execute($sql);
		$count = $result->RecordCount();
		if($count > 0){
			foreach ($result->GetArray() as $row){
				$user_id = $row['USER_ID'];
				$key = $row['USER_VERIFY_CODE'];
				$user_full_name = $row['USER_FULL_NAME'];
			}
			
			$this->load->library('email');
			
			$url = base_url();
			$salutation = $user_full_name."<br /><br /><br />";
			$messageSubject = "Account Activation Email from ProcurementRegistration.com";
			$messageText	= "Dear $user_full_name, <br><br>   
					   Kindly, click on the link below or copy and paste it to the browser location bar to activate your account i.e.
					   <br>
					   $url/main/home/user_activated/$key
					   <br><br>
					   Note the verification code and then add activate the account manually to link provided below:
					   <br><br>
					   <b>Verification Code: </b> $key <br><br>
					   Use or click the following URL i.e. <br> $url/main/home/activate_account
					   <br><br>
					   In case of any problem, contact the helpdesk.
					   <br><br>
					   Thank you, <br>
					   Procurement Registration";
			
			$this->email->from('contact@procurementregistration.com', 'Procurement Registration');
			$this->email->to($email);
			$this->email->subject($messageSubject);
			$this->email->message($messageText);
			$this->email->send();
			
		}else{
			die("Invalid Email");	
		}
		
		return $result;	
	}
	
	//login user and generate sessions
	function user_dologin($data) {
		$sql = "SELECT * FROM USERS WHERE USER_NAME = '".$data['uname']."' AND USER_PASSWORD = '".md5($data['password'])."'";
		$result = $this->adodb->Execute($sql);
		return $result;
	}
	
	//select max id function
	function select_max_id($column, $table){
		$column = $column;
		$table = $table;
		$this->adodb->SetFetchMode(ADODB_FETCH_ASSOC);
		$sql = "select nvl(max(".$column."),0)+1 maxid from ".$table."";
		$result = $this->adodb->Execute($sql);
		$maxid = $result->fields['MAXID'];
		/*while($row = $result->fetchRow()) {
		    $maxid = $row['MAXID'];
		}*/ 
		return $maxid;	
	}
	
	//verify email of user
	function verify_email($data)
	{
		$query	= "SELECT * FROM USERS WHERE USER_EMAIL = '".$data['email']."'";
		$result = $this->adodb->Execute($query);
		echo $count = $result->RecordCount();
		return $count;
	}
	
	//verify username
	function verify_uname($data)
	{
		$query	= "SELECT * FROM USERS WHERE USER_NAME = '".$data['uname']."'";
		$result = $this->adodb->Execute($query);
		echo $count = $result->RecordCount();
		return $count;
	}

	
	
	
}

?>