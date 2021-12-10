<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	public function getDataBerita() {
		$this->db->select('*');
		$this->db->from('berita');
		$query = $this->db->get();
		return $query->result();
	}


	public function inputberita($data) {

		return $this->db->insert('berita', $data);
	}

	public function updateBerita($id, $data) {

		$this->db->where('id', $id);
		$this->db->update('berita', $data);

	}

	public function getTampilBerita($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('berita');
		return $query->row();
	}

	public function getTampilContact() {
		$query = $this->db->get('contact');
		return $query->row();
	}

	public function deleteBerita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('berita');
	}

	function get_berita_list($limit, $start){
		$query = $this->db->get('berita', $limit, $start);
		return $query->result();
	}
	
	

}

/* End of file m_berita.php */
/* Location: ./application/models/m_berita.php */