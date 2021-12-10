<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_message extends CI_Model {

	public function inputmessage($data) {

		return $this->db->insert('message', $data);
	}

	public function getDataMessage() {
		$this->db->select('*');
		$this->db->from('message');
		$query = $this->db->get();
		return $query->result();
	}

	public function deleteMessage($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('message');
	}

	

}

/* End of file m_message.php */
/* Location: ./application/models/m_message.php */