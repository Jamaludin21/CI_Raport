<?php

class Guru_model extends CI_Model {

// public $title;
// public $content;
// public $date;
public function rules()
    {
        return [
            [
                'field' => 'nama_guru',  //samakan dengan atribute name pada tags input
                'label' => 'Nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nikg',
                'label' => 'NIKG',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[20]'
            ],
        ];
    }
public function get()
{
		return $this->db->get('guru')->result();
}

public function insert_entry($data)
{

	return $this->db->insert('guru', $data);
	
}
// public function get_where($id)
// {
// 		$this->db->where('id_guru', $id);
// 		$data = $this->db->get('guru')->result();

// 		$update = [];
// 		foreach ($data as $key) {
// 			$guru = [
// 				"namaguru" => $key->nama_guru,
// 				"jabatan" => $key->jabatan,
// 				"nikg" => $key->nikg,
// 			];
// 			array_push($update, $guru);
// 		}
// 		return $update;

// }
public function update_entry($data,$id)
{
		$this->db->where('id_guru', $id);
	$this->db->update('guru', $data);
}
public function delete($id){
	$this->db->where('id_guru', $id);
	$this->db->delete('guru');
}
}
?>
