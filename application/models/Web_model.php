<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }

	/**
	 * ini adalah fungsi untuk mengecek username dan password
	 * pada tabel 'user'$this->load->view('menu', $data);
	 * @param $data -> adalah array yang berisi data username dan password
	 * return $user, fungsi ini akan mengembalikan jumlah record yang terdapat di table user berdasarkan array data
	 */
	public function check_login($data){
		$qr = $this->db->get_where('pelanggan', $data)->result(); // get_where adalah fungsi pada CI untuk mengambil data bedasarkan informasi tertentu
		if (count($qr) > 0){
			return $data;
		} else {
			return false;
		}
	}

	public function check_login_karyawan($data){
		$qr = $this->db->select("*")->get_where('karyawan', $data);
		return $qr;
	}
}