<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {
	
	public function index(){
            
            echo 'School';
            //$this->load->view('welcome_message');
            //$this->load->view('masum');
	}
	
        public function add(){                        
            echo 'add';
	}
        
        public function edit( $id = 10 ){                        
            echo $id;
	}                
        
}
