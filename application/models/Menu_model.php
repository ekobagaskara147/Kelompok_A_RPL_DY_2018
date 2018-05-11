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
		$qr = $this->db->query("SELECT id_makanan, nama_makanan, harga_makanan FROM menu_makanan;");
		return $qr->result();
	}
	
	public function get_items_seafood(){
		$qr = $this->db->query("SELECT id_seafood, nama_seafood, harga_seafood FROM menu_seafood;");
		return $qr->result();
	}
		
}
