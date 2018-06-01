<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->view('dashboard_kar/dash');
	}

	public function makanan()
	{
		$this->load->model('Menu_model');
		$items=$this->Menu_model->get_items_makanan();
		$data=array(
			"items"=>$items,
			"jenis_menu"=>"makanan"
		);
		$this->load->view('dashboard_kar/menu',$data);
	}

	public function minuman()
	{
		$this->load->model('Menu_model');
		$items=$this->Menu_model->get_items_minuman();
		$data=array(
			"items"=>$items,
			"jenis_menu"=>"minuman"
		);
		$this->load->view('dashboard_kar/menu',$data);
	}

	public function sayuran()
	{
		$this->load->model('Menu_model');
		$items=$this->Menu_model->get_items_sayuran();
		$data=array(
			"items"=>$items,
			"jenis_menu"=>"sayuran"
		);
		$this->load->view('dashboard_kar/menu',$data);
	}

	public function seafood()
	{
		$this->load->model('Menu_model');
		$items=$this->Menu_model->get_items_seafood();
		$data=array(
			"items"=>$items,
			"jenis_menu"=>"seafood"
		);
		$this->load->view('dashboard_kar/menu',$data);
	}

	public function jus()
	{
		$this->load->model('Menu_model');
		$items=$this->Menu_model->get_items_jus();
		$data=array(
			"items"=>$items,
			"jenis_menu"=>"jus"
		);
		$this->load->view('dashboard_kar/menu',$data);
	}
}