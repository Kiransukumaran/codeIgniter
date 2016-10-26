<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passwordcontroller extends CI_Controller 
{

	/**
	*function to load passwordhashing view 
    *@param void
    *@return null
	**/ 
	public function loadView()
	{
		$this->load->view('passwordhashing');
	}

	public function passwordHashing()
	{
		
		$datas = array(
				    'username' => $this->input->post('name'),
					 'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
					);
		$this->load->model('passwordmodel');
		if ($this->passwordmodel->insertData($datas)) {
		   echo "value is inserted";
		}
		else {
		   $this->load->view('passwordhashing');
		}
	}		
}
?>