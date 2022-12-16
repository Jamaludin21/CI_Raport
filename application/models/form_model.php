<?php

class Form_model extends CI_Model {

public function rules()
    {
        return [
            [
                'field' => 'nama_siswa',  //samakan dengan atribute name pada tags input
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
                'field' => 'semester',  //samakan dengan atribute name pada tags input
                'label' => 'Semester',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'sekolah',
                'label' => 'Sekolah',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tahun_pelajaran',
                'label' => 'Tahun',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'alamat',  //samakan dengan atribute name pada tags input
                'label' => 'Alamat',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'tawqa',
                'label' => 'Taqwa',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'mandiri',
                'label' => 'Mandiri',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'gotong_royong',  //samakan dengan atribute name pada tags input
                'label' => 'Gotong Royong',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'kreatif',
                'label' => 'Kreatif',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'kritis',
                'label' => 'Kritis',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'bineka',  //samakan dengan atribute name pada tags input
                'label' => 'Berbinekaan',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'kompetensi_agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'pkn',  //samakan dengan atribute name pada tags input
                'label' => 'PKN',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'kompetensi_pkn',
                'label' => 'PKN',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'na_bi',
                'label' => 'Indonesia',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'kompetensi_bi',  //samakan dengan atribute name pada tags input
                'label' => 'Indonesia',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'na_mtk',
                'label' => 'Matematika',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'kompetensi_mtk',
                'label' => 'Matematika',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'na_ipa',  //samakan dengan atribute name pada tags input
                'label' => 'IPA',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'kompetensi_ipa',
                'label' => 'IPA',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'na_ips',
                'label' => 'IPS',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'kompetensi_ips',  //samakan dengan atribute name pada tags input
                'label' => 'IPS',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'na_inggris',
                'label' => 'Inggris',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'kompetensi_inggris',  //samakan dengan atribute name pada tags input
                'label' => 'Inggris',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'na_sb',
                'label' => 'Seni Budaya',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'kompetensi_sb',  //samakan dengan atribute name pada tags input
                'label' => 'Seni Budaya',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'na_penjaskes',
                'label' => 'Penjaskes',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'kompetensi_penjaskes',  //samakan dengan atribute name pada tags input
                'label' => 'Penjaskes',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'na_pk',
                'label' => 'Prakarya',
                'rules' => 'trim|required'
			],
			[
                'field' => 'kompetensi_pk',  //samakan dengan atribute name pada tags input
                'label' => 'Prakarya',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'pramuka',
                'label' => 'Pramuka',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'silat',
                'label' => 'Silat',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'sakit',
                'label' => 'Sakit',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'izin',
                'label' => 'Izin',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'tanpa_keterangan',
                'label' => 'Tanpa Keterangan',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'catatan_wakel',
                'label' => 'Catatan Wali Kelas',
                'rules' => 'trim|required'
            ],
        ];
    }
public function get()
{
		return $this->db->get('nilai_siswa')->result();
}

public function insert_entry($data)
{

	return $this->db->insert('nilai_siswa', $data);
	
}
public function get_where($id)
{
		$this->db->where('id_guru', $id);
		$data = $this->db->get('guru')->result();

		$update = [];
		foreach ($data as $key) {
			$guru = [
				"namaguru" => $key->nama_guru,
				"jabatan" => $key->jabatan,
				"nikg" => $key->nikg,
			];
			array_push($update, $guru);
		}
		return $update;

}
// public function update_entry()
// {
// 		// $this->title    = $_POST['title'];
// 		// $this->content  = $_POST['content'];
// 		// $this->date     = time();

// 		// $this->db->update('entries', $this, array('id' => $_POST['id']));

// 		$data = array(
//             "Nama" => $this->input->post('nama_guru'),
//             "Jabatan" => $this->input->post('jabatan'),
//             "NIKG" => $this->input->post('nikg'),
//         );
//         return $this->db->update('guru', $data, array('id_guru' => $this->input->post('id_guru')));
// }
public function delete($id){
	$this->db->delete('guru', array('id_guru' => $id));
}
}
?>
