<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRequest extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		//load form helper library
		$this->load->helper('form');

		//load form validation librabry
		$this->load->library('form_validation');

		//load session library
		$this->load->library('session');

		//load database
		/* $this->load->model('mlogin_database');

		if (! $this->session->userdata('nama')){
			redirect (base_url('login'));
		}*/
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('form_validation');

		$data['content'] = $this->db->get('tb_request');

		//$this->load->view('vrequest');
		$this->load->view('vheader');
		$this->load->view('request/vrequest_data',$data);
	}

	public function insert_view()
	{
		$this->load->view('vheader');
		$this->load->view('vrequest');
	}

	public function insert_data(){		
		$data = array(
			'plant_name' => $this->input->post('plant_name'),
			'date_request' => $this->input->post('date_request'),
			'date_test' => $this->input->post('date_test'),
			'date_install' => $this->input->post('date_install'),
			'content' => $this->input->post('content'),
			'summary' => $this->input->post('summary'),
			'test_method' => $this->input->post('test_method'),
			'monitoring_method' => $this->input->post('monitoring_method')
				);

		$this->db->insert('tb_request',$data);
		redirect (base_url('CRequest'),'refresh');
	}

	public function testform(){
		$this->load->view('vheader');
		$this->load->view('testform');
	}
}
