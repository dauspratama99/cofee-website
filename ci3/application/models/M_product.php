<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

	public function getDataProduct() {
		$this->db->select('*');
		$this->db->from('product');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputproduct($data) {

		return $this->db->insert('product', $data);
	}

	public function getTampilProduk($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('product');
		return $query->row();
	}
	

	public function updateProduk($id, $data) {

		$this->db->where('id', $id);
		$this->db->update('product', $data);

	}

	public function deleteProduct($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('product');
	}

	function get_product_list($limit, $start){
		$query = $this->db->get('product', $limit, $start);
		return $query->result();
	}


	function datas($number,$offset){
		return $query = $this->db->get('product',$number,$offset)->result();		
	}


	function jumlah_data(){
		return $this->db->get('product')->num_rows();
	}

	

}

/* End of file m_product.php */
/* Location: ./application/models/m_product.php */