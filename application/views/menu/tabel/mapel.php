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
									<?php foreach ($mapel as $row) : ?>
										<tr style="text-align: center;">
											<td><?= $row->nama_mapel ?></td>
											<td><?= $row->nama_guru ?></td>
											<td><?= $row->kode_mapel ?></td>
											<td><?= $row->kkm ?></td>
											<td><button type="button" class="btn btn-outline-success btn_edit_mapel" data="<?= $row->id_mapel ?>">
													<i class="fas fa-plus"></i> Edit
												</button>
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
							<form action="<?= base_url('edit_mapel'); ?>" method="POST">
								<div class="form-group">
									<input type="hidden" name="id_mapel" id="id_mapel" class="form-control">
									<label for="kkm">KKM</label>
									<input type="number" class="form-control" placeholder="Masukkan KKM" name="kkm" autofocus autocomplete="off" id="kkm_edit" value="">
									<?= form_error('kkm', '<small class="text-danger pl-3">', '</small>'); ?>
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