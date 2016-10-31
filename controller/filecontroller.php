<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*controller class to upload jpg and png image files
*max file size - 2MB
*/ 
class Filecontroller extends CI_Controller 
{
    /**
    *function to load file upload view
    *@param void
    *@return void
    */ 
    public function index()
    {
        $this->load->view('fileview', array('error' => ' ' ));
    }

    /*
    *function to upload image files
    *@param void
    *@return void
    */ 
    public function do_upload()
    {
        $config['upload_path'] ='./uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '2024';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('userfile')){
            $this->load->view('success');
        }
        
        else{
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('fileview',$error);
        }
    }
}
?>