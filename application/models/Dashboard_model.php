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