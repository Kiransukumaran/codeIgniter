<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*class in model to insert and update datas in db
*also checking if email already exist or not
*/ 

class Updatemodel extends CI_Controller 
{
	/**
	*function to insert values into database
    *@param void
    *@return null
	**/ 
	public function insertData($datas)
	{
	    $result=$this->db->insert('updateuser',$datas);
	    return $result;
	}
	
	/**
	*function to update values in database
    *@param void
    *@return null
	**/
	public function updateData($datas)
	{
	    $this->db->where('email', $datas['email']);
	    $result=$this->db->update('updateuser',$datas);
	    return $result;
	}
	
	/**
	*function to check if email exist or not in database
    *@param void
    *@return null
	**/
	public function checkifEmailExists($email)
	{
	    $this->db->where('email',$email);
	    $query = $this->db->get('updateuser');

	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
}
?>