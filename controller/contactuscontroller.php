<?php
/*form validation for contact us page*/ 
class Contactuscontroller extends CI_Controller
{   
    /**
    *function to load contact us view
    *@param void
    *@return void
    */ 
    public function contactUsView()
    {
        $this->load->view('contactusview'
    }
    /**
    *function to load contact us view
    *@param void
    *@return void
    */
    public function validateForm()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('name','name','required|alpha|max_length[15]|trim');
			$this->form_validation->set_rules('subject','subject','required|alpha|max_length[25]|trim');
			$this->form_validation->set_rules('message','message','required|max_length[120]|trim');
			$this->form_validation->set_rules('choice','choice','required|trim');
			$this->form_validation->set_rules('date','date','required|callback_checkDate|trim');
			
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('contactusview');
			}
			else
			{
				$credentials = array(
				            'name' => $this->input->post('name'),
				            'subject' => $this->input->post('subject'),
				            'choice' => $this->input->post('choice'),
				            'choice' => $this->input->post('date'),
				            'message' => $this->input->post('message'),
				            );
				var_dump($credentials);
				$this->load->view('formsuccess');
			}		
		}
		else{
			$this->load->view('contactusview');
		}
	}
	
	/**
	*function to check regex of date field
	*@param value of data field 
	*@return void
	*/ 
	public function checkDate($date)
	{
		if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)){
	        return true;
	    }
	    else{
	    	$this->form_validation->set_message('checkDate','date should be as yyyy-mm-dd');
	        return false;
	    }
	}
}
?>