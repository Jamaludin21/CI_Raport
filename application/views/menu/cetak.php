<!DOCTYPE html>
<html>
<link href="<?= base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">
<link href="<?= base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<!-- Jquery JS-->
<script src="<?= base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<style>
<?php echo file_get_contents('assets/vendor/bootstrap-4.1/bootstrap.min.css') ?>
</style>
<script src="<?= base_url(); ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
<script>
<?php echo file_get_contents('assets/vendor/bootstrap-4.1/bootstrap.min.js') ?>
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
@media print {
    .judul {
        text-align: center;
        color: blue;
    }

    table>thead>tr>th {
        background-color: #1a4567 !important;
    }

}

.pembatas {
    width: 1.5rem !important;
}

#tabel_biodata tbody tr td {
    height: 35px
}

.title_table {
    font-size: 20px;
    font-weight: bold;
}
</style>

<head>
    <h2 style="text-align:center;">RAPOR SISWA<br>SEKOLAH MENENGAH PERTAMA<br>(SMP)</h2>
    <a>
        <img src="https://www.smpn1dbn.sch.id/wp-content/uploads/2021/07/smpn1-dobana.png"
            style="width:10em; height:10vw" />
    </a>
    <?php foreach($cetak_nilai as $lock) : ?>
    <P style="text-align:center;font-weight:bold;">Nama Peserta Didik</P>
    <h3 style="text-align:center;border: 1px black solid" ;font-weight:bold;><?= $lock->nama_siswa ?></h3>
    <P style="text-align:center;font-weight:bold;">NIS/NISN</P>
    <P style="text-align:center;border: 1px black solid;font-weight:bold;"><?= $lock->nisn ?></P>
</head>

<!-- <body>
   
</body> -->

<body>
    <h3 style="text-align:center;page-break-before: always;">KETERANGAN TENTANG DIRI PESERTA DIDIK</h3>
    <div class="container-fluid">
        <table id="tabel_biodata" style="background-color:red;height:150px!important">
            <tbody style=" background-color:blue;font-size:smaller;">
                <tr>
                    <td>Nama Siswa (Lengkap)</td>
                    <td>: <strong><?= $lock->nama_siswa ?></strong></td>
                </tr>

                <tr>
                    <td>Nomor Induk/NISN</td>
                    <td>: <?= $lock->nis ?> / <?= $lock->nisn ?></td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>: <?= $lock->tempat_lahir ?>, <?= $lock->tanggal_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?= $lock->kelamin ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: <?= $lock->agama ?></td>
                </tr>
                <tr>
                    <td>Status Dalam Keluarga</td>
                    <td>: <?= $lock->status_keluarga ?></td>
                </tr>
                <tr>
                    <td>Anak Ke</td>
                    <td>: <?= $lock->anak_ke ?></td>
                </tr>
                <tr>
                    <td>Alamat Siswa</td>
                    <td>: <?= $lock->alamat_siswa ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>: <?= $lock->telp_siswa ?></td>
                </tr>
                <tr>
                    <td>Sekolah Asal</td>
                    <td>: <?= $lock->sekolah_asal ?></td>
                </tr>
                <tr>
                    <td>Diterima Disekolah ini :</td>
                </tr>
                <tr>
                    <td>Dikelas</td>
                    <td>: <?= $lock->pada_kelas ?></td>
                </tr>
                <tr>
                    <td>Pada Tanggal</td>
                    <td>: <?= $lock->pada_tanggal ?></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua :</td>
                </tr>
                <tr>
                    <td>a. Ayah</td>
                    <td>: <?= $lock->nama_ayah ?></td>
                </tr>
                <tr>
                    <td>b. Ibu</td>
                    <td>: <?= $lock->nama_ibu ?></td>
                </tr>
                <tr>
                    <td>Alamat Orang Tua</td>
                    <td>: <?= $lock->alamat_orangtua ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan Orang Tua :</td>
                </tr>
                <tr>
                    <td>a. Ayah</td>
                    <td>: <?= $lock->kerja_ayah ?></td>
                </tr>
                <tr>
                    <td>b. Ibu</td>
                    <td>: <?= $lock->kerja_ibu ?></td>
                </tr>
                <tr>
                    <td>Nama Wali Siswa</td>
                    <td>: <?= $lock->nama_wali ?></td>
                </tr>
                <tr>
                    <td>Alamat Wali Siswa</td>
                    <td>: <?= $lock->alamat_wali ?></td>
                </tr>
                <tr>
                    <td>No. Telepon Wali</td>
                    <td>: <?= $lock->telp_wali ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan Wali Siswa</td>
                    <td>: <?= $lock->pekerjaan_wali ?></td>
                </tr>
                <table style="width:100%!important;margin-top:3rem!important">
                    <tbody>
                        <tr>
                            <td colspan="6">
                            </td>
                            <td class="text-align text-center ">Bekasi, <?= $lock->pada_tanggal ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-align text-center">
                            </td>
                            <td class="text-align text-center">Kepala Sekolah,
                            </td>
                        </tr>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <tr>
                            <td colspan="6" class="text-align text-center">
                            </td>
                            <td class="text-align text-center">Ihsan Permadi, S.Pd
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-align text-center">
                            </td>
                            <td>NIP :
                            </td>
                        </tr>
                    </tbody>
                </table>
            </tbody>
        </table>
    </div>
</body>






<head>
    <p style=" text-align:center; color:blue;page-break-before: always;" class="judul"><strong> LAPORAN HASIL BELAJAR
            (RAPOR) JENJANG SMP
        </strong></p>
</head>

<body>

    <div>
        <hr>
        <div class="container">
            <table id="tabel_biodata">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $lock->nama_siswa ?></td>
                        <td class="pembatas"></td>
                        <td style="margin-left:6rem">Kelas</td>
                        <td>: <?= $lock->kelas ?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>: <?= $lock->nisn ?></td>
                        <td class="pembatas"></td>
                        <td style="margin-left:6rem">Semester</td>
                        <td>: <?= $lock->semester ?></td>
                    </tr>
                    <tr>
                        <td>Sekolah</td>
                        <td>: <?= $lock->sekolah ?></td>
                        <td class="pembatas"></td>
                        <td style="margin-left:6rem">Tahun Pelajaran</td>
                        <td>: <?= $lock->tahun_pelajaran ?></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:text-top">Alamat</td>
                        <td colspan="4" style="vertical-align:text-top">: <?= $lock->alamat_siswa ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <table class="table table-bordered table-primary" style="width: 100%!important;">
            <thead>
                <tr>
                    <th colspan="2" class="title_table" style="background-color:#fff; border: 1px #fff;"><strong>A.
                            Sikap </strong></th>
                </tr>
                <tr class="bg-primary">
                    <th>Dimensi</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Beriman, bertakwa kepada Tuhan Yang Maha Esa dan Berakhlak Mulia</td>
                    <td><?= $lock->taqwa ?></td>
                </tr>
                <tr>
                    <td>Mandiri</td>
                    <td><?= $lock->mandiri ?></td>
                </tr>
                <tr>
                    <td>Bergotong Royong</td>
                    <td><?= $lock->gotong_royong ?></td>
                </tr>
                <tr>
                    <td>Kreatif</td>
                    <td><?= $lock->kreatif ?></td>
                </tr>
                <tr>
                    <td>Bernalar Kritis</td>
                    <td><?= $lock->kritis ?></td>
                </tr>
                <tr>
                    <td>Berkebhinekaan Global</td>
                    <td><?= $lock->bineka ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-primary" style="page-break-before: always;">
            <thead>
                <tr>
                    <th class="title_table" colspan="4" style="background-color:#fff; border: 1px #fff;"><strong> B.
                            Pengetahuan dan Keterampilan </strong></th>
                </tr>
                <tr class="bg-primary">
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai Akhir</th>
                    <th>Capaian Kompetensi</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr class="bg-secondary table-borderless">
                            <td><strong> Kelompok A (Umum) </strong></td>
                        </tr> -->
                <tr>
                    <td>1</td>
                    <td>Pendidikan Agama dan Budi Pekerti</td>
                    <td><?= $lock->na_agama ?></td>
                    <td><?= $lock->kompetensi_agama ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td><?= $lock->na_pkn ?></td>
                    <td><?= $lock->kompetensi_pkn ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bahasa Indonesia</td>
                    <td><?= $lock->na_bi ?></td>
                    <td><?= $lock->kompetensi_bi ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Matematika</td>
                    <td><?= $lock->na_mtk ?></td>
                    <td><?= $lock->kompetensi_mtk ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ilmu Pengetahuan Alama</td>
                    <td><?= $lock->na_ipa ?></td>
                    <td><?= $lock->kompetensi_ipa ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ilmu Pengetahuan Sosial</td>
                    <td><?= $lock->na_ips ?></td>
                    <td><?= $lock->kompetensi_ips ?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Bahasa Inggris</td>
                    <td><?= $lock->na_inggris ?></td>
                    <td><?= $lock->kompetensi_inggris ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-primary">
            <thead class="bg-primary">
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai Akhir</th>
                    <th>Capaian Kompetensi</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr class="bg-secondary table-borderless">
                            <td><strong> Kelompok A (Umum) </strong></td>
                        </tr> -->
                <tr>
                    <td>1</td>
                    <td>Seni Budaya</td>
                    <td><?= $lock->na_sb ?></td>
                    <td><?= $lock->kompetensi_sb ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                    <td><?= $lock->na_penjaskes ?></td>
                    <td><?= $lock->kompetensi_penjaskes ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Prakarya dan Informatika</td>
                    <td><?= $lock->na_pk ?></td>
                    <td><?= $lock->kompetensi_pk ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-primary">
            <thead class="bg-primary">
                <tr>
                    <th>No.</th>
                    <th>Ektsrakulikuler</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pramuka</td>
                    <td><?= $lock->pramuka ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Silat</td>
                    <td><?= $lock->silat ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-primary" style="page-break-before: always;width:50%">
            <thead class="bg-primary table-borderless">
                <tr>
                    <th style="text-align: center;" colspan="2">Ketidakhadiran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sakit</td>
                    <td><?= $lock->sakit ?></td>
                </tr>
                <tr>
                    <td>Izin</td>
                    <td><?= $lock->izin ?></td>
                </tr>
                <tr>
                    <td>Tanpa Keterangan</td>
                    <td><?= $lock->tanpa_keterangan ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-primary">
            <thead class="bg-primary table-borderless">
                <tr>
                    <th style="text-align: center;" colspan="2">Catatan Wali Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><?= $lock->catatan_wakel ?></td>
                </tr>
            </tbody>
        </table>
        <table style="width:90%!important;margin-top:3rem!important">
            <tbody>
                <tr>
                    <td colspan="2">
                    </td>
                    <td class="text-align text-center ">Bekasi, <?php echo date("d-m-Y"); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-align text-center">Orang Tua Peserta Didik
                    </td>
                    <td class="text-align text-center">Wali Kelas
                    </td>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <td colspan="2" class="text-align text-center">(............................................)
                    </td>
                    <td class="text-align text-center">(............................................)
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td colspan="3" class="text-align text-center">Mengetahui,
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-align text-center">Kepala Sekolah
                    </td>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <td colspan="3" class="text-align text-center">Ihsan Permadi, S.Pd
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php endforeach; ?>


<style type="text/css" media="print">
</style>
<script type="text/javascript">
window.print();
</script>

</html>
