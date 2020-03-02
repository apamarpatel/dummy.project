<?php
class HelperCtrl extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }
    function f1()
    {
        $this->load->view("formvw");
    }
    function valid1()
    {
     $this->load->library('form_validation');
$this->form_validation->set_rules('fnm', 'first name', 'required');
$this->form_validation->set_rules('gender', 'select option', 'required');
$this->form_validation->set_rules('mno', 'mobile no.', 'required');
$this->form_validation->set_rules('emailid', 'email id', 'required');
$this->form_validation->set_rules('pwd', 'password', 'required');     
      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('validationvw');
      }
      else
      {
       echo "save";
        }  
    }
    
    function valid2()
    {
     $this->load->library('form_validation');
$this->form_validation->set_rules('fnm', 'first name', 'trim|required|alpha');
$this->form_validation->set_rules('gender', 'select option', 'required');
$this->form_validation->set_rules('mno', 'mobile no.', 'required|integer|max_length[10]|regex_match[/^[6789][0-9]/]');
$this->form_validation->set_rules('emailid', 'email id', 'required|valid_email');
$this->form_validation->set_rules('pwd', 
        'pwd','required|alpha_numeric');     
      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('validationvw');
      }
      else
      {
       echo "save";
        }  
    }
}

?>