<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * function index adalah file yang pertama kali di baca oleh program
	 * tugas kontroler adalah mengarahkan 
	 * untuk memanggil file yang di panggil adalah nama function
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function halo() //nama function
	{
		$this->load->view('halo_taufik'); //nama file
	}
	public function biodata()
	{
		$this->load->view('bio');
	}
}
