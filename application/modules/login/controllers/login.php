<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller{

    function __construct() {
        parent::__construct();
    }
    
  
    function index() {
        $this->load->view('loginview');
            
    }
        
}

/* End of file custompage.php */
/* Location: ./application/modules/custompage/controllers/custompage.php */