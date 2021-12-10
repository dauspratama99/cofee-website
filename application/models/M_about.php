<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {

	public function getDataAbout() {
		$this->db->select('*');
		$this->db->from('about');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputabout($data) {

		return $this->db->insert('about', $data);

	}


	public function getTampiAbout() {
		$query = $this->db->get('about');
		return $query->row();
	}

	public function updateAbout($id, $data) {

		$this->db->where('id', $id);
		$this->db->update('about', $data);

	}

	
	

}

/* End of file m_about.php */
/* Location: ./application/models/m_about.php */