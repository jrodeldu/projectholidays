<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario_model extends MY_Model {

	public function get_data($id = NULL){
		$this->db->select('calendario.id, nombre, apellidos, email, finicio, ffin, observaciones, confirmed');
		$this->db->join('users', 'users.id = calendario.id_user');
		$where = array('calendario.id' => $id);

		if ($id) {
			$result = $this->calendario_model->get($where);
		}else{
			$result = $this->calendario_model->get_all();
		}


		if ($result)
            return $result;
        else
            return FALSE;
	}

	public function update_event($id, $date_start, $date_end){

		$data = array(
			'finicio' => $date_start,
			'ffin' => $date_end
		);

		// Función update MY_Model.
		$this->update($id, $data);

		// Comprobamos si hubo fila afectada por el cambio.
        $return = $this->db->affected_rows() == 1;

        if ($return)
            return TRUE;
        else
            return FALSE;

	}

	public function insert_event($datos){

		$data = array(
					'id_user' => $this->session->userdata('id'),
					'finicio' => $datos['finicio'],
					'ffin' => $datos['ffin'],
					'observaciones' => $datos['observaciones']
					);

		$id = $this->insert($data);

		if($id){
			return $id;
		}else{
			return FALSE;
		}
	}


}

/* End of file calendario_model.php */
/* Location: ./application/models/calendario_model.php */
