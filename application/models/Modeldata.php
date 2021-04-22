<?php 
	/**
	 * 
	 */
	class Modeldata extends CI_Model
	{
		
		public function GetDataAsset()
		{
			return $this->db->get('tbl_asset')->result();
		}
		public function GetDataInvestor()
		{
			return $this->db->get('tbl_investor')->result();
		}
		public function GetDataUser()
		{
			return $this->db->get('tbl_user')->result();
		}
		public function simpanAsset($nama_barang, $jumlah, $kondisi, $keterangan)
		{
			$isiData = array(
				'nama_barang' 	=> $nama_barang,
				'jumlah'		=> $jumlah,
				'kondisi'		=> $kondisi,
				'keterangan'	=> $keterangan,
			 	);
			$this->db->insert('tbl_asset', $isiData);
		}
		public function simpanInvestor($nama, $alamat, $keterangan)
		{
			$isiData = array(
				'nama' 			=> $nama, 
				'alamat'        => $alamat,
				'keterangan'    => $keterangan,
			);
			$this->db->insert('tbl_investor', $isiData);
		}
		public function simpanUser($nama, $username, $password)
		{
			$isiData = array(
				'nama' 			=> $nama, 
				'username'      => $username,
				'password'      => $password,
			);
			$this->db->insert('tbl_user', $isiData);
		}
		public function getIdAsset($id)
		{
			$this->db->where('id_asset', $id);
			return $this->db->get('tbl_asset');
		}
		public function hapusDataAsset()
		{
			$hapusData = $this->input->post('id_asset');//true
			$this->db->where('id_asset', $hapusData);
			$this->db->delete('tbl_asset');
		}
		public function getIdInvestor($id)
		{
			$this->db->where('id_investor', $id);
			return $this->db->get('tbl_investor');
		}
		public function hapusDataInvestor()
		{
			$hapusData = $this->input->post('id_investor');//true
			$this->db->where('id_investor', $hapusData);
			$this->db->delete('tbl_investor');
		}
		public function getIdUser($id)
		{
			$this->db->where('id_user', $id);
			return $this->db->get('tbl_user');
		}
		public function hapusDataUser()
		{
			$hapusData = $this->input->post('id_user');//true
			$this->db->where('id_user', $hapusData);
			$this->db->delete('tbl_user');
		}
		public function getIdDataAsset($id_asset)
		{
			$this->db->where('id_asset', $id_asset);
			return $this->db->get('tbl_asset')->result();

		}
		public function UpdateAsset($id_asset, $nama_barang, $jumlah, $kondisi, $keterangan)
		{
			$editData = array(
				'nama_barang' 	=> $nama_barang, 
				'jumlah'		=> $jumlah,
				'kondisi'		=> $kondisi,
				'keterangan'	=> $keterangan,

			);
			$this->db->set($editData);
			$this->db->where('id_asset', $id_asset);
			$this->db->update('tbl_asset');
		}
		public function getIdDataInvestor($id_investor)
		{
			$this->db->where('id_investor', $id_investor);
			return $this->db->get('tbl_investor')->result();
		}
		public function UpdateInvestor($id_investor, $nama, $alamat, $keterangan)
		{
			$editData = array(
				'nama' 			=> $nama,
				'alamat' 		=> $alamat,
				'keterangan' 	=> $keterangan,
			);
			$this->db->set($editData);
			$this->db->where('id_investor', $id_investor);
			$this->db->update('tbl_investor');
		}
		public function getIdDataUser($id_user)
		{
			$this->db->where('id_user', $id_user);
			return $this->db->get('tbl_user')->result();
		}
		public function UpdateUser($id_user, $nama, $username, $password)
		{
			$editData = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password, 
			);
			$this->db->set($editData);
			$this->db->where('id_user', $id_user);
			$this->db->update('tbl_user');
		}
	}
 ?>