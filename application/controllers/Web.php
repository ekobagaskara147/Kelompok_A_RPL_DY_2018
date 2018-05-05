<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		 $data = $this->db->query('select * from pelanggan');
		 foreach($data->result_array() as $d){
			 echo"" ;
		 }
	}
	
	public function home(){
		$this->load->view('home');
	}
		
	public function menu(){
		$this->load->view('menu');
	}
}
