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
	
	public function login(){
		$this->load->view('login');
	}
	
	public function login_post(){
		$no_meja = strtoupper($this->input->post('no_meja'));
		
		$this->load->model('Web_model'); // memuat kelas Web_model.php agat fungsi didalamnya bisa dipanggil di controller ini_get
				
		$data = array(
			"no_meja" => $no_meja
		);
		//echo $this->Web_model->check_login($data);
		$user_login = $this->Web_model->check_login($data);
		if ($user_login){
			$no = (int)explode("M", $no_meja)[1];
			$this->session->set_userdata('no_meja', $no_meja);
			$this->session->set_userdata('id_pelanggan', $no);
			redirect('web/dashboardpelanggan');
		} else {
			echo "Meja tidak tersedia!";
		}
	}

	public function logout(){
		$this->session->unset_userdata(array('no_meja'=> '', 'id_pelanggan' => ''));
		$this->load->view('home');
	}
	
	public function dashboardpelanggan(){
		if (!$this->session->has_userdata('no_meja')){
			redirect('web/home');
		}else{
			$this->load->view('dashboardpelanggan');
		}
	}
	
	public function menu(){
		if (!$this->session->has_userdata('no_meja')){
			redirect('web/home');
		}else{
			$this->load->model('Menu_model');
		
			$items_makanan = $this->Menu_model->get_items_makanan();
			$items_seafood = $this->Menu_model->get_items_seafood();
			$items_sayuran = $this->Menu_model->get_items_sayuran();
			$items_jus = $this->Menu_model->get_items_jus();
			$items_minuman = $this->Menu_model->get_items_minuman();
				$data = array(
					"items_makanan" => $items_makanan,
					"items_seafood" => $items_seafood,
					"items_sayuran" => $items_sayuran,
					"items_jus" => $items_jus,
					"items_minuman" => $items_minuman,
				);
			$this->load->view('menu', $data);	
		}
	}
	
	public function input_pesanan() {
		$this->load->model('Menu_model');

		$counter = $this->input->post('item_counter');
		for($i=0; $i<$counter; $i++) {
			if ($this->input->post('item-no-'.$i)){
				$id_item = $this->input->post('item-no-'.$i);
				$banyak = $this->input->post('item-qty-'.$i);
				$items[] = array(
					'id_item' => $id_item,
					'jumlah' => $banyak
				);
			}
		}
		if (isset($items)){
			$id_pelanggan = $this->session->userdata('id_pelanggan');
			$this->Menu_model->input_pesanan($id_pelanggan, $items);
			redirect('web/menu');
		}
	}
}