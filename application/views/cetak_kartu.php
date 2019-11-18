<!DOCTYPE html>
<html>
<head>
	<title></title>
	<base href="<?php echo base_url() ?>">
</head>
<body style="font-family: Arial" onload="print()">
<div style="border: solid 1px; padding: 10px;">
<table>
	<tr>
		<td>
			<img src="assets/logo.png" style="height:120px;width:130px;margin:auto">
		</td>
		<td>
			<center>
				<h3>PANITIA PENERIMAAN MAHASISWA BARU</h3>
			<h3>TAHUN AKADEMIK 2019-2020</h3>
			<h3>KARTU PESERTA UJIAN</h3>
			</center>
		</td>
	</tr>
</table>
<hr>
<?php 
$rw = $this->db->query("SELECT * FROM pendaftaran WHERE no_pendaftaran='$no_pendaftaran'")->row();
 ?>
<table >
	<tr>
		<th style="text-align: left;">Nomor Peserta</th>
		<th>:</th>
		<th style="text-align: left;"></th>
	</tr>
	<tr>
		<th style="text-align: left;">Nama</th>
		<th>:</th>
		<th style="text-align: left;"><?php echo $rw->nama_lengkap ?></th>
	</tr>
	<tr>
		<th style="text-align: left;">Jurusan</th>
		<th>:</th>
		<th style="text-align: left;">S1 <?php echo $rw->pilihan_studi ?></th>
	</tr>
	<tr>
		<th style="text-align: left;">Hari/Tanggal Ujian</th>
		<th>:</th>
		<th style="text-align: left;">Minggu, 19 Agustus 2018</th>
	</tr>
	<tr>
		<th style="text-align: left;">Waktu/Tempat Ujian</th>
		<th>:</th>
		<th style="text-align: left;">09:00 - 11.00 wib / Ruang Aula STIE Pontianak</th>
	</tr>
	<tr>
		<th style="text-align: left;">Materi Ujian </th>
		<th>:</th>
		<th style="text-align: left;"><br>Bahasa Indonesia, Bahasa Inggris,  Pengetahuan Umum <br>
		(Ekonomi, Kewarganegaraan, dan Logika)</th>
	</tr>
	<tr>
		<td><br><br><br>
			<img src="files/foto/<?php echo $rw->foto; ?>" style="width: 80px; height: 112px;">
		</td>
		<td></td>
		<td style="text-align: right;">
			Pontianak, .........................<?php echo date('Y') ?>
			<br><br><br><br><br><br>
			Sy. Agussaid Alkadrie, SE.MM

		</td>
	</tr>
</table>
</div>


</body>
</html>