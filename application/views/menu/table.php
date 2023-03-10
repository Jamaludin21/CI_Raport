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
    <title>Daftar Guru</title>
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
                            <div class="col-lg-12" style="max-width: 100%;">
                                <div class="col-md-12 mb-4">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Daftar Guru</h2>
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                            data-target="#addModal">
                                            <i class="fas fa-plus"></i> Tambah Guru
                                        </button>
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
                                                <th>Nama Guru</th>
                                                <th>Jabatan Guru</th>
                                                <th>NUPTK</th>
                                                <th>Pelajaran</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($guru as $row) : ?>
                                            <tr style="text-align: center;">
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->jabatan ?></td>
                                                <td><?= $row->nikg ?></td>
                                                <td><?= $row->mata_pelajaran ?></td>
                                                <td><button type="button" class="btn btn-outline-success btn_edit_guru"
                                                        data="<?= $row->id_guru ?>">
                                                        <i class="fas fa-plus"></i> Edit
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger"
                                                        onclick="deleted(<?= $row->id_guru ?>)">
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
                            <h5 class="modal-title" id="addModalLabel">Tambah Guru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <form action="#" method="POST"> -->
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama"
                                            autofocus autocomplete="off" id="nama_guru">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan Guru</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Jabatan"
                                            name="jabatan" autofocus autocomplete="off" id="jabatan">
                                        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="nikg">NIKG</label>
                                        <input type="number" class="form-control" placeholder="Masukkan NIKG"
                                            name="nikg" autofocus autocomplete="off" id="nikg">
                                        <?= form_error('nikg', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" name="submit"
                                onclick="postdata()">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal edit -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Ubah Data Guru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?= base_url('edit_guru'); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="hidden" name="id_guru" id="id_guru" class="form-control">
                                            <input type="text" class="form-control" placeholder="Masukkan Nama"
                                                name="nama" autofocus autocomplete="off" id="nama_guru_edit" value="">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan Guru</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Jabatan"
                                                name="jabatan" autofocus autocomplete="off" id="jabatan_edit" value="">
                                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nikg">NIKG</label>
                                            <input type="number" class="form-control" placeholder="Masukkan NIKG"
                                                name="nikg" autofocus autocomplete="off" id="nikg_edit" value="">
                                            <?= form_error('nikg', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal dialog hapus data-->
            <!-- <div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Anda ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger" id="hapus">Hapus</button>
                        </div>
                    </div>
                </div>
            </div> -->
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

    <script>
    function postdata() {
        let nama = $("#nama_guru").val();
        let jabatan = $("#jabatan").val();
        let nikg = $("#nikg").val();

        if (nama == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Nama Harus Diisi!'
            });

            return false;
        }

        if (jabatan == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Jabatan Harus Diisi!'
            });

            return false;
        }

        if (nikg == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'NIKG Harus Diisi!'
            });

            return false;
        }

        $.ajax({
            url: "<?= base_url("add_guru") ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                "nama": nama,
                "jabatan": jabatan,
                "nikg": nikg
            },
            // beforeSend: () => {
            //     Swal.fire({
            //         title: 'Please Wait...',
            //         html: '',
            //         timer: 10000,
            //         timerProgressBar: true,
            //         didOpen: () => {
            //             Swal.showLoading()
            //             const b = Swal.getHtmlContainer().querySelector('b')
            //             timerInterval = setInterval(() => {
            //                 b.textContent = Swal.getTimerLeft()
            //             }, 100)
            //         },
            //         willClose: () => {
            //             clearInterval(timerInterval)
            //         }
            //     }).then((result) => {
            //         /* Read more about handling dismissals below */
            //         if (result.dismiss === Swal.DismissReason.timer) {
            //             console.log('I was closed by the timer')
            //         }
            //     })
            // },
            success: results => {

                if (results) {
                    Swal.fire(
                        'Berhasil!',
                        'Data telah ditambahkan!',
                        'Berhasil'
                    );

                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Nama Guru sudah ada'
                    })
                }

            }
        })
    }


    $(document).on('click', '.btn_edit_guru', function() {
        let id = $(this).attr('data');
        $.ajax({
            url: '<?= base_url("Ajax/detail_guru"); ?>',
            type: 'GET',
            dataType: 'JSON',
            data: {
                "id_guru": id,
            },
            success: results => {
                console.log(results);
                $('#nama_guru_edit').val(results[0].nama);
                $('#jabatan_edit').val(results[0].jabatan);
                $('#nikg_edit').val(results[0].nikg);
                $('#id_guru').val(id);

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
                    url: '<?= base_url("delete_guru"); ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        "id_guru": id,
                    },
                    success: results => {
                        Swal.fire(
                            'Terhapus!',
                            'Data Guru Telah Dihapus.',
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
