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
    <title>Dashboard</title>

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
                            <img src="<?= base_url(); ?>images/icon/km4.png" alt="KampusMengajar" />
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
                                            <img src="<?= base_url(); ?>assets/images/icon/avatar-01.jpg"
                                                alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?= base_url(); ?>assets/images/icon/avatar-01.jpg"
                                                            alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <!-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div> -->
                                                <!-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div> -->
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9" style="max-width: 100%;">
                                <div class="col-md-12 mb-4">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Daftar Siswa Kelas VIII</h2>
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
                                                <th>NIS</th>
                                                <th>NISN</th>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($siswa_viii as $row) : ?>
                                            <tr style="text-align: center;">
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->nis ?></td>
                                                <td><?= $row->nisn ?></td>
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
                                    <form action="<?= base_url('add_kelas_viii'); ?>" method="post">
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
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
