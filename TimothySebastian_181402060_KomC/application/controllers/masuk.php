<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Masuk extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
 
	public function index(){
		$data['data'] = $this->model_data->tampil_data()->result(); 
		$this->load->view('masuk_view',$data);
	}
	public function tambah(){
		$this->load->view('v_tambah');
	}

	public function tambah_aksi(){

		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
	$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
			
 
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat
			); 
		$this->model_data->tambah_data($data,'data');
		redirect('masuk');
	}
	public function hapus($nip){
		$where = array('nip' => $nip);
		$this->model_data->hapus_data($where,'data');
		redirect('masuk/index');
	}
	public function edit($nip){
	$where = array('nip' => $nip);
	$data['data'] = $this->model_data->edit_data($where,'data')->result();
	$this->load->view('v_edit',$data);
	}

	 

	public function update(){
	$nip = $this->input->post('nip');
	$nama = $this->input->post('nama');
	$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');

	$data = array(
		'nip' => $nip,
		'nama' => $nama,
		'jenis_kelamin' => $jenis_kelamin,
		'alamat' => $alamat
	);
 
	$where = array(
		'nip' => $nip
	);
 
	$this->model_data->update_data($where,$data,'data');
	redirect('masuk/index');
	}
}