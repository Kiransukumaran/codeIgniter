<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* class in controller to load view of update
* Also passing credentials to model
*/
class Updatecontroller extends CI_Controller 
{

	/**
	*function to load login view 
    *@param void
    *@return null
	**/ 
	public function loadView()
	{
		$this->load->view('updatevalues');
	}

	/**
	*function to insert or update values into db 
    *@param void
    *@return null
	**/ 
	public function insertValues()
	{		
		$credentials = array(
				    'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'phonenumber'=>$this->input->post('phonenumber')
					);

        $this->load->model('updatemodel');
        
        if ($this->updatemodel->checkIfEmailExists($credentials['email'])) {
        	if ($this->updatemodel->updateData($credentials,$email)) {
        	   echo "value is updated";
        	}
        	else {
        	   $this->load->view('updatevalues');
        	}   
		}
		else{
		    if ($this->updatemodel->insertData($credentials,$email)) {
        	   echo "value is inserted";
        	}
        	else {
        	   $this->load->view('updatevalues');
        	} 
		}
	}		
}
?>