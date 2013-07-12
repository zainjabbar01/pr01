<?php

class Testdrive_model extends model {

	//Constructor
	function Testdrive_model(){
		parent::Model();
		$this->load->library('Adodbx'); //Load Adodb Library
		//$this->load->library('email'); // Load Email Library
	}
		
		
	//pull specific company details function
	function get_products_detail($product)
	{
		if($product!=""){
			$sql = " where product_categ_id not in (".$product.")"; 
		}
		$query	= "SELECT distinct product_categ_id, categ_desc FROM com_product_categ " . $sql;
		$result = $this->adodb->Execute($query);
		$count = $result->RecordCount();
		if($count > 0){
			return $result;
		}
	}
	
	//pull specific company details function
	function get_products_selected($product)
	{
		$query	= "SELECT distinct product_categ_id, categ_desc FROM com_product_categ where product_categ_id in (".$product.")";
		$result = $this->adodb->Execute($query);
		$count = $result->RecordCount();
		if($count > 0){
			return $result;
		}
	}
	
	function get_products_match($product)
	{
		$query	= "SELECT product_categ_id, categ_desc FROM com_product_categ where product_categ_id in (".$product.")";
		$result = $this->adodb->Execute($query);
		$count = $result->RecordCount();
		if($count > 0){
			return $result;
		}
	}
				
}

?>