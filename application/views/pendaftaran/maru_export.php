<?php 

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap_mahasiswa_baru.xls");

 ?>

<center><h2>Pendaftaran Mahasiswa Baru <?php echo date('Y') ?></h2></center>

<table border="1">
	<tr>
		<td>No Pendaftaran</td>
		<td>Nama</td>
		<td>No Telp</td>
		<td>Informasi Kampus</td>
		<td>Status Bayar</td>
	</tr>
	<?php
	$this->db->like('tgl_buat', date('Y'), 'after');
	 foreach ($this->db->get('pendaftaran')->result() as $row): ?>
	<tr>
		<td><?php echo $row->no_pendaftaran ?></td>
		<td><?php echo $row->nama_lengkap ?></td>
		<td><?php echo $row->no_telp ?></td>
		<td><?php echo $row->informasi_kampus ?></td>
		<td><?php echo $row->status_bayar ?></td>
	</tr>
	<?php endforeach ?>
</table>