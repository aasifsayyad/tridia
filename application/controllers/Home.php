<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('tridia_model');
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
     }
    
	public function index()
	{
                 $data['title'] = "Login";
                  $this->load->view('tridia/index',$data);                
            
	} 
                
          public function popup($account_type = '', $page_name = '', $param2 = '', $param3 = '', $param4 = '',$param5 = '',$param6 = '')
	{
                $page_data['param2']		=	$param2;
                $page_data['param3']		=	$param3;
                $page_data['param4']		=	$param4;
                $page_data['param5']		=	$param5;
                $page_data['param6']		=	$param6;
                $page_data['month_info'] = $this->tridia_model->select_data_info('dbo.tblMonth');
                $this->load->view($account_type.'/'.$page_name,$page_data);		
	}
        
        
        function error(){
             $data['title'] = "Page Not Found";
            $data['icons'] = "error";
             $this->load->view('tridia/error',$data);
        }
        function validateLogin() {
             $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {
                            $email= $this->input->post('email');
                            $password = $this->input->post('password');
                            echo $this->tridia_model->validate_login_info($email,$password);
                    }
                
                            
        }
        
          public function logout()
	{
		$this->session->sess_destroy();	
		redirect(base_url());
	}        
        
}
