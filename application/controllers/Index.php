<?php 

	/**
	 * 
	 */
	class Index extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('template/header');
			$this->load->view('utama/index');
			$this->load->view('template/footer');
		}

		function produk($produk){

			$data['produk'] = urldecode($produk);
			$pr = urldecode($produk);

			$data['produk2'] = $this->db->get_where('tbl_produk',['sub_kategori' => $pr])->result_array();

			$this->load->view('template/header');
			$this->load->view('utama/produk', $data);
			$this->load->view('template/footer');

		}

		function detail_produk($id){

			$data['produk'] = $this->db->get_where('tbl_produk',['id' => $id])->row_array();
			$kategori = $data['produk']['sub_kategori'];
			
			$data['kategori'] = $this->db->get_where('tbl_produk',['sub_kategori' => $kategori])->result_array();

			$this->load->view('template/header');
			$this->load->view('utama/detail_produk', $data);
			$this->load->view('template/footer');

		}

	}

?>