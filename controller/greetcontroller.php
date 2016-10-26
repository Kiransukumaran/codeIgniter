<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*class to greet a user as good morning username(username is from db)*/ 

class Greetcontroller extends CI_Controller 
{
	/**
	*function to load helloworld view 
    *@param void
    *@return null
	**/ 
	public function greetUser()
	{

		$this->load->model('greetmodel');
		$data['result']=$this->greetmodel->getData();	
		$this->load->view('greets',$data);
	}
}
?>