<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*printing hello world*/ 

class HelloController extends CI_Controller 
{
	/**
	*function to load helloworld view 
    *@param void
    *@return null
	**/ 
	public function helloWorld()
	{
		$this->load->view('helloworldprinting');
	}
}
?>