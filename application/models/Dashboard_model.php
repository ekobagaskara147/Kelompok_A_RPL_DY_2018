<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
	
	public function getStatusMeja(){
		$qr = $this->db->select("*")->get('meja'); // get_where adalah fungsi pada CI untuk mengambil data bedasarkan informasi tertentu
		return $qr;
	}
	
	public function getDataPesanan($no_meja){
		$qr = $this->db->query("SELECT * FROM meja INNER JOIN menu_pesanan ON meja.id_pemesanan = menu_pesanan.id_pemesanan INNER JOIN menu ON menu_pesanan.id_item = menu.id_menu where meja.no_meja = '$no_meja'")->result();
		return $qr;
		
	}
	
	public function kosonginMeja($idMeja){
		$meja = $this->db->get_where('meja', array('no_meja =' => $idMeja))->row();
		$data = array(
			'status' => '0', 
			'id_pemesanan' => '0'
		);
		$this->db->where('no_meja',$idMeja);
		$this->db->update('meja', $data);
	
	}
	
}