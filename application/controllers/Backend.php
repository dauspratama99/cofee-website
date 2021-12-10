<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata("login") != TRUE || $this->session->userdata("login") != 1) {
			redirect(base_url("auth/index"));
		}
		$this->load->model('m_slider');
		$this->load->model('m_about');
		$this->load->model('m_product');
		$this->load->model('m_galery');
		$this->load->model('m_berita');
		$this->load->model('m_contact');
		$this->load->model('m_message');
		$this->load->model('m_login');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
	}

	public function index()
	{	

		$data['total'] = $this->db->query("SELECT COUNT(*) AS total FROM slider")->row_array();
		$data['product'] = $this->db->query("SELECT COUNT(*) AS total FROM product")->row_array();
		$data['galery'] = $this->db->query("SELECT COUNT(*) AS total FROM galery")->row_array();
		$data['berita'] = $this->db->query("SELECT COUNT(*) AS total FROM berita")->row_array();
		$data['about'] = $this->db->query("SELECT COUNT(*) AS total FROM about")->row_array();
		
		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/index', $data);
		$this->load->view('template/admin_footer');
		
	}

	public function form_slider() 
	{

		$tampilsli = $this->m_slider->getDataSlider();


		$data = array('tampil' => $tampilsli);

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_sliders', $data);
		$this->load->view('template/admin_footer');
		
	}

	public function form_editslider($id) {

		$editSlider = $this->m_slider->getTampilSlider($id);

		
		$data = array('slider' => $editSlider);


		// echo "<prev>";
		// echo print_r($data);
		// echo "<prev>";

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_editsliders', $data);
		$this->load->view('template/admin_footer');

	}

	public function aksiInsert()
	{
		$config['upload_path'] = './asset/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['gambar']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/img/'.$file_name;
		$thumb['new_image'] = './asset/img/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();
		$data = array(
			'gambar' => $file_name,
			'nama_web' => $this->input->post('nama_web'),
			'desc' => $this->input->post('desc')
		);

		//print_r($data);
		$save = $this->m_slider->inputslider($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('backend/form_slider');
	}


	// public function ajax_upload()
	// {

	// }

	public function aksiUpdate()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = './asset/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['gambar']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		//$this->upload->do_upload('Gambar');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/img/'.$file_name;
		$thumb['new_image'] = './asset/img/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();



		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array(
				'gambar' => $file_name,
				'nama_web' => $this->input->post('nama_web'),
				'desc' => $this->input->post('desc')

			);	

			//print_r($data);
			$save = $this->m_slider->updateSlider($data, $id);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('backend/form_slider');
		}
	}

	public function aksiInsertProduct()
	{
		$config['upload_path'] = './asset/produk/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['foto_produk']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('foto_produk');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/produk/'.$file_name;
		$thumb['new_image'] = './asset/produk/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();

		$data = array(

			'foto_produk' => $file_name,
			'nama_produk' => $this->input->post('nama_produk'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			'desc' => $this->input->post('desc')
		);

		//print_r($data);
		$save = $this->m_product->inputproduct($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('backend/form_product');
	}


	public function aksiUpdateProduct()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = './asset/produk/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['foto_produk']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		// $this->upload->do_upload('foto_produk');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/produk/'.$file_name;
		$thumb['new_image'] = './asset/produk/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();


		if (!$this->upload->do_upload('foto_produk')) {
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array(
				'foto_produk' => $file_name,
				'nama_produk' => $this->input->post('nama_produk'),
				'jumlah' => $this->input->post('jumlah'),
				'harga' => $this->input->post('harga'),
				'desc' => $this->input->post('desc')
			);

			//print_r($data);
			$save = $this->m_product->updateProduk($id, $data);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('backend/form_product');

		}

	}

	public function aksiInputGalery()
	{

		$config['upload_path'] = './asset/galery/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['foto_galery']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('foto_galery');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/galery/'.$file_name;
		$thumb['new_image'] = './asset/galery/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();

		$data = array(

			'foto_galery' => $file_name,
			'nama_galery' => $this->input->post('nama_galery')
		);

		//print_r($data);
		$save = $this->m_galery->inputgalery($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('backend/form_galery');

	}

	public function aksiUpdateGalery()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = './asset/galery/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['foto_galery']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		// $this->upload->do_upload('foto_galery');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/galery/'.$file_name;
		$thumb['new_image'] = './asset/galery/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();

		if (!$this->upload->do_upload('foto_galery')) {
			$error = array('error' => $this->upload->display_errors());
		}else{

			$data = array(

				'foto_galery' => $file_name,
				'nama_galery' => $this->input->post('nama_galery')
			);

			//print_r($data);
			$save = $this->m_galery->updateGalery($id, $data);
			$this->session->set_flashdata('flash', 'Disimpan');
			redirect('backend/form_galery');
		}

	}


	public function aksiInputBerita()
	{
		$config['upload_path'] = './asset/berita/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['gambar']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/berita/'.$file_name;
		$thumb['new_image'] = './asset/berita/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();

		$data = array(

			'gambar' => $file_name,
			'tgl_upload' => $this->input->post('tgl_upload'),
			'judul' => $this->input->post('judul'),
			'desc' => $this->input->post('desc'),
			'upload_by' => $this->input->post('upload_by')
		);

		//print_r($data);
		$save = $this->m_berita->inputberita($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('backend/form_berita');

	}


	public function aksiUpdateBerita()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = './asset/berita/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['gambar']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		// $this->upload->do_upload('gambar');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/berita/'.$file_name;
		$thumb['new_image'] = './asset/berita/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array(
				'gambar' => $file_name,
				'tgl_upload' => $this->input->post('tgl_upload'),
				'judul' => $this->input->post('judul'),
				'desc' => $this->input->post('desc'),
				'upload_by' => $this->input->post('upload_by')
			);

			//print_r($data);
			$save = $this->m_berita->updateBerita($id, $data);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('backend/form_berita');


		}
	}



	public function aksiHapus($id) {

		$this->m_slider->deleteSlider($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect(base_url('backend/form_slider'));
	}

	public function aksiHapusProduct($id)
	{
		$this->m_product->deleteProduct($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect(base_url('backend/form_product'));
	}

	public function aksiHapusGalery($id)
	{
		$this->m_galery->deleteGalery($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect(base_url('backend/form_galery'));
	}

	public function aksiHapusBerita($id)
	{
		$this->m_berita->deleteBerita($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect(base_url('backend/form_berita'));
	}


	public function form_about() 
	{
		$tampilabout = $this->m_about->getTampiAbout();


		$data = array('tampil' => $tampilabout);

		//print_r($data);

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_abouts', $data);
		$this->load->view('template/admin_footer');
	}


	public function aksiInputAbout() {

		$id = $this->input->post('id');
		$data = array(
			'isi_about' => $this->input->post('about')

		);	

		$save = $this->m_about->updateAbout($id, $data);
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('backend/form_about');

	}


	public function form_product() 
	{

		$tampilproduct = $this->m_product->getDataProduct();


		$data = array('tampil' => $tampilproduct);


		//print_r($data);

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_products', $data);
		$this->load->view('template/admin_footer');

	}


	public function form_editproduk($id) {

		$editProduk = $this->m_product->getTampilProduk($id);


		$data = array('produk' => $editProduk);


		// echo "<prev>";
		// echo print_r($data);
		// echo "<prev>";

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_editproduks', $data);
		$this->load->view('template/admin_footer');

	}

	public function form_galery()
	{

		$tampilgalery = $this->m_galery->getDataGalery();


		$data = array('galery' => $tampilgalery);

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_galerys', $data);
		$this->load->view('template/admin_footer');
	}

	public function form_editgalery($id) {

		$editGalery = $this->m_galery->getTampilGalery($id);


		$data = array('galerys' => $editGalery);


		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_editgalerys', $data);
		$this->load->view('template/admin_footer');

	}


	public function form_berita()
	{

		$tampilberita = $this->m_berita->getDataBerita();


		$data = array('tampil' => $tampilberita);

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_beritas', $data);
		$this->load->view('template/admin_footer');

	}

	public function form_editberita($id) {

		$editBerita = $this->m_berita->getTampilBerita($id);

		$data = array('berita' => $editBerita);


		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/form_editberitas', $data);
		$this->load->view('template/admin_footer');

	}

	public function contact()
	{

		$tampilcontact = $this->m_contact->getTampilContact();

		$data = array('contact' => $tampilcontact);


		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('backend/contact');
		$this->load->view('template/admin_footer');
	}

	public function aksiInputContact() {

		$id = $this->input->post('id');
		$data = array(
			'website' => $this->input->post('website'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'wa' => $this->input->post('wa')
		);	

		$save = $this->m_contact->updateContact($id, $data);
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('backend/contact');

	}


	public function message()
	{

		$tampilmessage = $this->m_message->getDataMessage();


		$data = array('message' => $tampilmessage);

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/message', $data);
		$this->load->view('template/admin_footer');

	}


	public function aksiHapusMessage($id)
	{
		$this->m_message->deleteMessage($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect(base_url('backend/message'));
	}


	public function gantiPassword()
	{

		$data['admin'] = $this->db->query("SELECT * FROM admin")->row_array();


		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('backend/ganti_password', $data);
		$this->load->view('template/admin_footer');
		
	}


	public function change_pass()
	{
		

		// $id = $this->input->post('id');  
		// $pass_lama = $this->input->post('pass_lama');
		// $pass_baru = $this->input->post('pass_baru');
		// $conf_pass = $this->input->post('conf_pass');

		// $data = array(
		// 	'password' => $conf_pass,
		// );

		// $this->db->where('id', $id);
		// $this->db->update('admin', $data);
		// echo "berhasil diubah!";

		// batas


		$old_pass=$this->input->post('pass_lama');
		$new_pass=$this->input->post('pass_baru');
		$confirm_pass=$this->input->post('conf_pass');
		$session_id=$this->session->userdata('username');
		$que=$this->db->query("select * from admin where username='$session_id'");
		$row=$que->num_rows();



		// $query = $this->db->get('admin');

		



		// print_r($query);





		// $data = array('array' => $que);

		// if($row > 0){
		// 	$data = $que->result_array();

		// 	echo $data['password'];

		// }



		if (password_verify($old_pass, $data['password'])) {
			if($confirm_pass == $new_pass) {
				$hash = password_hash($new_pass, PASSWORD_DEFAULT);
				$update = $this->db->query("Update admin set password='$hash' where id='$session_id'");
				if($update){
					echo "password telah diubah";
				} else {
					echo "Gagal gagnti password";
				}
			} else {
				echo "Confirm password tidak valid";
			}
		} else {
			echo "password lama tidak valid";
		}


		//redirect('backend/gantiPassword');
	}


	public function change_passwordko()
	{
		// $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('login')])->row_array();



		


		
		// $baru = $this->input->post('pass_baru');
		// $konfir = $this->input->post('konfir');


		// // print_r($baru);

		// $data = array(

		// 	'password' => $baru,

		// );

		// $this->db->where('id');
		// $this->db->update('admin', $data);

		// redirect('backend');



		// $pass_lama = $this->input->post('pass_lama');
		// $pass_baru = $this->input->post('pass_baru');
		// if (password_verify($pass_lama, $data['admin']['password'])) {
		// 	$this->session->set_flashdata('flash', 'Dihapus');
		// 	redirect(base_url('backend/gantiPassword'));
		// }else{
		// 	if ($pass_lama == $pass_baru) {
		// 		$this->session->set_flashdata('flash', 'Dihapus');
		// 		redirect(base_url('backend/gantiPassword'));
		// 	}else{
		// 			// pass ok
		// 		$password_hash = password_hash($pass_baru , PASSWORD_DEFAULT);


		// 		$this->db->set('password', $password_hash);
		// 		$this->where('username', $this->session->userdata('login'));
		// 		$this->update('admin');

		// 		$this->session->set_flashdata('flash', 'Disimpan');
		// 		redirect('backend/gantiPassword');
		// 	}

		// }

	}



	public function gantimang()
	{


		$id = $this->input->post('id');
		$passwordawal = $this->db->query("SELECT password FROM admin WHERE id='".$id."'")->row_array();
		$password = stripslashes(strip_tags(htmlspecialchars($this->input->post('pass_baru'),ENT_QUOTES)));
		$password2 = stripslashes(strip_tags(htmlspecialchars($this->input->post('pass_lama'),ENT_QUOTES)));
		$statuslama = 0;
		
		if(password_verify($password2, $passwordawal['password'])) {
			$statuslama = 1;
		}else{
			$statuslama = 0;
		}

		$status = 0;
		if(password_verify($password, $passwordawal['password'])) {
			$status = 1;
		}else{
			$status = 0;
		}
		//print_r($status);
		if($status == 0 && $statuslama == 1){
			$data = array(
				'password' => password_hash($this->input->post('pass_baru'),PASSWORD_DEFAULT)
			);	
			$save = $this->m_login->updatePassword($id, $data);
			$this->session->set_flashdata('flash', '1');
		}else if($status == 1){
			$this->session->set_flashdata('flash', '2');
		}else if($statuslama == 0){
			$this->session->set_flashdata('flash', '3');
		}
		redirect('backend/gantiPassword');






	}


}

/* End of file backend.php */
/* Location: ./application/controllers/backend.php */