<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['home'] = '#page-top';
		$data['extrakulikuler'] = '#extrakulikuler';
		$data['kontak'] = '#kontak';
		$data['berita'] = '#berita';
		$data['title'] = 'Beranda';
		$data['news'] = $this->db->query("SELECT * FROM berita WHERE status = 1 ORDER BY id_berita DESC LIMIT 6")->result();
		front_page('index', $data);
	}
}
