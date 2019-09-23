<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class jurusan extends CI_Controller {
	public function index()
	{
		$data['judul']="tampil data jurusan";
		$this->load->view('jurusan/input', $data,FALSE);
	}
	public function input()
	{
		$data['judul']="input jurusan baru";
		$this->load->view('jurusan/input', $data,FALSE);
	}
	public function simpan()
	{
		$
	}
}