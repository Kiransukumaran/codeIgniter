<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*class to set 404 custom errors*/ 

class Errorcontroller extends CI_Controller 
{
	/**
	*function to load 404 error view
	*@param void
	*@return null
	*/ 
	public function loadView()
	{
		$this->load->view('errorfor404');
	}
}	
?>