<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*index faq page and baseurl as baseurl/faq*/ 

class Faq extends CI_Controller 
{
    /*
    *function to index faq page
    *@param void
    *@return void
    */ 
	public function index()
	{
		$this->load->view('faqview');
	}
}	
?>