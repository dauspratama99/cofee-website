<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_slider');
		$this->load->model('m_about');
		$this->load->model('m_product');
		$this->load->model('m_galery');
		$this->load->model('m_berita');
    $this->load->model('m_message');
    $this->load->library('pagination');
  }

  public function index()
  {

    $data['slider'] = $this->db->query("SELECT * FROM slider")->row_array();
    $data['about'] = $this->db->query("SELECT * FROM about")->row_array();
    $data['contact'] = $this->db->query("SELECT * FROM contact")->row_array();
    $data['produk'] = $this->db->query("SELECT * FROM product LIMIT 0, 3")->result();
    $data['galerys'] = $this->db->query("SELECT * FROM galery LIMIT 0, 3")->result();
    $data['beritas'] = $this->db->query("SELECT * FROM berita LIMIT 0, 3")->result();


    $this->load->view('include/front_header');
    $this->load->view('front/index', $data);
    $this->load->view('include/front_footer', $data);

  }

  public function about()
  {
    $data['about'] = $this->db->query("SELECT * FROM about")->row_array();
    $data['contact'] = $this->db->query("SELECT * FROM contact")->row_array();

    $this->load->view('include/front_header');
    $this->load->view('front/about', $data);
    $this->load->view('include/front_footer', $data);
  }

  public function contact() 
  {
    $data['about'] = $this->db->query("SELECT * FROM about")->row_array();
    $data['contact'] = $this->db->query("SELECT * FROM contact")->row_array();



    $this->load->view('include/front_header');
    $this->load->view('front/contact', $data);
    $this->load->view('include/front_footer', $data);
  }

  public function product()
  {
    $data['about'] = $this->db->query("SELECT * FROM about")->row_array();
    $data['contact'] = $this->db->query("SELECT * FROM contact")->row_array();
		// $data['produk'] = $this->db->query("SELECT * FROM product")->result();


		//konfigurasi pagination
        $config['base_url'] = site_url('frontend/product'); //site url
        $config['total_rows'] = $this->db->count_all('product'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tagl_close']  = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['produk'] = $this->m_product->get_product_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('include/front_header');
        $this->load->view('front/product', $data);
        $this->load->view('include/front_footer', $data);

      }

      public function galery()
      {	
       $data['about'] = $this->db->query("SELECT * FROM about")->row_array();
       $data['contact'] = $this->db->query("SELECT * FROM contact")->row_array();
       // $data['galerys'] = $this->db->query("SELECT * FROM galery")->result();


        //konfigurasi pagination
        $config['base_url'] = site_url('frontend/galery'); //site url
        $config['total_rows'] = $this->db->count_all('galery'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tagl_close']  = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['galerys'] = $this->m_galery->get_galery_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('include/front_header');
        $this->load->view('front/galery', $data);
        $this->load->view('include/front_footer', $data);
      }

      public function berita()
      {
       $data['about'] = $this->db->query("SELECT * FROM about")->row_array();
       $data['contact'] = $this->db->query("SELECT * FROM contact")->row_array();
       // $data['beritas'] = $this->db->query("SELECT * FROM berita")->result();
	   	// $data['tmplberitas'] = $this->db->query("SELECT * FROM berita where id")->result();


       //konfigurasi pagination
        $config['base_url'] = site_url('frontend/berita'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tagl_close']  = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['beritas'] = $this->m_berita->get_berita_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();



        $this->load->view('include/front_header');
        $this->load->view('front/berita', $data);
        $this->load->view('include/front_footer', $data);
      }


      public function detail_berita($id)
      {	

       $data['about'] = $this->db->query("SELECT * FROM about")->row_array();
       $data['contact'] = $this->db->query("SELECT * FROM contact")->row_array();
       $data['beritaa'] = $this->db->query("SELECT * FROM berita where id='$id'")->row();
       $data['beritas'] = $this->db->query("SELECT * FROM berita")->result();




       $this->load->view('include/front_header');
       $this->load->view('front/detail_beritas' , $data);
       $this->load->view('include/front_footer', $data);
     }


     public function aksiInsertMessage()
     {

      $data = array(
        'nama' => stripslashes(strip_tags(htmlspecialchars($this->input->post('nama'),ENT_QUOTES))),
        'email' => stripslashes(strip_tags(htmlspecialchars($this->input->post('email'),ENT_QUOTES))),
        'kepala' => stripslashes(strip_tags(htmlspecialchars($this->input->post('kepala'),ENT_QUOTES))),
        'isi_pesan' => stripslashes(strip_tags(htmlspecialchars($this->input->post('isi_pesan'),ENT_QUOTES)))
        
      );

        //print_r($data);
      $save = $this->m_message->inputmessage($data);
      $this->session->set_flashdata('flash', 'Disimpan');
      redirect('frontend/index');

    }

    public function aksiInsertMessageContact()
    {

      $data = array(
        'nama' => stripslashes(strip_tags(htmlspecialchars($this->input->post('nama'),ENT_QUOTES))),
        'email' => stripslashes(strip_tags(htmlspecialchars($this->input->post('email'),ENT_QUOTES))),
        'kepala' => stripslashes(strip_tags(htmlspecialchars($this->input->post('kepala'),ENT_QUOTES))),
        'isi_pesan' => stripslashes(strip_tags(htmlspecialchars($this->input->post('isi_pesan'),ENT_QUOTES)))
      );

        //print_r($data);
      $save = $this->m_message->inputmessage($data);
      $this->session->set_flashdata('flash', 'Disimpan');
      redirect('frontend/contact');
      
    }



  }

  /* End of file frontend.php */
/* Location: ./application/controllers/frontend.php */