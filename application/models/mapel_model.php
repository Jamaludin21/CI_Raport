<?php

class Mapel_model extends CI_Model
{

	// public $title;
	// public $content;
	// public $date;

	public function get()
	{
		$query = "SELECT mata_pelajaran.*,
		guru.nama AS nama_guru
		FROM mata_pelajaran
		INNER JOIN guru ON mata_pelajaran.id_guru = guru.id_guru";
		return $this->db->query($query)->result();
	}

	public function insert_entry()
	{
		// $this->title    = $_POST['title']; // please read the below note
		// $this->content  = $_POST['content'];
		// $this->date     = time();

		// $this->db->insert('entries', $this);
	}

	public function update_entry($data, $id)
	{
		$this->db->where('id_mapel', $id);
		$this->db->update('mata_pelajaran', $data);
	}
}
