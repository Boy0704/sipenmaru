<h2 style="margin-top:0px">Pendaftaran Detail</h2>
        <table class="table">
	    <tr><td>No Pendaftaran</td><td><?php echo $no_pendaftaran; ?></td></tr>
	    <tr><td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempat; ?></td></tr>
	    <tr><td>Tanggal Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>RT</td><td><?php echo $rt; ?></td></tr>
	    <tr><td>RW</td><td><?php echo $rw; ?></td></tr>
	    <tr><td>No Rumah</td><td><?php echo $no_rumah; ?></td></tr>
	    <tr><td>Kode Pos</td><td><?php echo $kode_pos; ?></td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>Tempat Tinggal</td><td><?php echo $tempat_tinggal; ?></td></tr>
	    <tr><td>Status Kawin</td><td><?php echo $status_kawin; ?></td></tr>
	    <tr><td>Jenis Pekerjaan</td><td><?php echo $jenis_pekerjaan; ?></td></tr>
	    <tr><td>Kewarganegaraan</td><td><?php echo $kewarganegaraan; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
	    <tr><td>Hobi</td><td><?php echo $hobi; ?></td></tr>
	    <tr><td>SMA/MA/SMK Asal</td><td><?php echo $slta; ?></td></tr>
	    <tr><td>Jurusan</td><td><?php echo $jurusan; ?></td></tr>
	    <tr><td>No Ijazah</td><td><?php echo $no_sttb; ?></td></tr>
	    <tr><td>Tanggal Ijazah</td><td><?php echo $tgl_sttb; ?></td></tr>
	    <tr><td>Tempat Ijazah Dikeluarkan</td><td><?php echo $tempat_sttb; ?></td></tr>
	    <tr><td>Pilihan Studi</td><td><?php echo $pilihan_studi; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Tgl Buat</td><td><?php echo $tgl_buat; ?></td></tr>
	    <tr><td>Jam Buat</td><td><?php echo $jam_buat; ?></td></tr>
	    <tr><td>Tahun Lulus</td><td><?php echo $tahun_lulus; ?></td></tr>
	    <tr><td>Metode Pembayaran</td><td><?php echo $metode_pembayaran; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pendaftaran') ?>" class="btn btn-default">Cancel</a> <a href="app/cetak_pendaftaran/<?php echo $no_pendaftaran ?>" class="btn btn-info">Cetak</a></td></tr>
	</table>