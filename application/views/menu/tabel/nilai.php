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
                                        <td><?= $row->nama_siswa ?></td>
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
                                        <td><?= $row->na_pkn ?></td>
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
                                                href="<?= base_url()?>cetak/<?= $row->id_nilai ?>" target="_blank">
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
