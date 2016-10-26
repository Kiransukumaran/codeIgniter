<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*class of model to fetch datas from db*/ 

class Greetmodel extends CI_Controller {
	/**
	*function to load helloworld view 
    *@param void
    *@return null
	**/ 
	public function getData()
	{
    $this->db->select("name"); 
    $this->db->from('user');
    $query = $this->db->get();
    return ($query->result()); 
	}
}
?>