<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class agama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Agama');
	}
	public function index()
	{
		$data['judul']="tampil data agama";
		$data['tampil']=$this->M_Agama->tampil()->result();
		$this->load->view('agama/tampil',$data,FALSE);
	}
	public function input()
	{
		$data['judul']="input agama baru";
		$this->load->view('agama/input',$data,FALSE);
	}
	public function save()
	{
		$id=$this->input->post('id_agama');
		$nama=$this->input->post('nama_agama');

			$data= array(
				'id_agama'=>$id,
				'nama_agama'=>$nama
			);
			$this->M_Agama->save($data);
			redirect ('agama','refresh');
	}
	public function edit()
	{
		$id=$this->uri->segment(3);
		$data['judul']="Edit data";
		$data['edit']=$this->M_Agama->getid($id)->row_array();
		$this->load->view("agama/edit",$data,FALSE);
	}
	public function update()
	{
		$id=$this->input->post('id_agama');
		$nama=$this->input->post('nama_agama');

			$data= array(
				'nama_agama'=>$nama
			);
			$this->M_Agama->update($data,$id);
			redirect ('agama','refresh');
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_agama', $id);
		$this->db->delete('agama');
		redirect('agama','refresh');
	}
}