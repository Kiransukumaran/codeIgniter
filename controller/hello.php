<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*to load a view from partials*/ 

class Hello extends CI_Controller 
{
	/**
	*function to load helloworld view login page 
    *@param void
    *@return null
	**/ 
	public function helloworld()
	{
		$this->load->view('partials/hello');
	}
}
?>