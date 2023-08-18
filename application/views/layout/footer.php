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
 <!-- END MAIN CONTENT-->
 <!-- END PAGE CONTAINER-->
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

 	function deleted_guru(id) {
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

 	$(document).on('click', '.btn_edit_mapel', function() {
 		let id = $(this).attr('data');
 		$.ajax({
 			url: '<?= base_url("Ajax/detail_mapel"); ?>',
 			type: 'GET',
 			dataType: 'JSON',
 			data: {
 				"id_mapel": id,
 			},
 			success: results => {
 				console.log(results);
 				$('#kkm_edit').val(results[0].kkm);
 				$('#id_mapel').val(id);

 				$('#editModal').modal('show');
 			}
 		});


 	});

 	$(document).on('click', '.btn_edit_siswa_vii', function() {
 		let id = $(this).attr('data');
 		$.ajax({
 			url: '<?= base_url("Ajax/detail_kelas_vii"); ?>',
 			type: 'GET',
 			dataType: 'JSON',
 			data: {
 				"id_nilai": id,
 			},
 			success: results => {
 				console.log(results);
 				$('#name_edit').val(results[0].nama_siswa);
 				$('#absen_edit').val(results[0].absen);
 				$('#kelas_edit').val(results[0].kelas);
 				$('#nisn_edit').val(results[0].nisn);
 				$('#nis_edit').val(results[0].nis);
 				$('#semester_edit').val(results[0].semester);
 				$('#sekolah_edit').val(results[0].sekolah);
 				$('#tahun_pelajaran_edit').val(results[0].tahun_pelajaran);
 				$('#tempat_lahir_edit').val(results[0].tempat_lahir);
 				$('#tanggal_lahir_edit').val(results[0].tanggal_lahir);
 				$('#kelamin_edit').val(results[0].kelamin);
 				$('#telp_siswa_edit').val(results[0].telp_siswa);
 				$('#agama_edit').val(results[0].agama);
 				$('#status_keluarga_edit').val(results[0].status_keluarga);
 				$('#anak_ke_edit').val(results[0].anak_ke);
 				$('#sekolah_asal_edit').val(results[0].sekolah_asal);
 				$('#alamat_siswa_edit').val(results[0].alamat_siswa);
 				$('#pada_kelas_edit').val(results[0].pada_kelas);
 				$('#pada_tanggal_edit').val(results[0].pada_tanggal);
 				$('#nama_ayah_edit').val(results[0].nama_ayah);
 				$('#nama_ibu_edit').val(results[0].nama_ibu);
 				$('#telp_orangtua_edit').val(results[0].telp_orangtua);
 				$('#kerja_ayah_edit').val(results[0].kerja_ayah);
 				$('#kerja_ibu_edit').val(results[0].kerja_ibu);
 				$('#alamat_orangtua_edit').val(results[0].alamat_orangtua);
 				$('#nama_wali_edit').val(results[0].nama_wali);
 				$('#telp_wali_edit').val(results[0].telp_wali);
 				$('#pekerjaan_wali_edit').val(results[0].pekerjaan_wali);
 				$('#alamat_wali_edit').val(results[0].alamat_wali);
 				$('#id_nilai').val(id);

 				$('#editModal').modal('show');
 			}
 		});


 	});

 	function deleted_siswa7(id) {
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
 					url: '<?= base_url("delete_kelas_vii"); ?>',
 					type: 'POST',
 					dataType: 'JSON',
 					data: {
 						"id_nilai": id,
 					},
 					success: results => {
 						Swal.fire(
 							'Terhapus!',
 							'Data Siswa Kelas VII Telah Dihapus.',
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

 	$(document).on('click', '.btn_edit_siswa_viii', function() {
 		let id = $(this).attr('data');
 		$.ajax({
 			url: '<?= base_url("Ajax/detail_kelas_viii"); ?>',
 			type: 'GET',
 			dataType: 'JSON',
 			data: {
 				"id_nilai": id,
 			},
 			success: results => {
 				console.log(results);
 				$('#name_edit').val(results[0].nama_siswa);
 				$('#absen_edit').val(results[0].absen);
 				$('#kelas_edit').val(results[0].kelas);
 				$('#nisn_edit').val(results[0].nisn);
 				$('#nis_edit').val(results[0].nis);
 				$('#semester_edit').val(results[0].semester);
 				$('#sekolah_edit').val(results[0].sekolah);
 				$('#tahun_pelajaran_edit').val(results[0].tahun_pelajaran);
 				$('#tempat_lahir_edit').val(results[0].tempat_lahir);
 				$('#tanggal_lahir_edit').val(results[0].tanggal_lahir);
 				$('#kelamin_edit').val(results[0].kelamin);
 				$('#telp_siswa_edit').val(results[0].telp_siswa);
 				$('#agama_edit').val(results[0].agama);
 				$('#status_keluarga_edit').val(results[0].status_keluarga);
 				$('#anak_ke_edit').val(results[0].anak_ke);
 				$('#sekolah_asal_edit').val(results[0].sekolah_asal);
 				$('#alamat_siswa_edit').val(results[0].alamat_siswa);
 				$('#pada_kelas_edit').val(results[0].pada_kelas);
 				$('#pada_tanggal_edit').val(results[0].pada_tanggal);
 				$('#nama_ayah_edit').val(results[0].nama_ayah);
 				$('#nama_ibu_edit').val(results[0].nama_ibu);
 				$('#telp_orangtua_edit').val(results[0].telp_orangtua);
 				$('#kerja_ayah_edit').val(results[0].kerja_ayah);
 				$('#kerja_ibu_edit').val(results[0].kerja_ibu);
 				$('#alamat_orangtua_edit').val(results[0].alamat_orangtua);
 				$('#nama_wali_edit').val(results[0].nama_wali);
 				$('#telp_wali_edit').val(results[0].telp_wali);
 				$('#pekerjaan_wali_edit').val(results[0].pekerjaan_wali);
 				$('#alamat_wali_edit').val(results[0].alamat_wali);
 				$('#id_nilai').val(id);

 				$('#editModal').modal('show');
 			}
 		});


 	});

 	function deleted_siswa8(id) {
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
 					url: '<?= base_url("delete_kelas_viii"); ?>',
 					type: 'POST',
 					dataType: 'JSON',
 					data: {
 						"id_nilai": id,
 					},
 					success: results => {
 						Swal.fire(
 							'Terhapus!',
 							'Data Siswa Kelas VIII Telah Dihapus.',
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

 	$(document).on('click', '.btn_edit_siswa_ix', function() {
 		let id = $(this).attr('data');
 		$.ajax({
 			url: '<?= base_url("Ajax/detail_kelas_ix"); ?>',
 			type: 'GET',
 			dataType: 'JSON',
 			data: {
 				"id_nilai": id,
 			},
 			success: results => {
 				console.log(results);
 				$('#name_edit').val(results[0].nama_siswa);
 				$('#absen_edit').val(results[0].absen);
 				$('#kelas_edit').val(results[0].kelas);
 				$('#nisn_edit').val(results[0].nisn);
 				$('#nis_edit').val(results[0].nis);
 				$('#semester_edit').val(results[0].semester);
 				$('#sekolah_edit').val(results[0].sekolah);
 				$('#tahun_pelajaran_edit').val(results[0].tahun_pelajaran);
 				$('#tempat_lahir_edit').val(results[0].tempat_lahir);
 				$('#tanggal_lahir_edit').val(results[0].tanggal_lahir);
 				$('#kelamin_edit').val(results[0].kelamin);
 				$('#telp_siswa_edit').val(results[0].telp_siswa);
 				$('#agama_edit').val(results[0].agama);
 				$('#status_keluarga_edit').val(results[0].status_keluarga);
 				$('#anak_ke_edit').val(results[0].anak_ke);
 				$('#sekolah_asal_edit').val(results[0].sekolah_asal);
 				$('#alamat_siswa_edit').val(results[0].alamat_siswa);
 				$('#pada_kelas_edit').val(results[0].pada_kelas);
 				$('#pada_tanggal_edit').val(results[0].pada_tanggal);
 				$('#nama_ayah_edit').val(results[0].nama_ayah);
 				$('#nama_ibu_edit').val(results[0].nama_ibu);
 				$('#telp_orangtua_edit').val(results[0].telp_orangtua);
 				$('#kerja_ayah_edit').val(results[0].kerja_ayah);
 				$('#kerja_ibu_edit').val(results[0].kerja_ibu);
 				$('#alamat_orangtua_edit').val(results[0].alamat_orangtua);
 				$('#nama_wali_edit').val(results[0].nama_wali);
 				$('#telp_wali_edit').val(results[0].telp_wali);
 				$('#pekerjaan_wali_edit').val(results[0].pekerjaan_wali);
 				$('#alamat_wali_edit').val(results[0].alamat_wali);
 				$('#id_nilai').val(id);

 				$('#editModal').modal('show');
 			}
 		});


 	});

 	function deleted_siswa9(id) {
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
 					url: '<?= base_url("delete_kelas_ix"); ?>',
 					type: 'POST',
 					dataType: 'JSON',
 					data: {
 						"id_nilai": id,
 					},
 					success: results => {
 						Swal.fire(
 							'Terhapus!',
 							'Data Siswa Kelas IX Telah Dihapus.',
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