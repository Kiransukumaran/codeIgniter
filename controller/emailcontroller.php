<?php
/*sent email using smtp gmail client*/ 
class Emailcontroller extends CI_Controller
{   
    /**
    *function to load email view
    *@param void
    *@return void
    */ 
    public function emailView()
    {
        $this->load->view('mailview');
    }
    
    /**
    *function to send email (gmail smtp is used)
    *if email sented loading success view else loading same page
    *@param void 
    *@return void
    */ 
    public function emailSend()
    {
        $credentials = array(
                    'email' => $this->input->post('email'),
                    'subject' => $this->input->post('subject'),
                    'message' => $this->input->post('message'),
                    );
        
        /*email configuration*/ 
        $this->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com"; /*host name of gmail*/
        $config['smtp_port'] = "465";   /*smtp port number*/

        /*user's mailid and password configuartion*/ 
        $config['smtp_user'] = "jrjayakrishnan6@gmail.com";    
        $config['smtp_pass'] = "Sreekrishna6*";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        /*message config*/ 
        $this->email->from('jrjayakrishnan6@gmail.com', 'jayakrishnan j r');
        $this->email->to($credentials['email']);
        $this->email->reply_to('jrjayakrishnan6@gmail.com', 'reply');
        $this->email->subject($credentials['subject']);
        $this->email->message($credentials['message']);
        if ($this->email->send()){
            $this->load->view('emailsuccessview');
        }
        else{
            $this->load->view('mailview');
        }   
    }
}
?>