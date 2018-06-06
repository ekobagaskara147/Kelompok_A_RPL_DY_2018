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

	public function datameja()
	{
		$this->load->view('dashboard_kar/datameja');
	}

	public function lihatpesanan()
	{
		$this->load->view('dashboard_kar/lihatpesanan');
	}

	public function getStatusMeja()
	{
		$this->load->model('Dashboard_model');
		
		$data = $this->Dashboard_model->getStatusMeja();
		foreach($data->result() as $row){
			$rowdata = array(
				"no_meja" => $row->no_meja,
				"status" => $row->status
			);
			$listmeja[]= $rowdata;
		}
		if (isset($listmeja)) {
			print(json_encode($listmeja));
		}
		
	}

	public function getDataPesanan()
	{
		$this->load->model('Dashboard_model');
		$no_meja = $this->input->get('no_meja');
		$data = $this->Dashboard_model->getDataPesanan($no_meja);
		foreach($data as $row){
			$rowdata = array(
				"nama_menu" => $row->nama_menu,
				"harga_menu" => $row->harga_menu,
				"jumlah_item" => $row->jumlah_item
			);
			$listmenu[]= $rowdata;
		}
		if (isset($listmenu)) {
			print(json_encode($listmenu));
		} else {
			print('[]');
		}
	}

	function addMenu(){
		$redir_view = $this->input->post('view_jenis_menu');
        $data = array(
            'nama_menu'		=> $this->input->post('nama_menu'),
            'harga_menu'	=> $this->input->post('harga_menu'),
			'jenis_menu'	=> $this->input->post('jenis_menu')
        );
		$this->load->model('Menu_model');
        $this->Menu_model->addMenu($data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('dashboard/'.$redir_view);
    }

    function editMenu(){
    	$redir_view = $this->input->post('view_jenis_menu');
		$id_menu = $this->input->post('id_menu');
        $data = array(
            'nama_menu'		=> $this->input->post('nama_menu'),
            'harga_menu'	=> $this->input->post('harga_menu'),
			
        );
		$this->load->model('Menu_model');
        $this->Menu_model->editMenu($data,$id_menu);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('dashboard/'.$redir_view);
    }

    function hapusMenu(){
		$redir_view = $this->input->post('view_jenis_menu');
		$data = array (
			'id_menu' => $this->input->post('id_menu')
		);
		$this->load->model ('Menu_model');
		$this->Menu_model->hapusMenu($data);
		redirect('dashboard/'.$redir_view);
	}

	function konfirmasiPembayaran(){
		$idMeja = $this->input->get('no_meja');
		$this->load->model('Dashboard_model');
		$this->Dashboard_model->kosonginMeja($idMeja);
		redirect('dashboard/lihatpesanan');
	}

	function getStat(){
		$this->load->model('Dashboard_model');
		$data = $this->Dashboard_model->getStat();
		$items = array(
			'pelanggan_bayar' => $data->pelanggan_bayar,
			'jumlah_menu' => $data->jumlah_menu,
			'pemasukan' => $data->pemasukan
		);
		print(json_encode($items));
	}
}