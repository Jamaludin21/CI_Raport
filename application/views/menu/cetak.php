<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr style="text-align: center;">
                    <th>Nama Siswa</th>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach($cetak_nilai as $row) : ?>
                <tr style="text-align: center;">
                    <td><?= $row->nama_siswa ?></td>
                    <td><?= $row->kelas ?></td>
                    <td><?= $row->nisn ?></td>
                    <td><?= $row->semester ?></td>
                    <td><?= $row->sekolah ?></td>
                    <td><?= $row->tahun_pelajaran ?></td>
                    <td><?= $row->alamat ?></td>
                    <td><?= $row->taqwa ?></td>
                    <td><?= $row->mandiri ?></td>
                    <td><?= $row->gotong_royong ?></td>
                    <td><?= $row->kreatif ?></td>
                    <td><?= $row->kritis ?></td>
                    <td><?= $row->bineka ?></td>
                    <td><?= $row->agama ?></td>
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
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

<script>
	window.print();
</script>
</html>
