<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Daftar Siswa Kelas IX</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/icon/logoypii.jpeg">

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/css/font-face.css"'); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet"
        media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css'); ?>" rel="stylesheet"
        media="all">
    <link href="<?= base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/vendor/animsition/animsition.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'); ?>"
        rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/wow/animate.css'); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/slick/slick.css'); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/select2/select2.min.css"'); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/css/theme.css'); ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="<?= base_url(); ?>assets/images/icon/km4.png" alt="KampusMengajar" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="<?= base_url(); ?>">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tabel</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li class="active has-sub">
                                    <a href="<?= base_url('tabel'); ?>">Daftar Guru</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_mapel'); ?>">Daftar Pelajaran</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_siswa_vii'); ?>">Daftar Siswa Kelas VII</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_siswa_viii'); ?>">Daftar Siswa Kelas VIII</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_siswa_ix'); ?>">Daftar Siswa Kelas IX</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_nilai'); ?>">Daftar Nilai</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('form'); ?>">
                                <i class="far fa-check-square"></i>Form</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Halaman</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url('login'); ?>">Masuk</a>
                                </li>
                                <!-- <li>
                                    <a href="register.php">Daftar</a>
                                </li>
                                <li>
                                    <a href="forget-pass.php">Lupa Kata Sandi</a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img class="km4" src="<?= base_url(); ?>assets/images/icon/km4.png" style="width:100px;"
                        alt="KampusMengajar" />
                </a>
                <a href="index.php">
                    <img class="km4i" src="<?= base_url(); ?>assets/images/icon/km4i.png" style="width:100px;"
                        alt="KampusMengajar" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?= base_url(); ?>">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tabel</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url('tabel'); ?>">Daftar Guru</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_mapel'); ?>">Daftar Pelajaran</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_siswa_vii'); ?>">Daftar Siswa Kelas VII</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_siswa_viii'); ?>">Daftar Siswa Kelas VIII</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_siswa_ix'); ?>">Daftar Siswa Kelas IX</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('tabel_nilai'); ?>">Daftar Nilai</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('form'); ?>">
                                <i class="far fa-check-square"></i>Form</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Halaman</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('login'); ?>">Masuk</a>
                                </li>
                                <!-- <li>
                                    <a href="register.php">Daftar</a>
                                </li>
                                <li>
                                    <a href="forget-pass.php">Lupa Kata Sandi</a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <!-- <a class="logo" href="index.php">
                                <img src="images/icon/logoypii.jpeg" style="width:100px;height:75px;"
                                    alt="KampusMengajar" />
                            </a> -->
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="assets/images/icon/logoypii.jpeg" alt="YPII" />
                                        </div>
                                        <div class="content">
                                            <!-- <a class="js-acc-btn"
                                                href="#"><?php echo $this->session->userdata("username"); ?></a> -->
                                            <a> SMP YPII</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?= base_url(); ?>assets/images/icon/logoypii.jpeg"
                                                            alt="YPII" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a> SMP YPII</a>
                                                    </h5>
                                                    <span class="email">smpypiibungur@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9" style="max-width: 100%;">
                                <div class="col-md-12 mb-4">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Daftar Siswa Kelas IX</h2>
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                            data-target="#addModal">
                                            <i class="fas fa-plus"></i> Tambah Siswa
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Nama Siswa</th>
                                                <th>No. Absen</th>
                                                <th>NIS</th>
                                                <th>NISN</th>
                                                <th>Semester</th>
                                                <th>Sekolah</th>
                                                <th>Tahun Pelajaran</th>
                                                <th>Alamat</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Kelamin</th>
                                                <th>Agama</th>
                                                <th>Status</th>
                                                <th>Anak Ke-</th>
                                                <th>Alamat Siswa</th>
                                                <th>No. HP</th>
                                                <th>Sekolah Asal</th>
                                                <th>Kelas</th>
                                                <th>Diterima pada</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>Alamat Orang Tua</th>
                                                <th>No. HP Orang Tua</th>
                                                <th>Pekerjaan Ayah</th>
                                                <th>Pekerjaan Ibu</th>
                                                <th>Nama Wali</th>
                                                <th>Alamat Wali</th>
                                                <th>No. HP Wali</th>
                                                <th>Pekerjaan Wali</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($siswa_ix as $row) : ?>
                                            <tr style="text-align: center;">
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->absen ?></td>
                                                <td><?= $row->nis ?></td>
                                                <td><?= $row->nisn ?></td>
                                                <td><?= $row->semester ?></td>
                                                <td><?= $row->sekolah ?></td>
                                                <td><?= $row->tahun_pelajaran ?></td>
                                                <td><?= $row->alamat_siswa ?></td>
                                                <td><?= $row->tempat_lahir ?></td>
                                                <td><?= $row->tanggal_lahir ?></td>
                                                <td><?= $row->kelamin ?></td>
                                                <td><?= $row->agama ?></td>
                                                <td><?= $row->status_keluarga ?></td>
                                                <td><?= $row->anak_ke ?></td>
                                                <td><?= $row->alamat_siswa ?></td>
                                                <td><?= $row->telp_siswa ?></td>
                                                <td><?= $row->sekolah_asal ?></td>
                                                <td><?= $row->kelas ?></td>
                                                <td><?= $row->pada_tanggal ?></td>
                                                <td><?= $row->nama_ayah ?></td>
                                                <td><?= $row->nama_ibu ?></td>
                                                <td><?= $row->alamat_orangtua ?></td>
                                                <td><?= $row->telp_orangtua ?></td>
                                                <td><?= $row->kerja_ayah ?></td>
                                                <td><?= $row->kerja_ibu ?></td>
                                                <td><?= $row->nama_wali ?></td>
                                                <td><?= $row->alamat_wali ?></td>
                                                <td><?= $row->telp_wali ?></td>
                                                <td><?= $row->pekerjaan_wali ?></td>
                                                <td><button type="button"
                                                        class="btn btn-outline-success btn_edit_siswa_ix"
                                                        data="<?= $row->id_nilai ?>">
                                                        <i class="fas fa-plus"></i> Edit
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger"
                                                        onclick="deleted(<?= $row->id_nilai ?>)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <!-- Modal Add -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Siswa Kelas VII</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?= base_url('add_kelas_ix'); ?>" method="post">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nama" class="control-label mb-1">Nama Siswa</label>
                                                    <input id="name" name="nama" type="text" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="absen" class="control-label mb-1">Nomor Absen</label>
                                                    <input id="absen" name="absen" type="number" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kelas" class="control-label mb-1">Kelas</label>
                                                    <input id="kelas" name="kelas" type="number" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nisn" class="control-label mb-1">NISN</label>
                                                    <input id="nisn" name="nisn" type="number" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nisn" class="control-label mb-1">NIS</label>
                                                    <input id="nisn" name="nis" type="number" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="semester" class="control-label mb-1">Semester</label>
                                                    <input id="semester" name="semester" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="sekolah" class="control-label mb-1">Sekolah</label>
                                                    <input id="sekolah" name="sekolah" type="text" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tahun_pelajaran" class="control-label mb-1">Tahun
                                                        Pelajaran</label>
                                                    <input id="tahun_pelajaran" name="tahun_pelajaran" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tempat_lahir" class="control-label mb-1">Tempat
                                                        Lahir</label>
                                                    <input id="tempat_lahir" name="tempat_lahir" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tanggal_lahir" class="control-label mb-1">Tanggal
                                                        Lahir</label>
                                                    <input id="tanggal_lahir" name="tanggal_lahir" type="date"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kelamin" class="control-label mb-1">Kelamin</label>
                                                    <input id="kelamin" name="kelamin" type="text" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telp_siswa" class="control-label mb-1">No. HP
                                                        Siswa</label>
                                                    <input id="telp_siswa" name="telp_siswa" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="agama" class="control-label mb-1">Agama</label>
                                                    <input id="agama" name="agama" type="text" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="status_keluarga" class="control-label mb-1">Status Dalam
                                                        Keluarga</label>
                                                    <input id="status_keluarga" name="status_keluarga" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="anak_ke" class="control-label mb-1">Anak Ke</label>
                                                    <input id="anak_ke" name="anak_ke" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="sekolah_asal" class="control-label mb-1">Sekolah
                                                        Asal</label>
                                                    <input id="sekolah_asal" name="sekolah_asal" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_siswa" class="control-label mb-1">Alamat Siswa</label>
                                            <textarea id="alamat_siswa" name="alamat_siswa" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="acc" class="control-label mb-1"><strong>Diterima
                                                            Disekolah</strong></label>
                                                    <br>
                                                    <label for="pada_kelas" class="control-label mb-1">Dikelas</label>
                                                    <input id="pada_kelas" name="pada_kelas" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                    <label for="pada_tanggal" class="control-label mb-1">Pada
                                                        Tanggal</label>
                                                    <input id="pada_tanggal" name="pada_tanggal" type="date"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="orang_tua" class="control-label mb-1"><strong>Nama Orang
                                                            Tua</strong></label>
                                                    <br>
                                                    <label for="nama_ayah" class="control-label mb-1">Nama Ayah</label>
                                                    <input id="nama_ayah" name="nama_ayah" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                    <label for="nama_ibu" class="control-label mb-1">Nama Ibu</label>
                                                    <input id="nama_ibu" name="nama_ibu" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telp_orangtua" class="control-label mb-1">No.HP Orang
                                                        Tua</label>
                                                    <input id="telp_orangtua" name="telp_orangtua" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kerja_ayah" class="control-label mb-1">Pekerjaan
                                                        Ayah</label>
                                                    <input id="kerja_ayah" name="kerja_ayah" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                    <label for="kerja_ibu" class="control-label mb-1">Pekerjaan
                                                        Ibu</label>
                                                    <input id="kerja_ibu" name="kerja_ibu" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_orangtua" class="control-label mb-1">Alamat
                                                Orang Tua</label>
                                            <textarea id="alamat_orangtua" name="alamat_orangtua" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nama_wali" class="control-label mb-1">Nama Wali</label>
                                                    <input id="nama_wali" name="nama_wali" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telp_wali" class="control-label mb-1">No.HP Wali</label>
                                                    <input id="telp_wali" name="telp_wali" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="pekerjaan_wali" class="control-label mb-1">Pekerjaan
                                                        Wali</label>
                                                    <input id="pekerjaan_wali" name="pekerjaan_wali" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_wali" class="control-label mb-1">Alamat
                                                Wali</label>
                                            <textarea id="alamat_wali" name="alamat_wali" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                        </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="sakit" class="control-label mb-1">Sakit</label>
                                                        <input id="sakit" name="sakit" type="number"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="izin" class="control-label mb-1">Izin</label>
                                                        <input id="izin" name="izin" type="number" class="form-control"
                                                            aria-required="true" aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="alpha" class="control-label mb-1">Tanpa
                                                            Keterangan</label>
                                                        <input id="alpha" name="alpha" type="number"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                            </div> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edit -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Ubah Data Siswa Kelas IX</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?= base_url('edit_kelas_ix'); ?>" method="post">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_nilai" id="id_nilai"
                                                        class="form-control">
                                                    <label for="nama" class="control-label mb-1">Nama Siswa</label>
                                                    <input id="name_edit" name="nama" type="text" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="absen" class="control-label mb-1">Nomor Absen</label>
                                                    <input id="absen_edit" name="absen" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kelas" class="control-label mb-1">Kelas</label>
                                                    <input id="kelas_edit" name="kelas" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nisn" class="control-label mb-1">NISN</label>
                                                    <input id="nisn_edit" name="nisn" type="number" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nis" class="control-label mb-1">NIS</label>
                                                    <input id="nis_edit" name="nis" type="number" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="semester" class="control-label mb-1">Semester</label>
                                                    <input id="semester_edit" name="semester" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="sekolah" class="control-label mb-1">Sekolah</label>
                                                    <input id="sekolah_edit" name="sekolah" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tahun_pelajaran" class="control-label mb-1">Tahun
                                                        Pelajaran</label>
                                                    <input id="tahun_pelajaran_edit" name="tahun_pelajaran" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tempat_lahir" class="control-label mb-1">Tempat
                                                        Lahir</label>
                                                    <input id="tempat_lahir_edit" name="tempat_lahir" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tanggal_lahir" class="control-label mb-1">Tanggal
                                                        Lahir</label>
                                                    <input id="tanggal_lahir_edit" name="tanggal_lahir" type="date"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kelamin" class="control-label mb-1">Kelamin</label>
                                                    <input id="kelamin_edit" name="kelamin" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telp_siswa" class="control-label mb-1">No. HP
                                                        Siswa</label>
                                                    <input id="telp_siswa_edit" name="telp_siswa" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="agama" class="control-label mb-1">Agama</label>
                                                    <input id="agama_edit" name="agama" type="text" class="form-control"
                                                        aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="status_keluarga" class="control-label mb-1">Status Dalam
                                                        Keluarga</label>
                                                    <input id="status_keluarga_edit" name="status_keluarga" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="anak_ke" class="control-label mb-1">Anak Ke</label>
                                                    <input id="anak_ke_edit" name="anak_ke" type="number"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="sekolah_asal" class="control-label mb-1">Sekolah
                                                        Asal</label>
                                                    <input id="sekolah_asal_edit" name="sekolah_asal" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_siswa" class="control-label mb-1">Alamat Siswa</label>
                                            <textarea id="alamat_siswa_edit" name="alamat_siswa" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="acc" class="control-label mb-1"><strong>Diterima
                                                            Disekolah</strong></label>
                                                    <br>
                                                    <label for="pada_kelas" class="control-label mb-1">Dikelas</label>
                                                    <input id="pada_kelas_edit" name="pada_kelas" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                    <label for="pada_tanggal" class="control-label mb-1">Pada
                                                        Tanggal</label>
                                                    <input id="pada_tanggal_edit" name="pada_tanggal" type="date"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="orang_tua" class="control-label mb-1"><strong>Nama Orang
                                                            Tua</strong></label>
                                                    <br>
                                                    <label for="nama_ayah" class="control-label mb-1">Nama Ayah</label>
                                                    <input id="nama_ayah_edit" name="nama_ayah" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                    <label for="nama_ibu" class="control-label mb-1">Nama Ibu</label>
                                                    <input id="nama_ibu_edit" name="nama_ibu" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telp_orangtua" class="control-label mb-1">No.HP Orang
                                                        Tua</label>
                                                    <input id="telp_orangtua_edit" name="telp_orangtua" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kerja_ayah" class="control-label mb-1">Pekerjaan
                                                        Ayah</label>
                                                    <input id="kerja_ayah_edit" name="kerja_ayah" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                    <label for="kerja_ibu" class="control-label mb-1">Pekerjaan
                                                        Ibu</label>
                                                    <input id="kerja_ibu_edit" name="kerja_ibu" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_orangtua" class="control-label mb-1">Alamat
                                                Orang Tua</label>
                                            <textarea id="alamat_orangtua_edit" name="alamat_orangtua" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nama_wali" class="control-label mb-1">Nama Wali</label>
                                                    <input id="nama_wali_edit" name="nama_wali" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telp_wali" class="control-label mb-1">No.HP Wali</label>
                                                    <input id="telp_wali_edit" name="telp_wali" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="pekerjaan_wali" class="control-label mb-1">Pekerjaan
                                                        Wali</label>
                                                    <input id="pekerjaan_wali_edit" name="pekerjaan_wali" type="text"
                                                        class="form-control" aria-required="true" aria-invalid="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_wali" class="control-label mb-1">Alamat
                                                Wali</label>
                                            <textarea id="alamat_wali_edit" name="alamat_wali" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                        href="https://colorlib.com">Colorlib</a>.</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url(); ?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url(); ?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url(); ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url(); ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    $(document).on('click', '.btn_edit_siswa_ix', function() {
        let id = $(this).attr('data');
        $.ajax({
            url: '<?= base_url("Ajax/detail_kelas_ix"); ?>',
            type: 'GET',
            dataType: 'JSON',
            data: {
                "id_nilai": id,
            },
            success: results => {
                console.log(results);
                $('#name_edit').val(results[0].nama);
                $('#absen_edit').val(results[0].absen);
                $('#kelas_edit').val(results[0].kelas);
                $('#nisn_edit').val(results[0].nisn);
                $('#nis_edit').val(results[0].nis);
                $('#semester_edit').val(results[0].semester);
                $('#sekolah_edit').val(results[0].sekolah);
                $('#tahun_pelajaran_edit').val(results[0].tahun_pelajaran);
                $('#tempat_lahir_edit').val(results[0].tempat_lahir);
                $('#tanggal_lahir_edit').val(results[0].tanggal_lahir);
                $('#kelamin_edit').val(results[0].kelamin);
                $('#telp_siswa_edit').val(results[0].telp_siswa);
                $('#agama_edit').val(results[0].agama);
                $('#status_keluarga_edit').val(results[0].status_keluarga);
                $('#anak_ke_edit').val(results[0].anak_ke);
                $('#sekolah_asal_edit').val(results[0].sekolah_asal);
                $('#alamat_siswa_edit').val(results[0].alamat_siswa);
                $('#pada_kelas_edit').val(results[0].pada_kelas);
                $('#pada_tanggal_edit').val(results[0].pada_tanggal);
                $('#nama_ayah_edit').val(results[0].nama_ayah);
                $('#nama_ibu_edit').val(results[0].nama_ibu);
                $('#nama_guru_edit').val(results[0].nama);
                $('#telp_orangtua_edit').val(results[0].telp_orangtua);
                $('#kerja_ayah_edit').val(results[0].kerja_ayah);
                $('#kerja_ibu_edit').val(results[0].kerja_ibu);
                $('#alamat_orangtua_edit').val(results[0].alamat_orangtua);
                $('#nama_wali_edit').val(results[0].nama_wali);
                $('#telp_wali_edit').val(results[0].telp_wali);
                $('#pekerjaan_wali_edit').val(results[0].pekerjaan_wali);
                $('#alamat_wali_edit').val(results[0].alamat_wali);
                $('#id_nilai').val(id);

                $('#editModal').modal('show');
            }
        });


    });

    function deleted(id) {
        // let id = $("#id_guru").val();
        Swal.fire({
            title: 'Apa anda yakin?',
            text: "Anda tidak bisa membatalkan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: '<?= base_url("delete_kelas_ix"); ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        "id_nilai": id,
                    },
                    success: results => {
                        Swal.fire(
                            'Terhapus!',
                            'Data Siswa Kelas IX Telah Dihapus.',
                            'Berhasil'
                        )

                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    }
                });

            }
        })
    }
    </script>
</body>

</html>
<!-- end document-->
