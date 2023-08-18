<!-- PAGE CONTAINER-->
<div class="page-container">
	<!-- HEADER DESKTOP-->
	<header class="header-desktop">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="header-wrap">
					<form class="form-header" action="" method="POST">
						<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
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
												<img src="<?= base_url(); ?>assets/images/icon/logoypii.jpeg" alt="YPII" />
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
								<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addModal">
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
										<th>Tindakan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($guru as $row) : ?>
										<tr style="text-align: center;">
											<td><?= $row->nama ?></td>
											<td><?= $row->jabatan ?></td>
											<td><?= $row->nikg ?></td>
											<td><button type="button" class="btn btn-outline-success btn_edit_guru" data="<?= $row->id_guru ?>">
													<i class="fas fa-plus"></i> Edit
												</button>
												<button type="button" class="btn btn-outline-danger" onclick="deleted_guru(<?= $row->id_guru ?>)">
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
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
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
								<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" autofocus autocomplete="off" id="nama_guru">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="jabatan">Jabatan Guru</label>
								<input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jabatan" autofocus autocomplete="off" id="jabatan">
								<?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="nikg">NIKG</label>
								<input type="number" class="form-control" placeholder="Masukkan NIKG" name="nikg" autofocus autocomplete="off" id="nikg">
								<?= form_error('nikg', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<!-- </form> -->
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary" name="submit" onclick="postdata()">Simpan</button>
				</div>
			</div>
		</div>
	</div>
	<!-- modal edit -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
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
									<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" autofocus autocomplete="off" id="nama_guru_edit" value="">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="jabatan">Jabatan Guru</label>
									<input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jabatan" autofocus autocomplete="off" id="jabatan_edit" value="">
									<?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="nikg">NIKG</label>
									<input type="number" class="form-control" placeholder="Masukkan NIKG" name="nikg" autofocus autocomplete="off" id="nikg_edit" value="">
									<?= form_error('nikg', '<small class="text-danger pl-3">', '</small>'); ?>
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