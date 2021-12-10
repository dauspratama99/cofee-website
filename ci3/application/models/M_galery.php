<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galery extends CI_Model {

	public function getDataGalery() {
		$this->db->select('*');
		$this->db->from('galery');
		$query = $this->db->get();
		return $query->result();
	}


	public function inputgalery($data) {

		return $this->db->insert('galery', $data);
	}


	public function getTampilGalery($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('galery');
		return $query->row();
	}


	public function updateGalery($id, $data) {

		$this->db->where('id', $id);
		$this->db->update('galery', $data);

	}

	public function deleteGalery($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('galery');
	}

	function get_galery_list($limit, $start){
		$query = $this->db->get('galery', $limit, $start);
		return $query->result();
	}

	

}

/* End of file m_galery.php */
/* Location: ./application/models/m_galery.php */