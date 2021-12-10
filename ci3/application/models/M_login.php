<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function cek_login($table,$where){     
		return $this->db->get_where($table,$where);
	}	


	public function getTampilAdmin($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('admin');
		return $query->row();
	}


	public function updatePassword($id, $data) {

		$this->db->where('id', $id);
		$this->db->update('admin', $data);

	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */