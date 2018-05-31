<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }

	/**
	 * ini adalah fungsi untuk mengecek username dan password
	 * pada tabel 'user'
	 * @param $data -> adalah array yang berisi data username dan password
	 * return $user, fungsi ini akan mengembalikan jumlah record yang terdapat di table user berdasarkan array data
	 */
		
	public function get_items_makanan(){
		$qr = $this->db->query("SELECT id_menu, nama_menu, harga_menu FROM menu WHERE jenis_menu = 'makanan';");
		return $qr->result();
	}
	
	public function get_items_seafood(){
		$qr = $this->db->query("SELECT id_menu, nama_menu, harga_menu FROM menu WHERE jenis_menu = 'seafood';");
		return $qr->result();
	}
	
	public function get_items_sayuran(){
		$qr = $this->db->query("SELECT id_menu, nama_menu, harga_menu FROM menu WHERE jenis_menu = 'sayuran';");
		return $qr->result();
	}
	
	public function get_items_jus(){
		$qr = $this->db->query("SELECT id_menu, nama_menu, harga_menu FROM menu WHERE jenis_menu = 'jus';");
		return $qr->result();
	}
	
	public function get_items_minuman(){
		$qr = $this->db->query("SELECT id_menu, nama_menu, harga_menu FROM menu WHERE jenis_menu = 'minuman';");
		return $qr->result();
	}
	
	public function input_pesanan($id_pelanggan, $data){
		$input_id_pelanggan = array ('id_pelanggan' => $id_pelanggan);
		$qr = $this->db->insert('pemesanan', $input_id_pelanggan);
		if ($qr){
			$list_pesanan = $this->db->insert_id();
			foreach ($data as $item) {
				$data_pesan = array(
					'id_pemesanan' => $list_pesanan,
					'id_item' => $item['id_item'],
					'jumlah_item' => $item['jumlah']
				);
				$qr2 = $this->db->insert('menu_pesanan', $data_pesan);
			}
		}
	}
}