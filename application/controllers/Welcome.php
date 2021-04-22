<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('login');
	}
	//proses login
	public function Login()
	{
		$username = $this->input->post('username'); //true
		$password = $this->input->post('password'); //true
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$LoginSukses = $this->db->get('tbl_user')->row_array();
		if ($LoginSukses > 0) {
			redirect('Welcome/Beranda');
		}else{
			redirect('Welcome/');
		}
	}
	public function Beranda()
	{
		$this->load->view('beranda');
	}
	//proses halaman asset
	public function Asset()
	{
		$this->load->model('Modeldata');
		$data['data_asset'] = $this->Modeldata->GetDataAsset();
		$this->load->view('beranda', $data);
	}
	public function Investor()
	{
		$this->load->model('Modeldata');
		$data['data_investor'] = $this->Modeldata->GetDataInvestor();
		$this->load->view('beranda', $data);
	}
	public function User()
	{
		$this->load->model('Modeldata');
		$data['data_user'] = $this->Modeldata->GetDataUser();
		$this->load->view('beranda', $data);
	}
	public function Registrasi()
	{
		$this->load->view('registrasi');
	}
	public function tambahDataAsset()
	{
		$this->load->view('beranda');
	}
	public function tambahDataInvestor()
	{
		$this->load->view('beranda');
	}
	public function tambahDataUser()
	{
		$this->load->view('beranda');
	}
	public function simpanAsset()
	{
		$this->load->model('Modeldata');
		$nama_barang = $this->input->post('nama_barang');//true
		$jumlah = $this->input->post('jumlah');//true
		$kondisi = $this->input->post('kondisi');//true
		$keterangan = $this->input->post('keterangan');//true
		$this->Modeldata->simpanAsset($nama_barang, $jumlah, $kondisi, $keterangan);
		redirect('Welcome/Asset');
	}
	public function simpanInvestor()
	{
	    $this->load->model('Modeldata');
	    $nama = $this->input->post('nama');//true
	    $alamat = $this->input->post('alamat');//true
	    $keterangan = $this->input->post('keterangan');//true
	    $this->Modeldata->simpanInvestor($nama, $alamat, $keterangan);
	    redirect('Welcome/Investor');
	}
	public function simpanUser()
	{
	    $this->load->model('Modeldata');
	    $nama = $this->input->post('nama');//true
	    $username = $this->input->post('username');//true
	    $password = $this->input->post('password');//true
	    $this->Modeldata->simpanUser($nama, $username, $password);
	    redirect('Welcome/User');
	}
	public function simpanUser2()
	{
	    $this->load->model('Modeldata');
	    $nama = $this->input->post('nama');//true
	    $username = $this->input->post('username');//true
	    $password = $this->input->post('password');//true
	    $this->Modeldata->simpanUser($nama, $username, $password);
	    redirect('Welcome/');
	}
	public function getIdAsset($id)
	{
		$this->load->model('Modeldata');
		$data = $this->Modeldata->getIdAsset($id)->row();
		echo json_encode($data);
	}
	public function hapusDataAsset()
	{
		$this->load->model('Modeldata');
		$this->Modeldata->hapusDataAsset();
		redirect('Welcome/Asset');
	}
	public function getIdInvestor($id)
	{
		$this->load->model('Modeldata');
		$data = $this->Modeldata->getIdInvestor($id)->row();
		echo json_encode($data);
	}
	public function hapusDataInvestor()
	{
		$this->load->model('Modeldata');
		$this->Modeldata->hapusDataInvestor();
		redirect('Welcome/Investor');
	}
	public function getIdUser($id)
	{
		$this->load->model('Modeldata');
		$data = $this->Modeldata->getIdUser($id)->row();
		echo json_encode($data);
	}
	public function hapusDataUser()
	{
		$this->load->model('Modeldata');
		$this->Modeldata->hapusDataUser();
		redirect('Welcome/User');
	}

	public function EditDataAsset($id_asset = null)
	{
		$this->load->model('Modeldata');
		$data['getIdDataAsset'] = $this->Modeldata->getIdDataAsset($id_asset);
		$this->load->view('beranda', $data);
	}
	public function UpdateAsset()
	{
		$this->load->model('Modeldata');
		$id_asset = $this->input->post('id_asset');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
		$kondisi = $this->input->post('kondisi');
		$keterangan = $this->input->post('keterangan');
		$this->Modeldata->UpdateAsset($id_asset, $nama_barang, $jumlah, $kondisi, $keterangan);
		redirect('Welcome/Asset');
	}
	public function EditDataInvestor($id_investor = null)
	{
		$this->load->model('Modeldata');
		$data['getIdDataInvestor'] = $this->Modeldata->getIdDataInvestor($id_investor);
		$this->load->view('beranda', $data);
	}
	public function UpdateInvestor()
	{
		$this->load->model('Modeldata');
		$id_investor = $this->input->post('id_investor');
		$nama = $this->input->post('nama');
		$alamat =$this->input->post('alamat');
		$keterangan =$this->input->post('keterangan');
		$this->Modeldata->UpdateInvestor($id_investor, $nama, $alamat, $keterangan);
		redirect('Welcome/Investor');
	}
	public function EditDataUser($id_user = null)
	{
		$this->load->model('Modeldata');
		$data['getIdDataUser'] = $this->Modeldata->getIdDataUser($id_user);
		$this->load->view('beranda', $data);
	}
	public function UpdateUser()
	{
		$this->load->model('Modeldata');
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->Modeldata->UpdateUser($id_user, $nama, $username, $password);
		redirect('Welcome/User');
	}
}
