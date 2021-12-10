<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_slider extends CI_Model {

	public function inputslider($data) {

		return $this->db->insert('slider', $data);

	}

	public function getDataSlider() {
		$this->db->select('*');
		$this->db->from('slider');
		$query = $this->db->get();
		return $query->result();
	}


	public function getTampilSlider($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('slider');
		return $query->row();
	}

	public function updateSlider($data, $id) {

		$this->db->where('id', $id);
		$this->db->update('slider', $data);

	}

	public function deleteSlider($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('slider');
	}


}

/* End of file m_slider.php */
/* Location: ./application/models/m_slider.php */