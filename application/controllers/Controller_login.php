<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
        $this->load->helper('url_helper');      
        //Do your magic here
    }
    
    public function index()
    {
        // $this->load->model('model_login.php');
        $this->load->view('../../index2.phtml');
    }
    public function loging()
    {
        $this->load->view('login.phtml');
    }

}

/* End of file Controllername.php */

?>