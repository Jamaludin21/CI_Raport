<?php

class Siswa_viii_model extends CI_Model {
	public function rules()
	{
		return [
			[
				'field' => 'nama',  //samakan dengan atribute name pada tags input
				'label' => 'Nama',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'kelas',
				'label' => 'Kelas',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nisn',
				'label' => 'NISN',
				'rules' => 'trim|required|numeric|min_length[9]|max_length[20]'
			],
			[
				'field' => 'nis',  //samakan dengan atribute name pada tags input
				'label' => 'NIS',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required|numeric|min_length[9]|max_length[20]' //rules validasi
			],
			[
				'field' => 'kelamin',
				'label' => 'Kelamin',
				'rules' => 'trim|required'
			],
			[
				'field' => 'tempat_lahir',
				'label' => 'Tempat Lahir',
				'rules' => 'trim|required'
			],
			[
				'field' => 'tanggal_lahir',  //samakan dengan atribute name pada tags input
				'label' => 'Tanggal Lahir',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'agama',
				'label' => 'Agama',
				'rules' => 'trim|required'
			],
			[
				'field' => 'status_keluarga',
				'label' => 'Status Keluarga',
				'rules' => 'trim|required'
			],
			[
				'field' => 'anak_ke',  //samakan dengan atribute name pada tags input
				'label' => 'Anak',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'alamat_siswa',
				'label' => 'Alamat Siswa',
				'rules' => 'trim|required'
			],
			[
				'field' => 'telp_siswa',
				'label' => 'Telpon Siswa',
				'rules' => 'trim|required'
			],
			[
				'field' => 'sekolah_asal',  //samakan dengan atribute name pada tags input
				'label' => 'Sekolah Asal',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'pada_tanggal',
				'label' => 'Pada Tanggal',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nama_ayah',
				'label' => 'Nama Ayah',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nama_ibu',  //samakan dengan atribute name pada tags input
				'label' => 'Nama Ibu',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'alamat_orangtua',
				'label' => 'Alamat Orang Tua',
				'rules' => 'trim|required'
			],
			[
				'field' => 'telp_orangtua',
				'label' => 'Telpon Orang Tua',
				'rules' => 'trim|required'
			],
			[
				'field' => 'kerja_ayah',  //samakan dengan atribute name pada tags input
				'label' => 'Kerja Ayah',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'kerja_ibu',
				'label' => 'Kerja Ibu',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nama_wali',
				'label' => 'Nama Wali',
				'rules' => 'trim|required'
			],
			[
				'field' => 'alamat_wali',  //samakan dengan atribute name pada tags input
				'label' => 'Alamat Wali',  // label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'telp_wali',
				'label' => 'Telpon Wali',
				'rules' => 'trim|required'
			],
			[
				'field' => 'pekerjaan_wali',
				'label' => 'Pekerjaan Wali',
				'rules' => 'trim|required'
			],
		];
	}
	public function get()
	{
		return $this->db->order_by('absen', 'asc')->get_where('nilai_siswa' , ['kelas' => '8'])->result();
	}
	
	public function insert_entry($data)
	{
		return $this->db->insert('nilai_siswa', $data);
	}
	
	public function update_entry($data, $id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->update('nilai_siswa', $data);
	}
	public function delete($id){
		$this->db->where('id_nilai', $id);
		$this->db->delete('nilai_siswa');
	}

}
?>
