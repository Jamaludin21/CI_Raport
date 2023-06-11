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
                                                <input type="hidden" name="id_nilai" id="id_nilai" class="form-control">
                                                <label for="nama" class="control-label mb-1">Nama Siswa</label>
                                                <input id="name_show" name="nama" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false" disabled>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="kelas" class="control-label mb-1">Kelas</label>
                                                <input id="kelas_show" name="kelas" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false" disabled>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nisn" class="control-label mb-1">NISN</label>
                                                <input id="nisn_show" name="nisn" type="number" class="form-control"
                                                    aria-required="true" aria-invalid="false" disabled>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="semester" class="control-label mb-1">Semester</label>
                                                <input id="semester_show" name="semester" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="sekolah" class="control-label mb-1">Sekolah</label>
                                                <input id="sekolah_show" name="sekolah" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false" disabled>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="tahun" class="control-label mb-1">Tahun
                                                    Pelajaran</label>
                                                <input id="tahun_show" name="tahun_pelajaran" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="show_biodata">
                                        <label for="alamat_siswa" class="control-label mb-1">Alamat</label>
                                        <textarea id="alamat_siswa_show" name="alamat_siswa" type="text"
                                            class="form-control" aria-required="true" aria-invalid="false" disabled>
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
                                        <textarea id="gotong" name="gotong_royong" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false">
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
                                                <input id="na_agama" name="na_agama" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
                                                <label for="kompetensi_agama" class="control-label mb-1">Capaian
                                                    Kompetensi</label>
                                                <input id="kompetensi_agama" name="kompetensi_agama" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
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
                                                    class="form-control" aria-required="true" aria-invalid="false">
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
                                                    class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="mtk"
                                                    class="control-label mb-1"><strong>Matematika</strong></label>
                                                <br>
                                                <label for="na_mtk" class="control-label mb-1">Nilai
                                                    Akhir</label>
                                                <input id="na_mtk" name="na_mtk" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
                                                <label for="kompetensi_mtk" class="control-label mb-1">Capaian
                                                    Kompetensi</label>
                                                <input id="kompetensi_mtk" name="kompetensi_mtk" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="ipa" class="control-label mb-1"><strong>Ilmu
                                                        Pengetahuan Alam</strong></label>
                                                <br>
                                                <label for="na_ipa" class="control-label mb-1">Nilai
                                                    Akhir</label>
                                                <input id="na_ipa" name="na_ipa" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
                                                <label for="kompetensi_ipa" class="control-label mb-1">Capaian
                                                    Kompetensi</label>
                                                <input id="kompetensi_ipa" name="kompetensi_ipa" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="ips" class="control-label mb-1"><strong>Ilmu
                                                        Pengetahuan Sosial</strong></label>
                                                <br>
                                                <label for="na_ips" class="control-label mb-1">Nilai
                                                    Akhir</label>
                                                <input id="na_ips" name="na_ips" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
                                                <label for="kompetensi_ips" class="control-label mb-1">Capaian
                                                    Kompetensi</label>
                                                <input id="kompetensi_ips" name="kompetensi_ips" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
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
                                                    class="form-control" aria-required="true" aria-invalid="false">
                                                <label for="kompetensi_inggris" class="control-label mb-1">Capaian
                                                    Kompetensi</label>
                                                <input id="kompetensi_inggris" name="kompetensi_inggris" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
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
                                                    class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="penjaskes" class="control-label mb-1"><strong>Pendidikan
                                                        Jasmani,
                                                        Olahraga dan Kesehatan</strong></label>
                                                <br>
                                                <label for="na_penjaskes" class="control-label mb-1">Nilai
                                                    Akhir</label>
                                                <input id="na_penjaskes" name="na_penjaskes" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
                                                <label for="kompetensi_penjaskes" class="control-label mb-1">Capaian
                                                    Kompetensi</label>
                                                <input id="kompetensi_penjaskes" name="kompetensi_penjaskes" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false">
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
                                                    class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="pramuka" class="control-label mb-1">Pramuka</label>
                                                <input id="pramuka" name="pramuka" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false">
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
                                                <input id="sakit" name="sakit" type="number" class="form-control"
                                                    aria-required="true" aria-invalid="false">
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
                                                <input id="tanpa_keterangan" name="tanpa_keterangan" type="number"
                                                    class="form-control" aria-required="true" aria-invalid="false">
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
                                        <button id="save_btn" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-save"></i>&nbsp;
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>