<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {

	public function getTampilContact() {
		$query = $this->db->get('contact');
		return $query->row();
	}

	public function updateContact($id, $data) {

		$this->db->where('id', $id);
		$this->db->update('contact', $data);

	}

	

}

/* End of file m_contact.php */
/* Location: ./application/models/m_contact.php */