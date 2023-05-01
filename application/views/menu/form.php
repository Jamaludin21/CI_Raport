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
    <title>Forms</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/icon/logoypii.jpeg">

    <!-- Fontfaces CSS-->
    <link href="<?= base_url(); ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet"
        media="all">
    <link href="<?= base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url(); ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                        <li>
                            <a href="<?= base_url(); ?>">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li class="has-sub">
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
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a href="<?= base_url('form'); ?>">
                                <i class="far fa-check-square"></i>Form</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Halaman</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.php">Masuk</a>
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
                <a href="<?= base_url(); ?>">
                    <img class="km4" src="<?= base_url(); ?>assets/images/icon/km4.png" style="width:100px;"
                        alt="KampusMengajar" />
                </a>
                <a href="<?= base_url(); ?>">
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
                        <li class="has-sub">
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
                        <li class="active has-sub">
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
                            <div class="col-lg-12" style="max-width:100%;">
                                <div class="card">
                                    <div class="card-header text-center">Form Pengisian Raport</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">SMP YPII Bungur Bekasi</h3>
                                        </div>
                                        <hr>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Pilih Kelas</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="kelas" id="pilih_kelas" class="form-control">
                                                    <option value=""></option>
                                                    <?php foreach ($data_nilai as $key) : ?>
                                                    <option id="select_kelas" value="<?= $key['id_kelas'] ?>">
                                                        <?= $key['keterangan'] ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class="form-control-label">Pilih Absen
                                                    Siswa</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="absen" id="pilih_absen" class="form-control">
                                                    <option value="">Belum ada pilihan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <form action="<?= base_url('add_form'); ?>" method="post">
                                            <div class="row" id="show_biodata">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_nilai" id="id_nilai"
                                                            class="form-control">
                                                        <label for="nama" class="control-label mb-1">Nama Siswa</label>
                                                        <input id="name_show" name="nama" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="kelas" class="control-label mb-1">Kelas</label>
                                                        <input id="kelas_show" name="kelas" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nisn" class="control-label mb-1">NISN</label>
                                                        <input id="nisn_show" name="nisn" type="number"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="semester"
                                                            class="control-label mb-1">Semester</label>
                                                        <input id="semester_show" name="semester" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="sekolah" class="control-label mb-1">Sekolah</label>
                                                        <input id="sekolah_show" name="sekolah" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="tahun" class="control-label mb-1">Tahun
                                                            Pelajaran</label>
                                                        <input id="tahun_show" name="tahun_pelajaran" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="show_biodata">
                                                <label for="alamat_siswa" class="control-label mb-1">Alamat</label>
                                                <textarea id="alamat_siswa_show" name="alamat_siswa" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false"
                                                    disabled>
												</textarea>
                                            </div>
                                            <div class="card-title">
                                                <h3 class="text-center title-2 mb-4 mt-4">Sikap</h3>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="taqwa" class="control-label mb-1">Beriman, Bertakwa kepada
                                                    Tuhan Yang Maha Esa dan Berakhlak mulia</label>
                                                <textarea id="taqwa" name="taqwa" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
												</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="mandiri" class="control-label mb-1">Mandiri</label>
                                                <textarea id="mandiri" name="mandiri" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
												</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="gotong" class="control-label mb-1">Bergotong Royong</label>
                                                <textarea id="gotong" name="gotong_royong" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="kreatif" class="control-label mb-1">Kreatif</label>
                                                <textarea id="kreatif" name="kreatif" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
												</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="kritis" class="control-label mb-1">Bernalar Kritis</label>
                                                <textarea id="kritis" name="kritis" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
												</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="bineka" class="control-label mb-1">Berkebinekaan
                                                    Global</label>
                                                <textarea id="bineka" name="bineka" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
												</textarea>
                                            </div>
                                            <div class="card-title">
                                                <h3 class="text-center title-2 mb-4 mt-4">Pengetahuan & Keterampilan
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="agama" class="control-label mb-1"><strong>Pendidikan
                                                                Agama dan Budi Pekerti</strong></label>
                                                        <br>
                                                        <label for="na_agama" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_agama" name="na_agama" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                        <label for="kompetensi_agama" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_agama" name="kompetensi_agama" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="pkn" class="control-label mb-1"><strong>Pendidikan
                                                                Pancasila dan Kewarganegaraan</strong></label>
                                                        <br>
                                                        <label for="na_pkn" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="pkn" name="pkn" type="text" class="form-control"
                                                            aria-required="true" aria-invalid="false">
                                                        <label for="kompetensi_pkn" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_pkn" name="kompetensi_pkn" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="bi" class="control-label mb-1"><strong>Bahasa
                                                                Indonesia</strong></label>
                                                        <br>
                                                        <label for="na_bi" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_bi" name="na_bi" type="text" class="form-control"
                                                            aria-required="true" aria-invalid="false">
                                                        <label for="kompetensi_pkn" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_bi" name="kompetensi_bi" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="mtk"
                                                            class="control-label mb-1"><strong>Matematika</strong></label>
                                                        <br>
                                                        <label for="na_mtk" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_mtk" name="na_mtk" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                        <label for="kompetensi_mtk" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_mtk" name="kompetensi_mtk" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="ipa" class="control-label mb-1"><strong>Ilmu
                                                                Pengetahuan Alam</strong></label>
                                                        <br>
                                                        <label for="na_ipa" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_ipa" name="na_ipa" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                        <label for="kompetensi_ipa" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_ipa" name="kompetensi_ipa" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="ips" class="control-label mb-1"><strong>Ilmu
                                                                Pengetahuan Sosial</strong></label>
                                                        <br>
                                                        <label for="na_ips" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_ips" name="na_ips" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                        <label for="kompetensi_ips" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_ips" name="kompetensi_ips" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="inggris" class="control-label mb-1"><strong>Bahasa
                                                                Inggris</strong></label>
                                                        <br>
                                                        <label for="na_inggris" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_inggris" name="na_inggris" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                        <label for="kompetensi_inggris"
                                                            class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_inggris" name="kompetensi_inggris"
                                                            type="text" class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="sb" class="control-label mb-1"><strong>Seni
                                                                Budaya</strong></label>
                                                        <br>
                                                        <label for="na_sb" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_sb" name="na_sb" type="text" class="form-control"
                                                            aria-required="true" aria-invalid="false">
                                                        <label for="kompetensi_sb" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_sb" name="kompetensi_sb" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="penjaskes"
                                                            class="control-label mb-1"><strong>Pendidikan Jasmani,
                                                                Olahraga dan Kesehatan</strong></label>
                                                        <br>
                                                        <label for="na_penjaskes" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_penjaskes" name="na_penjaskes" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                        <label for="kompetensi_penjaskes"
                                                            class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_penjaskes" name="kompetensi_penjaskes"
                                                            type="text" class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="pk"
                                                            class="control-label mb-1"><strong>Prakarya/Informatika</strong></label>
                                                        <br>
                                                        <label for="na_pk" class="control-label mb-1">Nilai
                                                            Akhir</label>
                                                        <input id="na_pk" name="na_pk" type="text" class="form-control"
                                                            aria-required="true" aria-invalid="false">
                                                        <label for="kompetensi_pk" class="control-label mb-1">Capaian
                                                            Kompetensi</label>
                                                        <input id="kompetensi_pk" name="kompetensi_pk" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="pramuka" class="control-label mb-1">Pramuka</label>
                                                        <input id="pramuka" name="pramuka" type="text"
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="silat" class="control-label mb-1">Silat</label>
                                                        <input id="silat" name="silat" type="text" class="form-control"
                                                            aria-required="true" aria-invalid="false">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h3 class="text-center title-2 mb-4 mt-4">Absensi
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
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
                                                        <label for="tanpa_keterangan" class="control-label mb-1">Tanpa
                                                            Keterangan</label>
                                                        <input id="tanpa_keterangan" name="tanpa_keterangan"
                                                            type="number" class="form-control" aria-required="true"
                                                            aria-invalid="false">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="catatan_wakel" class="control-label mb-1">Catatan Wali
                                                    Kelas</label>
                                                <textarea id="catatan_wakel" name="catatan_wakel" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
												</textarea>
                                            </div>
                                            <div>
                                                <button id="save_btn" type="submit"
                                                    class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-save"></i>&nbsp;
                                                    Simpan
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2022 KM4. All rights reserved.
                                        <!-- <a href="https://colorlib.com">Colorlib</a>. -->
                                    </p>
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
    <script>
    $(document).ready(function() {
        $('#pilih_kelas').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?= base_url("Ajax/detail_form"); ?>",
                method: "POST",
                dataType: 'JSON',
                data: {
                    id_nilai: id
                },
                success: function(data) {
                    console.log(data);
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id_kelas + '>' +
                            data[i].absen + '</option>';
                    }
                    $('#pilih_absen').html(html);
                }
            });
        });
    });

    // $(document).ready(function() {
    //     $('#pilih_absen').change(function() {
    //         var id = $(this).val();
    //         var nama_siswa = $(this).attr("nama");
    //         var kelas = $(this).attr("kelas");
    //         var nisn = $(this).attr("nisn");
    //         var smeester = $(this).attr("semester");
    //         var sekolah = $(this).attr("sekolah");
    //         var tahun_pelajaran = $(this).attr("tahun_pelajaran");
    //         var alamat_siswa = $(this).attr("alamat_siswa");
    //         $.ajax({
    //             url: '<?= base_url("Ajax/detail_absen"); ?>',
    //             type: 'GET',
    //             dataType: 'JSON',
    //             data: {
    //                 "id_kelas": id,
    //             },
    //             success: results => {
    //                 let html = '';
    //                 results.forEach((response) => {
    //                     console.log(results);
    //                     html +=
    //                         '<div class="col-6">' + '<div class = "form-group" >' +
    //                         '<label for = "nama" class = "control-label mb-1" > Nama Siswa </label>' +
    //                         '<input id = "name_show" name = "nama" type = "text" class = "form-control" aria - required = "true" aria - invalid = "false" placeholder=' +
    //                         response.nama + ' disabled >' +
    //                         '</div> </div>' + '<div class="col-6">' +
    //                         '<div class = "form-group" >' +
    //                         '<label for = "kelas" class = "control-label mb-1" > Kelas </label>' +
    //                         '<input id = "kelas_show" name = "kelas" type = "text" class = "form-control" aria - required = "true" aria - invalid = "false" placeholder=' +
    //                         response.kelas + ' disabled >' +
    //                         '</div> </div>' + '<div class="col-6">' +
    //                         '<div class = "form-group" >' +
    //                         '<label for = "nisn" class = "control-label mb-1" > NISN </label>' +
    //                         '<input id = "nisn_show" name = "nisn" type = "text" class = "form-control" aria - required = "true" aria - invalid = "false" placeholder=' +
    //                         response.nisn + ' disabled >' + '</div> </div>' +
    //                         '<div class="col-6">' + '<div class = "form-group" >' +
    //                         '<label for = "semester" class = "control-label mb-1" > Semester </label>' +
    //                         '<input id = "semester_show" name = "semester" type = "text" class = "form-control" aria - required = "true" aria - invalid = "false" placeholder=' +
    //                         response.semester + ' disabled >' + '</div> </div>' +
    //                         '<div class="col-6">' + '<div class = "form-group" >' +
    //                         '<label for = "sekolah" class = "control-label mb-1" > Sekolah </label>' +
    //                         '<input id = "sekolah_show" name = "sekolah" type = "text" class = "form-control" aria - required = "true" aria - invalid = "false" placeholder=' +
    //                         response.sekolah + ' disabled >' + '</div> </div>' +
    //                         '<div class="col-6">' + '<div class = "form-group" >' +
    //                         '<label for = "tahun_pelajaran" class = "control-label mb-1" > Tahun Pelajaran </label>' +
    //                         '<input id = "tahun_pelajaran_show" name = "tahun_pelajaran" type = "text" class = "form-control" aria - required = "true" aria - invalid = "false" placeholder=' +
    //                         response.tahun_pelajaran + ' disabled >' +
    //                         '</div> </div>';
    //                     // $('#name_show').val(results[0].nama_siswa);
    //                     // $('#kelas_show').val(results[0].kelas);
    //                     // $('#nisn_show').val(results[0].nisn);
    //                     // $('#semester_show').val(results[0].semester);
    //                     // $('#sekolah_show').val(results[0].sekolah);
    //                     // $('#tahun_pelajaran_show').val(results[0].tahun_pelajaran);
    //                     // $('#alamat_siswa_show').val(results[0].alamat_siswa);
    //                     // $('#id_nilai').val(id);

    //                     $('#show_biodata').html(html);
    //                 });
    //             }
    //         });
    //     });
    // });
    // $(document).on('click', 'select_absen', function() {
    //     let id = $(this).attr('data');
    //     $.ajax({
    //         url: '<?= base_url("Ajax/detail_form"); ?>',
    //         type: 'GET',
    //         dataType: 'JSON',
    //         data: {
    //             "id_nilai": id,
    //         },
    //         success: results => {
    //             console.log(results);
    //             // $('#pilih_absen').val(results[0].absen);
    //             $('#name_show').val(results[0].nama);
    //             $('#kelas_show').val(results[0].kelas);
    //             $('#nisn_show').val(results[0].nisn);
    //             $('#semester_show').val(results[0].semester);
    //             $('#sekolah_show').val(results[0].sekolah);
    //             $('#tahun_pelajaran_show').val(results[0].tahun_pelajaran);
    //             $('#alamat_siswa_show').val(results[0].alamat_siswa);
    //             $('#id_nilai').val(id);

    //             $('#show_biodata').html('html');
    //         }
    //     });


    // });
    </script>
</body>

</html>
<!-- end document-->
