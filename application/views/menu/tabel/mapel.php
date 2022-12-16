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
                <a href="<?= base_url('index'); ?>">
                    <img class="km4" src="<?= base_url(); ?>assets/images/icon/km4.png" style="width:100px;"
                        alt="KampusMengajar" />
                </a>
                <a href="<?= base_url('index'); ?>">
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
                            <div class="col-lg-12" style="max-width: 100%;">
                                <div class="col-md-12 mb-4">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Daftar Mata Pelajaran</h2>
                                    </div>
                                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Nama Pelajaran</th>
                                                <th>Guru Pelajaran</th>
                                                <th>Kode Pelajaran</th>
                                                <th>KKM</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($mapel as $row) : ?>
                                            <tr style="text-align: center;">
                                                <td><?= $row->nama_mapel ?></td>
                                                <td><?= $row->guru_mapel ?></td>
                                                <td><?= $row->kode_mapel ?></td>
                                                <td><?= $row->kkm ?></td>
                                                <td><button type="button" class="btn btn-outline-success"
                                                        data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-plus"></i> Edit
                                                    </button>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <!-- <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="text-right">$199.00</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1494.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="text-right">$699.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr> -->
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
