<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tridia_model extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->database();
		$this->load->library('email');
		$this->load->helper('file');
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
	
	
    public function select_data_info($table)
    {       
        return $this->db->get_where($table)->result_array();
    }

    public function save_data_info($tbl_name,$data_array)
	{
		$insert_id=$this->db->insert($tbl_name,$data_array);
		if($insert_id)
		{
			return $insert_id;
		}
		return false;
	}
        
        public function update_data_info($tbl_name,$data,$where)
	{
		$this->db->where($where);
		$details=$this->db->update($tbl_name,$data);
		if($details)
		{
			return $details;
		} 
		return false;			
	}
        
        public function check_data_info($table,$where){
            $this->db->where($where);
            return $this->db->get_where($table)->result_array();
        }
        
         public function select_data_where_info($table){
            return $this->db->get($table);
        }
                
    function delete_data_info($tbl_name,$where)
    {
        $this->db->where($where);
        $details = $this->db->delete($tbl_name);
        if($details)
		{
			return $details;
		} 
		return false;
    }
	
    public function call_stored_procedure(){
        
        $data = $this->db->query("EXEC SP_ECVesselperformance '2018-05-01 7:00:00','2018-06-25 09:06'")->result_array();
        return $data;
        
    }
     function is_logged_in()
            {
                 if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ) {                
                  return 1;	
                }
                else{                 
                     return 0;                
                }
            }

     /*****login funtionality start********/
    
	function validate_login_info($email,$password){		
                $password = strrev(sha1(md5($password)));                
                $users = $this->db->get_where('users', array('email' => $email,'password' => $password));	
		if($users->num_rows() > 0) {
                        $row = $users->row();
                        if($row->userType==1){
                        $this->session->set_userdata('admin_login', '1');
                        $this->session->set_userdata('log_id', $row->user_id);
                        $this->session->set_userdata('log_email', $row->email);
                        $this->session->set_userdata('log_name', $row->fname." ".$row->lname);
                        $this->session->set_userdata('log_type', 'admin');
                        echo '1';
                    }                      
                     elseif ($row->userType==2) {
                        $this->session->set_userdata('user_login', '1');
                        $this->session->set_userdata('log_id', $row->user_id);
                        $this->session->set_userdata('log_email', $row->email);
                        $this->session->set_userdata('log_name', $row->fname." ".$row->lname);
                        $this->session->set_userdata('log_type', 'user');
                        echo '1';
                    }
                }
                else{
			echo 'Invalid Login Details.';
		}
		
		
	}
	
	
	
}