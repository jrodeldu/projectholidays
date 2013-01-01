<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('calendario_model');
		$this->load->model('log_model');
	}


	public function index()
	{
		$data['requests'] = $this->calendario_model->get_data();
		$data['view'] = 'admin/calendar/index';
		$this->load->view('admin/_includes/template', $data);
	}


	public function show_calendar(){
		$data['view'] = 'admin/calendar/calendar_widget';
		$this->load->view('admin/_includes/template', $data);
	}


	public function get_events(){
		// Se muestran las vacaciones confirmadas.
		$results = $this->calendario_model->get_all(array('confirmed' => 1));
		// Una vez recogidos los eventos debemos asignar los valores devueltos con el
		// nombre correspondiente para que el fullcalendar los reconozca.
		if($results){
            foreach ($results as $row){
                // Se rellena el array con todos los resultados
                $arrayEvents[] = array(
                    'id'    =>  $row->id,
                    'title'   =>  $row->observaciones,
                    'start' =>  $row->finicio,
                    'end' =>  $row->ffin
                    //'allDay' => false,
                );
            }
        // se muestran en formato json, lo recoge la función ajax
        echo json_encode($arrayEvents);
        }

	}

	public function update_event($id_event = null, $start = null, $end = null){

		if($end == 'null' || empty($end)){
			$end = $start;
		}

		$this->calendario_model->update_status($id_event, array('finicio' => $start, 'ffin' => $end));
		die();

		$result = $this->calendario_model->update_event($id_event, $start, $end);
		if($result){
			$this->log_model->insert_log('calendario', $id_event, 'Ha actualizado las vacaciones solicitadas');
			return TRUE;
		}
	}


	public function edit_status(){
		if ($this->input->post()) {

			$id = $this->uri->segment(4);
			$status = $this->input->post('status');
			if ($this->calendario_model->update_status($id, array('satus' => $status))) {
				# code...
			}
		}else{
			echo 'NOPE! Chuck chesta!';
		}
	}


    public function show()
    {

        $id = $this->uri->segment(4);

        if(count($this->calendario_model->get($id)) == 0){

            $this->session->set_flashdata('error', 'Esta tarea no existe o ha sido borrada');
            redirect(site_url('admin/calendario'));

        }else{
            $data['result'] = $this->calendario_model->get_data($id);
            $data['view'] = 'admin/calendar/show';
            $this->load->view('admin/_includes/template', $data);

        }


    }

	public function add_event(){

		$data['view'] = 'admin/calendar/calendar_widget';

            if ($datos = $this->input->post()){

            $this->form_validation->set_rules('finicio', 'finicio', 'required|xss_clean');
            $this->form_validation->set_rules('ffin', 'ffin', 'required|xss_clean');
            $this->form_validation->set_rules('observaciones', 'observaciones', 'trim|xss_clean');

                if ($this->form_validation->run() == FALSE){

                    $data['view'] = 'admin/calendar/calendar_widget';

                }else{

                    $id = $this->calendario_model->insert_event($datos);

                    if($id){
                    	$this->log_model->insert_log('calendario', $id, 'Ha solicitado unas las vacaciones');
                    	$this->session->set_flashdata('success', 'Se ha insertado correctamente');
                    }else{
                    	$this->session->set_flashdata('error', 'No se ha podido insertar');
                    }

                    redirect(site_url('admin/calendario'));
            	}


		}

		$this->load->view('admin/_includes/template', $data);

	}

}

/* End of file calendario.php */
/* Location: ./application/controllers/dashboard/calendario.php */
