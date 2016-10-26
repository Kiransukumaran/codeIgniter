<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passwordmodel extends CI_Controller {
	/**
	*function to insert hashed password into db
    *@return null
	**/ 
	public function insertData($datas)
	{
    $result=$this->db->insert('password',$datas);
    return $result;
	}
}
?>