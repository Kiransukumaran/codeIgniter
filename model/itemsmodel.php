<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*model class to get items from db*/ 

class Itemsmodel extends CI_Controller 
{
    /**
    *function to getting all items frm db
    *@param void
    *@return query result
    **/ 
    public function getData()
    {
        $query = $this->db->get('items');
        return ($query->result());
    }

    /**
    *function to delete a particular item in db
    *@param void
    *@return status result
    **/ 
    public function deleteData($id) 
    {
        $this->db->where('id', $id);
        $result=$this->db->delete('items');
        return $result;
    }
}
?>

