<?php

use PHPUnit\Util\Json;

defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{
	public function add_tabel()
{
		$this->load->model("guru_model", "gm");
		

		$guru = $this->input->post("nama_guru");
		$jabatan = $this->input->post("jabatan");
		$nikg = $this->input->post("nikg");

		$data = [
			"nama_guru" => $guru,
			"jabatan" => $jabatan,
			"nikg" => $nikg
		];

		$this->gm->insert_entry($data);


		echo json_encode(true);
}

public function add_form()
{
		$this->load->model("form_model", "fm");
		

		$nama_siswa = $this->input->post("nama_siswa");
		$kelas = $this->input->post("kelas");
		$nisn = $this->input->post("nisn");
		$semester = $this->input->post("semester");
		$sekolah = $this->input->post("sekolah");
		$tahun = $this->input->post("tahun_pelajaran");
		$alamat = $this->input->post("alamat");
		$taqwa = $this->input->post("taqwa");
		$mandiri = $this->input->post("mandiri");
		$gotong = $this->input->post("gotong_royong");
		$kreatif = $this->input->post("kreatif");
		$kritis = $this->input->post("kritis");
		$bineka = $this->input->post("bineka");
		$agama = $this->input->post("agama");
		$komp_agama = $this->input->post("kompetensi_agama");
		$pkn = $this->input->post("pkn");
		$komp_pkn = $this->input->post("kompetensi_pkn");
		$bi = $this->input->post("na_bi");
		$komp_bi = $this->input->post("kompetensi_bi");
		$mtk = $this->input->post("na_mtk");
		$komp_mtk = $this->input->post("kompetensi_mtk");
		$ipa = $this->input->post("na_ipa");
		$komp_ipa = $this->input->post("kompetensi_ipa");
		$ips = $this->input->post("na_ips");
		$komp_ips = $this->input->post("kompetensi_ips");
		$inggris = $this->input->post("na_inggris");
		$komp_inggris = $this->input->post("kompetensi_inggris");
		$sb = $this->input->post("na_sb");
		$komp_sb = $this->input->post("kompetensi_sb");
		$penjas = $this->input->post("na_penjaskes");
		$komp_penjaskes = $this->input->post("kompetensi_penjaskes");
		$pk = $this->input->post("na_pk");
		$komp_pk = $this->input->post("kompetensi_pk");
		$pramuka = $this->input->post("pramuka");
		$silat = $this->input->post("silat");
		$sakit = $this->input->post("sakit");
		$izin = $this->input->post("izin");
		$tanpa_keterangan = $this->input->post("tanpa_keterangan");
		$catatan_wakel = $this->input->post("catatan_wakel");

		$data = [
			"nama_siswa" => $nama_siswa,
			"kelas" => $kelas,
			"nisn" => $nisn,
			"semester" => $semester,
			"sekolah" =>$sekolah,
			"tahun_pelajaran" => $tahun,
			"alamat" => $alamat,
			"taqwa" => $taqwa,
			"mandiri" => $mandiri,
			"gotong_royong" => $gotong,
			"kreatif" => $kreatif,
			"kritis" => $kritis,
			"bineka" => $bineka,
			"agama" => $agama,
			"kompetensi_agama" => $komp_agama,
			"pkn" => $pkn,
			"kompetensi_pkn" => $komp_pkn,
			"na_bi" => $bi,
			"kompetensi_bi" => $komp_bi,
			"na_mtk" => $mtk,
			"kompetensi_mtk" => $komp_mtk,
			"na_ipa" => $ipa,
			"kompetensi_ipa" => $komp_ipa,
			"na_ips" => $ips,
			"kompetensi_ips" => $komp_ips,
			"na_inggris" => $inggris,
			"kompetensi_inggris" => $komp_inggris,
			"na_sb" => $sb,
			"kompetensi_sb" => $komp_sb,
			"na_penjaskes" => $penjas,
			"kompetensi_penjaskes" => $komp_penjaskes,
			"na_pk" => $pk,
			"kompetensi_pk" => $komp_pk,
			"pramuka" => $pramuka,
			"silat" => $silat,
			"izin" => $izin,
			"sakit" => $sakit,
			"tanpa_keterangan" => $tanpa_keterangan,
			"catatan_wakel" => $catatan_wakel
		];

		$this->fm->insert_entry($data);


		return redirect(base_url('tabel_nilai'));
}

public function add_kelas_vii()
{
	$this->load->model("siswa_vii_model", "s7");
		

		$nama_siswa = $this->input->post("nama");
		$kelas = $this->input->post("kelas");
		$nisn = $this->input->post("nisn");
		$nis = $this->input->post("nis");
		$tempat_lahir = $this->input->post("tempat_lahir");
		$tanggal_lahir = $this->input->post("tanggal_lahir");
		$agama = $this->input->post("agama");
		$status_keluarga = $this->input->post("status_keluarga");
		$anak_ke = $this->input->post("anak_ke");
		$alamat_siswa = $this->input->post("alamat_siswa");
		$sekolah = $this->input->post("sekolah_asal");
		$pada_kelas = $this->input->post("pada_kelas");
		$pada_tanggal = $this->input->post("pada_tanggal");
		$nama_ayah = $this->input->post("nama_ayah");
		$nama_ibu = $this->input->post("nama_ibu");
		$telp_ortu = $this->input->post("telp_orangtua");
		$kerja_ayah = $this->input->post("kerja_ayah");
		$kerja_ibu = $this->input->post("kerja_ibu");
		$alamat_orangtua = $this->input->post("alamat_orangtua");
		$nama_wali = $this->input->post("nama_wali");
		$telp_wali = $this->input->post("telp_wali");
		$pekerjaan_wali = $this->input->post("pekerjaan_wali");
		$alamat_wali = $this->input->post("alamat_wali");

		$data = [
			"nama" => $nama_siswa,
			"alamat_siswa" => $alamat_siswa,
			"nisn" => $nisn,
			"nis" => $nis,
			"tempat_lahir" =>$tempat_lahir,
			"tanggal_lahir" => $tanggal_lahir,
			"agama" => $agama,
			"status_keluarga" => $status_keluarga,
			"anak_ke" => $anak_ke,
			"sekolah_asal" => $sekolah,
			"kelas" => $kelas,
			"pada_kelas" => $pada_kelas,
			"pada_tanggal" => $pada_tanggal,
			"nama_ayah" => $nama_ayah,
			"nama_ibu" => $nama_ibu,
			"telp_orangtua" => $telp_ortu,
			"kerja_ayah" => $kerja_ayah,
			"kerja_ibu" => $kerja_ibu,
			"alamat_orangtua" => $alamat_orangtua,
			"nama_wali" => $nama_wali,
			"telp_wali" => $telp_wali,
			"pekerjaan_wali" => $pekerjaan_wali,
			"alamat_wali" => $alamat_wali,
		];

		$this->s7->insert_entry($data);


		return redirect(base_url('tabel_siswa_vii'));
}
public function add_kelas_viii()
{
	$this->load->model("siswa_vii_model", "s8");
		

		$nama_siswa = $this->input->post("nama");
		$kelas = $this->input->post("kelas");
		$nisn = $this->input->post("nisn");
		$nis = $this->input->post("nis");
		$tempat_lahir = $this->input->post("tempat_lahir");
		$tanggal_lahir = $this->input->post("tanggal_lahir");
		$agama = $this->input->post("agama");
		$status_keluarga = $this->input->post("status_keluarga");
		$anak_ke = $this->input->post("anak_ke");
		$alamat_siswa = $this->input->post("alamat_siswa");
		$sekolah = $this->input->post("sekolah_asal");
		$pada_kelas = $this->input->post("pada_kelas");
		$pada_tanggal = $this->input->post("pada_tanggal");
		$nama_ayah = $this->input->post("nama_ayah");
		$nama_ibu = $this->input->post("nama_ibu");
		$telp_ortu = $this->input->post("telp_orangtua");
		$kerja_ayah = $this->input->post("kerja_ayah");
		$kerja_ibu = $this->input->post("kerja_ibu");
		$alamat_orangtua = $this->input->post("alamat_orangtua");
		$nama_wali = $this->input->post("nama_wali");
		$telp_wali = $this->input->post("telp_wali");
		$pekerjaan_wali = $this->input->post("pekerjaan_wali");
		$alamat_wali = $this->input->post("alamat_wali");

		$data = [
			"nama" => $nama_siswa,
			"alamat_siswa" => $alamat_siswa,
			"nisn" => $nisn,
			"nis" => $nis,
			"tempat_lahir" =>$tempat_lahir,
			"tanggal_lahir" => $tanggal_lahir,
			"agama" => $agama,
			"status_keluarga" => $status_keluarga,
			"anak_ke" => $anak_ke,
			"sekolah_asal" => $sekolah,
			"kelas" => $kelas,
			"pada_kelas" => $pada_kelas,
			"pada_tanggal" => $pada_tanggal,
			"nama_ayah" => $nama_ayah,
			"nama_ibu" => $nama_ibu,
			"telp_orangtua" => $telp_ortu,
			"kerja_ayah" => $kerja_ayah,
			"kerja_ibu" => $kerja_ibu,
			"alamat_orangtua" => $alamat_orangtua,
			"nama_wali" => $nama_wali,
			"telp_wali" => $telp_wali,
			"pekerjaan_wali" => $pekerjaan_wali,
			"alamat_wali" => $alamat_wali,
		];

		$this->s8->insert_entry($data);


		return redirect(base_url('tabel_siswa_viii'));
}
public function add_kelas_ix()
{
	$this->load->model("siswa_vii_model", "s9");
		

		$nama_siswa = $this->input->post("nama");
		$kelas = $this->input->post("kelas");
		$nisn = $this->input->post("nisn");
		$nis = $this->input->post("nis");
		$tempat_lahir = $this->input->post("tempat_lahir");
		$tanggal_lahir = $this->input->post("tanggal_lahir");
		$agama = $this->input->post("agama");
		$status_keluarga = $this->input->post("status_keluarga");
		$anak_ke = $this->input->post("anak_ke");
		$alamat_siswa = $this->input->post("alamat_siswa");
		$sekolah = $this->input->post("sekolah_asal");
		$pada_kelas = $this->input->post("pada_kelas");
		$pada_tanggal = $this->input->post("pada_tanggal");
		$nama_ayah = $this->input->post("nama_ayah");
		$nama_ibu = $this->input->post("nama_ibu");
		$telp_ortu = $this->input->post("telp_orangtua");
		$kerja_ayah = $this->input->post("kerja_ayah");
		$kerja_ibu = $this->input->post("kerja_ibu");
		$alamat_orangtua = $this->input->post("alamat_orangtua");
		$nama_wali = $this->input->post("nama_wali");
		$telp_wali = $this->input->post("telp_wali");
		$pekerjaan_wali = $this->input->post("pekerjaan_wali");
		$alamat_wali = $this->input->post("alamat_wali");

		$data = [
			"nama" => $nama_siswa,
			"alamat_siswa" => $alamat_siswa,
			"nisn" => $nisn,
			"nis" => $nis,
			"tempat_lahir" =>$tempat_lahir,
			"tanggal_lahir" => $tanggal_lahir,
			"agama" => $agama,
			"status_keluarga" => $status_keluarga,
			"anak_ke" => $anak_ke,
			"sekolah_asal" => $sekolah,
			"kelas" => $kelas,
			"pada_kelas" => $pada_kelas,
			"pada_tanggal" => $pada_tanggal,
			"nama_ayah" => $nama_ayah,
			"nama_ibu" => $nama_ibu,
			"telp_orangtua" => $telp_ortu,
			"kerja_ayah" => $kerja_ayah,
			"kerja_ibu" => $kerja_ibu,
			"alamat_orangtua" => $alamat_orangtua,
			"nama_wali" => $nama_wali,
			"telp_wali" => $telp_wali,
			"pekerjaan_wali" => $pekerjaan_wali,
			"alamat_wali" => $alamat_wali,
		];

		$this->s9->insert_entry($data);


		return redirect(base_url('tabel_siswa_ix'));
}

public function edit_guru(){
		$this->load->model('guru_model', 'gm');
		// $id = $this->input->post('id_guru');
		$id = $this->uri->segment(1);
		$nama_guru = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$nikg = $this->input->post('nikg');
		$data = [
            'nama' => $nama_guru,
            'jabatan' => $jabatan,
            'nikg' => $nikg,
		];
		$this->gm->update_entry($data, $id);
		redirect(base_url('tabel'));
		// echo json_encode(true);
}
public function hapus_guru(){
	$this->load->model("guru_model", "gm");
		
		$id = $this->input->post("id_guru");

		$data = [
			"id_guru" => $id,
		];
		$this->gm->delete($data);
		echo json_encode(true);
}
}
?>
