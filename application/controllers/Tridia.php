<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tridia extends CI_Controller {
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
        if ($this->tridia_model->is_logged_in() == 1 ) {                
            $data['title'] = "Dashboard";
           $this->load->view('tridia/index',$data);       		
        }
        else{                 
            $data['title'] = "Login";
            $this->load->view('login',$data);        
        }                            
    } 
    public function Login(){
         if ($this->tridia_model->is_logged_in() == 1 ) { 
              $data['title'] = "Dashboard";
              $this->load->view('tridia/index',$data);  
         }else{
              $data['title'] = "Login";
              $this->load->view('login',$data); 
         }
    }
    public function master(){
        if ($this->tridia_model->is_logged_in() == 1 ) { 
             $data['title'] = "Master Dashboard";
             $this->load->view('tridia/master_dashboard',$data); 
        }else{                 
                $data['title'] = "Login";
                $this->load->view('login',$data);        
            } 
    }
    public function summary(){
        if ($this->tridia_model->is_logged_in() == 1 ) { 
            $data['title'] = "Summary";
            $this->load->view('tridia/default',$data);
        }else{                 
                $data['title'] = "Login";
                $this->load->view('login',$data);        
            } 
    }        
    public function allocation(){
        if ($this->tridia_model->is_logged_in() == 1 ) { 
            $data['title'] = "Allocation";
            $this->load->view('tridia/allocation',$data);
        }else{                 
                $data['title'] = "Login";
                $this->load->view('login',$data);        
            }
    }
    public function assetDesign(){
        if ($this->tridia_model->is_logged_in() == 1 ) { 
            $data['title'] = "Asset Design";
            $this->load->view('tridia/assetDesign',$data);
        }else{                 
                $data['title'] = "Login";
                $this->load->view('login',$data);        
            }
    }        
    public function blockMagistral(){
        if ($this->tridia_model->is_logged_in() == 1 ) { 
            $data['title'] = "Block Magistral";
            $this->load->view('tridia/blockMagistral',$data);
        }else{                 
                $data['title'] = "Login";
                $this->load->view('login',$data);        
            }
    }        
    public function chronicles(){
        if ($this->tridia_model->is_logged_in() == 1 ) { 
            $data['title'] = "Chronicles";
            $this->load->view('tridia/chronicles',$data);
        }else{                 
                $data['title'] = "Login";
                $this->load->view('login',$data);        
            }
    }        
    public function ranking(){
        if ($this->tridia_model->is_logged_in() == 1 ) { 
            $data['title'] = "Ranking";
            $this->load->view('tridia/ranking',$data);
        }else{                 
                $data['title'] = "Login";
                $this->load->view('login',$data);        
            }
    }

   public function popup($account_type = '', $page_name = '', $param2 = '', $param3 = '', $param4 = '',$param5 = '',$param6 = '')
    {
        $page_data['param2']		=	$param2;
        $page_data['param3']		=	$param3;
        $page_data['param4']		=	$param4;
        $page_data['param5']		=	$param5;
        $page_data['param6']		=	$param6;
        //$page_data['month_info'] = $this->tridia_model->select_data_info('dbo.tblMonth');
        $this->load->view($account_type.'/'.$page_name,$page_data);		
    }
        
   public function error()
     {
       $data['title'] = "Page Not Found";
       $data['icons'] = "error";
       $this->load->view('tridia/error',$data);
    }      
        
    public function logout()
    {
        $this->session->sess_destroy();	
        redirect(base_url());
    }  
}
