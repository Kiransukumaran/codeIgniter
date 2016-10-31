<?php
/**
*class to set session id
*/
class Sessioncontroller extends CI_Controller
{   
    /**
    *function to load session view
    *@param void
    *@return void
    */ 
    public function sessionView()
    {
        $this->load->view('sessionview');
        print_r($this->session->all_userdata());

    }
    
    /**
    *function to set session
    *@param void
    *@return void
    */
    public function sessionSetting()
    {
        $this->load->library('session');
        $sessiondata = array(
                           'email'     => 'jrjayakrishnan6@gmail.com',
                           'logged_in' => TRUE
                       );

        $this->session->set_userdata($sessiondata);
        $this->sessionView();
    }
    
    /**
    *function to delete session
    *@param void
    *@return void
    */
    public function deleteSession()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        $this->sessionView();
    }
}