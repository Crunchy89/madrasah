<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('berita_model');
	}
	public function index()
	{
		$data['berita'] = $this->db->get('berita')->result();
		admin_page('index', $data);
	}
	public function tambah()
	{
		$model = $this->berita_model;
		$validation = $this->form_validation;
		$validation->set_rules($model->berita_rules());
		if ($validation->run()) {
			$model->tambah();
		} else {
			admin_page('berita/tambah');
		}
	}
	public function deactive()
	{
		$model = $this->berita_model;
		$id = $this->uri->segment('3');
		$model->deactive($id);
	}
	public function active()
	{
		$model = $this->berita_model;
		$id = $this->uri->segment('3');
		$model->active($id);
	}
	public function hapus()
	{
		$model = $this->berita_model;
		$model->hapus();
	}
	public function edit()
	{
		$model = $this->berita_model;
		$validation = $this->form_validation;
		$validation->set_rules($model->berita_rules());
		$id = $this->uri->segment('3');
		if ($validation->run()) {
			$model->edit_data();
		} else {
			$data['berita'] = $this->db->get_where('berita', ['id_berita' => $id])->row();
			admin_page("berita/edit", $data);
		}
	}
}
