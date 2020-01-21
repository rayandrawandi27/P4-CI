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
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
	 {
		 parent::__construct();
		 $this->load->model('Mwelcome');
	 }
	 
	public function index()
	{
		//echo $this->Mwelcome->get();
		
		$data['luaspp']=$this->Mwelcome->luas(7,5);
		
		//$this->load->view('welcome_message',$data);
		$this->load->view('input');
	}
	
	public function test()
	{
		echo "Ini Mencoba";
	}
	
	public function hitung_luas()
	{
		$panjang = $this->input->post('panjang');
		$lebar = $this->input->post('lebar');
		$data['luaspp']=$this->Mwelcome->luas($panjang,$lebar);
		$this->load->view('input',$data);
	}
}