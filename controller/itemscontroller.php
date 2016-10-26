<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*controller class to process customer and purchased items */

class Itemscontroller extends CI_Controller 
{
    /**
    *function to load items from db
    *@param void
    *@return datas to view
    **/ 
    public function itemsloadView()
    {
        $this->load->model('itemsmodel');
        $datas['result']=$this->itemsmodel->getData();
        $this->load->view('items',$datas);
    }

    /**
    *function to delete db values
    *@param void
    *@return null
    **/ 
    public function deleteValues()
    {
        $id = $this->uri->segment(3);
        $this->load->model('itemsmodel');
        if($this->itemsmodel->deleteData($id)){
            $this->itemsloadView();
        }
        else{
            echo "data is not deleted";
        }
    }
}
?>