<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}


	public function index()
	{
		$this->load->view('backend/login');
		
	}


	public function logins()
	{
		$this->load->view('backend/logins');
	}

	public function aksi_login(){

		// function antiinjection($data){
		// 	$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
		// 	return $filter_sql;
		// }

		$username = stripslashes(strip_tags(htmlspecialchars($this->input->post('username'),ENT_QUOTES)));
		$password = stripslashes(strip_tags(htmlspecialchars($this->input->post('password'),ENT_QUOTES)));

		$salt ='B24xz';

		$where = array(
			'username' => $username,
			'password' => md5($salt . $password)
		);
		$cek = $this->m_login->cek_login('admin',$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login",
				"login"=> true
			);

			$this->session->set_userdata($data_session, true);

			redirect(base_url('backend/index'));

		}else{
			echo "<script>
			alert('username dan Password Salah!');
			window.location='" . site_url('auth/index') . "'
			</script>";
		}
	}

	public function aksi_loginhash(){

		// function antiinjection($data){
		// 	$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
		// 	return $filter_sql;
		// }

		$username = stripslashes(strip_tags(htmlspecialchars($this->input->post('username'),ENT_QUOTES)));
		$password = stripslashes(strip_tags(htmlspecialchars($this->input->post('password'),ENT_QUOTES)));

		//$salt ='B24xz';

		$where = array(
			'username' => $username,

		);
		$cek_login = $this->m_login->cek_login('admin',$where);
		$cek = $cek_login->num_rows();

		if($cek > 0){

			$data = $cek_login->result_array()[0];

			if(password_verify($password, $data['password'])) {
				$data_session = array(
					'nama' => $username,
					'status' => "login",
					"login"=> true
				);

				$this->session->set_userdata($data_session, true);

				redirect(base_url('backend/index'));

			} else {
				echo "<script>
				alert('Password Salah!');
				window.location='" . site_url('auth/index') . "'
				</script>";				
			}

		}else{
			echo "<script>
			alert('username tidak ditemukan!');
			window.location='" . site_url('auth/index') . "'
			</script>";
		}
	}



	public function logout() {

		$this->load->library('session');
		$this->session->sess_destroy();
		redirect(base_url('auth/index'));

		//redirect(base_url('index.php/auth'));

	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */