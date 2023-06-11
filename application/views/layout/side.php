<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?= base_url(''); ?>">
                            <img src="<?= base_url(); ?>assets/images/icon/km4.png" style="width:100px;"
                                alt="KampusMengajar" />
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
                        <li class="<?=($this->uri->uri_string()=== '')?'active':''?> has-sub">
                            <a href="<?= base_url(''); ?>">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tabel</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li class="<?=($this->uri->uri_string()=== 'tabel')?'active':''?>">
                                    <a href="<?= base_url('tabel'); ?>">Daftar Guru</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_mapel')?'active':''?>">
                                    <a href="<?= base_url('tabel_mapel'); ?>">Daftar Pelajaran</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_siswa_vii')?'active':''?>">
                                    <a href="<?= base_url('tabel_siswa_vii'); ?>">Daftar Siswa Kelas VII</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_siswa_viii')?'active':''?>">
                                    <a href="<?= base_url('tabel_siswa_viii'); ?>">Daftar Siswa Kelas VIII</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_siswa_ix')?'active':''?>">
                                    <a href="<?= base_url('tabel_siswa_ix'); ?>">Daftar Siswa Kelas IX</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_nilai')?'active':''?>">
                                    <a href="<?= base_url('tabel_nilai'); ?>">Daftar Nilai</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?=($this->uri->uri_string()=== 'form')?'active':''?>">
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
                        <li class="<?=($this->uri->uri_string()=== '')?'active':''?> has-sub">
                            <a href="<?= base_url(''); ?>">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tabel</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li class="<?=($this->uri->uri_string()=== 'tabel')?'active':''?>">
                                    <a href="<?= base_url('tabel'); ?>">Daftar
                                        Guru</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_mapel')?'active':''?>">
                                    <a href="<?= base_url('tabel_mapel'); ?>">Daftar Pelajaran</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_siswa_vii')?'active':''?>">
                                    <a href="<?= base_url('tabel_siswa_vii'); ?>">Daftar Siswa Kelas VII</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_siswa_viii')?'active':''?>">
                                    <a href="<?= base_url('tabel_siswa_viii'); ?>">Daftar Siswa Kelas VIII</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_siswa_ix')?'active':''?>">
                                    <a href="<?= base_url('tabel_siswa_ix'); ?>">Daftar Siswa Kelas IX</a>
                                </li>
                                <li class="<?=($this->uri->uri_string()=== 'tabel_nilai')?'active':''?>">
                                    <a href="<?= base_url('tabel_nilai'); ?>">Daftar Nilai</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?=($this->uri->uri_string()=== 'form')?'active':''?>">
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
