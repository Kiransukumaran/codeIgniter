<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*routing other/about as about */ 
class Other extends CI_Controller {
	/**
	*function to load helloworld view login page 
    *@param void
    *@return null
	**/ 
	public function about()
	{
		$this->load->view('aboutus');
	}
}
?>