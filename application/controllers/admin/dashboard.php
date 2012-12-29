<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

        public function __construct()
        {
            parent::__construct();
        }

    	public function index ()
    	{
            $data['view'] = 'admin/index';
            $this->load->view('admin/_includes/template', $data);
    	}

}