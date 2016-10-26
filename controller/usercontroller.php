<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*--routing excercise--*/ 

class Usercontroller extends CI_Controller 
{
	/**
	*function for routing example
	*@param void
	*@return null
	*/ 
	
	public function user1()
	{
		$this->load->view('user');
	}

	/**
	*function for routing example
	*@param void
	*@return null
	*/ 
	public function user2()
	{
		$this->load->view('user');
	}
}	
?>