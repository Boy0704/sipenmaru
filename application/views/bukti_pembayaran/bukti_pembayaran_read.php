<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Bukti_pembayaran Read</h2>
        <table class="table">
	    <tr><td>No Pendaftaran</td><td><?php echo $no_pendaftaran; ?></td></tr>
	    <tr><td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td></tr>
	    <tr><td>Nama Pengirim</td><td><?php echo $nama_pengirim; ?></td></tr>
	    <tr><td>Bukti Pembayaran</td><td><?php echo $bukti_pembayaran; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('bukti_pembayaran') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>