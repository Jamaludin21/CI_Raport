<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name=”csrf-token” content=”{{ csrf_token() }}” />

    <!-- Title Page-->
    <title>Daftar Nilai Siswa</title>
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
                            <a href="form.php">
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
                                        <h2 class="title-1">Daftar Nilai</h2>
                                    </div>
                                    <div mb-2>
                                        <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                                        <?php if ($this->session->flashdata('message')) :
										echo $this->session->flashdata('message');
										endif; ?>
                                    </div>
                                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Nama Siswa</th>
                                                <th>No. Absen</th>
                                                <th>Kelas</th>
                                                <th>NISN</th>
                                                <th>Semester</th>
                                                <th>Sekolah</th>
                                                <th>Tahun Pelajaran</th>
                                                <th>Alamat</th>
                                                <th>Taqwa</th>
                                                <th>Mandiri</th>
                                                <th>Gotong Royong</th>
                                                <th>Kreatif</th>
                                                <th>Kritis</th>
                                                <th>Kebhinekaan</th>
                                                <th>PA</th>
                                                <th>Kompetensi Agama</th>
                                                <th>PKN</th>
                                                <th>Kompetensi PKN</th>
                                                <th>B.Indonesia</th>
                                                <th>Kompetensi BI</th>
                                                <th>Matematika</th>
                                                <th>Kompetensi MTK</th>
                                                <th>IPA</th>
                                                <th>Kompetensi IPA</th>
                                                <th>IPS</th>
                                                <th>Kompetensi IPS</th>
                                                <th>B.Inggris</th>
                                                <th>Kompetensi Inggris</th>
                                                <th>Seni Budaya</th>
                                                <th>Kompetensi SB</th>
                                                <th>Penjaskes</th>
                                                <th>Kompetensi Penjaskes</th>
                                                <th>Prakarya</th>
                                                <th>Kompetensi PK</th>
                                                <th>Pramuka</th>
                                                <th>Silat</th>
                                                <th>Izin</th>
                                                <th>Sakit</th>
                                                <th>Tanpa Keterangan</th>
                                                <th>Catatan Wali Kelas</th>
                                                <th>Cetak Dokumen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($nilai as $row) : ?>
                                            <tr style="text-align: center;">
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->absen ?></td>
                                                <td><?= $row->kelas ?></td>
                                                <td><?= $row->nisn ?></td>
                                                <td><?= $row->semester ?></td>
                                                <td><?= $row->sekolah ?></td>
                                                <td><?= $row->tahun_pelajaran ?></td>
                                                <td><?= $row->alamat_siswa ?></td>
                                                <td><?= $row->taqwa ?></td>
                                                <td><?= $row->mandiri ?></td>
                                                <td><?= $row->gotong_royong ?></td>
                                                <td><?= $row->kreatif ?></td>
                                                <td><?= $row->kritis ?></td>
                                                <td><?= $row->bineka ?></td>
                                                <td><?= $row->na_agama ?></td>
                                                <td><?= $row->kompetensi_agama ?></td>
                                                <td><?= $row->pkn ?></td>
                                                <td><?= $row->kompetensi_pkn ?></td>
                                                <td><?= $row->na_bi ?></td>
                                                <td><?= $row->kompetensi_bi ?></td>
                                                <td><?= $row->na_mtk ?></td>
                                                <td><?= $row->kompetensi_mtk ?></td>
                                                <td><?= $row->na_ipa ?></td>
                                                <td><?= $row->kompetensi_ipa ?></td>
                                                <td><?= $row->na_ips ?></td>
                                                <td><?= $row->kompetensi_ips ?></td>
                                                <td><?= $row->na_inggris ?></td>
                                                <td><?= $row->kompetensi_inggris ?></td>
                                                <td><?= $row->na_sb ?></td>
                                                <td><?= $row->kompetensi_sb ?></td>
                                                <td><?= $row->na_penjaskes ?></td>
                                                <td><?= $row->kompetensi_penjaskes ?></td>
                                                <td><?= $row->na_pk ?></td>
                                                <td><?= $row->kompetensi_pk ?></td>
                                                <td><?= $row->pramuka ?></td>
                                                <td><?= $row->silat ?></td>
                                                <td><?= $row->sakit ?></td>
                                                <td><?= $row->izin ?></td>
                                                <td><?= $row->tanpa_keterangan ?></td>
                                                <td><?= $row->catatan_wakel ?></td>
                                                <td><a class="btn btn-outline-success"
                                                        href="<?= base_url()?>cetak/<?= $row->id_nilai ?>"
                                                        target="_blank">
                                                        <i class="fas fa-print"></i> Cetak
                                                    </a></td>
                                                <!-- <td style="text-align: center;"><?= $row->nikg ?></td>
                                                <td><button type="button" class="btn btn-outline-success"
                                                        data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-plus"></i> Edit
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger"
                                                        onclick="deleted()">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td> -->
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
<!-- end document-->
