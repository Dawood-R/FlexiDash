<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends MX_Controller{

    function __construct() {
        parent::__construct();
    }
    
  
    function index() {
        $this->load->view('testView');
            
    }
    
 
        
}

/* End of file custompage.php */
/* Location: ./application/modules/custompage/controllers/custompage.php */

