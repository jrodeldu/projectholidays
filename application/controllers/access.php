<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends CI_Controller
{

      function __construct(){
          parent::__construct();

      		//$this->load->model('login_model');
      		$this->load->model('users_model');
      		$this->load->model('log_model');
          // Headers para no cachear la sesi�n y que al salir y hacer back en el navegador no vuelva al panel.
          $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
          $this->output->set_header('Pragma: no-cache');
      }

    	public function index ()
    	{
    	    // Se comprubeba si la sesi�n a�n existe por si el user cerr� el admin pero no cerr� sesi�n
          // y lo redirigimos directamente al dashboard, de lo contrario tendr� que hacer el login
          if ( $this->session->userdata('is_logged_in') ){
            redirect( site_url('admin/dashboard') );
          }else{
          	$this->login();
          }
    	}

      // Login de usuarios.
      public function login(){
          if ( $this->session->userdata('is_logged_in') ){
          	redirect( site_url('admin/dashboard') );
          }else{
          	// Reglas de validaci�n
          	// Se llamar� al callback validate_credentials que comprobar� los datos de login
          	$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]|valid_email|callback__validate_credentials[' . $this->input->post('userpass', TRUE) . ']|xss_clean');
            $this->form_validation->set_rules('userpass', 'Password', 'trim|required|min_length[6]|max_length[20]');

            if ($this->form_validation->run()) {
            	if($this->users_model->login($this->input->post('email'))){
            		$this->log_model->insert_log(NULL, NULL, 'login');
            		// redirigimos al �rea de miembros.
            		redirect( site_url('admin/dashboard') );
            	}else{
            		// incorrecto...
            		redirect('access', 'refresh');
            	}
            }else{
            	// Se recarga el form con los errores de validaci�n en caso de errores.
            	$this->load->view('admin/login');
            }

          }
      }

      /**
       * Callback de comprobaci�n de credenciales en el login
       *
       * @param $user_identity: es el campo identidad. El campo desde el que se llama el callback y no se le pasa explicitamente.
       * @param $user_pass: la contrase�a proporcionada por el user
       *
       */
      function _validate_credentials($user_identity, $user_pass = ''){
      	// Llamamos al modelo para que compruebe las credenciales
      	if($this->users_model->validate_credentials($user_identity, $user_pass)){
      		return TRUE;
      	}else{
      		// se establecen los mensajes de error.
      		$this->form_validation->set_message('_validate_credentials', $this->users_model->get_error());
      		return FALSE;
      	}
      }

    	public function logout ()
    	{

    	  $this->log_model->insert_log(NULL, NULL, 'logout');
    	  $this->session->sess_destroy();

        //Se cierra sesi�n y se vuelve al login.
    	  redirect( site_url('admin', 'refresh') );
    	}

  }