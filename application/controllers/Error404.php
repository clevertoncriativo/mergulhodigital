<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {
    
    function __construct(){
        parent::__construct();

        $this->context = array(
            'title' =>  'Mergulho Digital | 404',
            'route' => ''
        );
    }	   
    
    public function index(){

        $this->load->view('error404',  $this->context);
        
	}
}
?>