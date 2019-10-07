<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class jurusan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Jurusan');
	}
	public function index() //menampilkan data jurusan
	{
		$data['judul']="tampil data jurusan";
		$data['tampil']=$this->M_Jurusan->tampil()->result();
		$this->load->view('jurusan/tampil', $data,FALSE);
	}
	public function input() //menambah data
	{
		$data['judul']="input jurusan baru";
		$this->load->view('jurusan/input', $data,FALSE);
	}
	public function save() //menyimpan data
	{
		$kode=$this->input->post('kode_jurusan');
		$nama=$this->input->post('nama_jurusan');

			$data= array(
				'kode_jurusan'=>$kode,
				'nama_jurusan'=>$nama
			);
			$this->M_Jurusan->save($data);
			redirect ('jurusan','refresh');
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('kode_jurusan', $id);
		$this->db->delete('jurusan');
		redirect('jurusan','refresh');
	}
	public function edit() //mengubah data yang di pilih
	{
		$id=$this->uri->segment(3);
		$data['judul']="Edit data";
		$data['edit']=$this->M_Jurusan->getid($id)->row_array();
		$this->load->view("jurusan/edit",$data,FALSE);
	}
	public function update() //memperbaharui data
	{
		$kode=$this->input->post('kode_jurusan');
		$nama=$this->input->post('nama_jurusan');

			$data= array(
				'nama_jurusan'=>$nama
			);
			$this->M_Jurusan->update($data,$kode);
			redirect ('jurusan','refresh');
	}

}