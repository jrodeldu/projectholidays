<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller{
    
    function index(){
        $this->load->view('404');
    }
    
}