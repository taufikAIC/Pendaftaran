<?php
/**
 * 
 */
class Siswa extends CI_Controller {

	public function datadiri()
	{
		echo "kepo amat mas!";
	}
	public function input()
	{
		$this->load->view('input');
	}
	public function proses()
	{
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$nohp=$this->input->post('nohp');
		echo "<pre>
		Nama       : $nama
		Alamat     : $alamat
		No Hp      : $nohp
		</pre>";
	}
}