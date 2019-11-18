<!DOCTYPE html>
<html>
<head>
	<title>Cetak Pendaftaran</title>
	<base href="<?php echo base_url() ?>">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .table1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }
         
        .table1, th, td {
            /*border: 1px solid #999;*/
            padding: 3px;
        }
    </style>
</head>
<body onload="print()">
<?php 
$r = $data->row();
 ?>

	<center><h2>Biodata Calon Mahasiswa</h2></center>
	<hr>
	

	<table class="table1">
                	<tr>
                		<th colspan="2">
                			<div >
                				IDENTITAS PENDAFTARAN
                			</div>
                		</th>
                		<td> : </td>
                	</tr>
                    <tr>
                        <th >No Pendaftaran</th>
                        <td> : </td>
                        <td><?php echo $r->no_pendaftaran ?></td>
                    </tr>
                	<tr>
                		<th >Nama Lengkap</th>
                		<td> : </td>
                		<td><?php echo $r->nama_lengkap ?></td>
                	</tr>
                	<tr>
                		<th >Tempat/Tanggal Lahir</th>
                		<td> : </td>
                		<td>
                			<div >
                				<div ><?php echo $r->tempat ?></div>
								<div ><?php echo $r->tgl_lahir ?></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th >Alamat</th>
                		<td> : </td>
                		<td><?php echo $r->alamat ?></td>
                	</tr>
                	<tr>
                		<th >RT-RW/No Rumah/Kode Pos</th>
                		<td> : </td>
                		<td>
                			<div >
                				<div class="col-md-2">RT : <?php echo $r->rt ?></div>
								<div class="col-md-2">RW : <?php echo $r->rw ?></div>
								<div class="col-md-3">No Rumah : <?php echo $r->no_rumah ?></div>
								<div class="col-md-3">Kode Pos : <?php echo $r->kode_pos ?></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th >No Telp</th>
                		<td> : </td>
                		<td><?php echo $r->no_telp ?></td>
                	</tr>
                	<tr>
                		<th >Status Tempat Tinggal</th>
                		<td> : </td>
                		<td>
                			<?php echo $r->tempat_tinggal ?>
                		</td>
                	</tr>
                	<tr>
                		<th >Status Kawin</th>
                		<td> : </td>
                		<td>
                			<?php echo $r->status_kawin ?>
                		</td>
                	</tr>
                	<tr>
                		<th >Jenis Pekerjaan</th>
                		<td> : </td>
                		<td>
                			<?php echo $r->jenis_pekerjaan ?>
                		</td>
                	</tr>
                	<tr>
                		<th >Kewarganegaraan</th>
                		<td> : </td>
                		<td>
                			<?php echo $r->kewarganegaraan ?>
                		</td>
                	</tr>
                	<tr>
                		<th >Agama</th>
                		<td> : </td>
                		<td>
                			<?php echo $r->agama ?>
                		</td>
                	</tr>
                	<tr>
                		<th >Hobi</th>
                		<td> : </td>
                		<td><?php echo $r->hobi?></td>
                	</tr>
                	<tr>
                		<th colspan="2">
                			<div >
                				DATA PENDIDIKAN TERAKHIR
                			</div>
                		</th>
                		<td> : </td>
                	</tr>
                	<tr>
                		<th >SMA/MA/SMK Asal</th>
                		<td> : </td>
                		<td><?php echo $r->slta ?></td>
                	</tr>
                	<tr>
                		<th >Jurusan</th>
                		<td> : </td>
                		<td><?php echo $r->jurusan ?></td>
                	</tr>
                	<tr>
                		<th >Tahun Lulus</th>
                		<td> : </td>
                		<td><?php echo $r->tahun_lulus ?></td>
                	</tr>
                	<tr>
                		<th >No Seri Ijazah/Tgl Ijazah</th>
                		<td> : </td>
                		<td>
                			<div >
                				<div >
                					<?php echo $r->no_sttb ?>
                				</div>
								<div >
									<?php echo $r->tgl_sttb ?>
								</div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th >Tempat Ijazah dikeluarkan</th>
                		<td> : </td>
                		<td><?php echo $r->tempat_sttb ?></td>
                	</tr>
                	<tr>
                		<th >Pilihan Studi</th>
                		<td> : </td>
                		<td>
                			<?php echo $r->pilihan_studi ?>
                		</td>
                	</tr>
                    <tr>
                        <th >Pembayaran Pendaftaran</th>
                        <td> : </td>
                        <td>
                            <?php echo $r->metode_pembayaran ?>
                        </td>
                    </tr>
                    <tr>
		<td><br><br><br>
			<img src="files/foto/<?php echo $r->foto; ?>" style="width: 80px; height: 112px;">
		</td>
		<td></td>
		<td style="text-align: right;">
			Pontianak, .........................<?php echo date('Y') ?>
			<br>
			Panitia
			<br><br><br><br><br>

		</td>
	</tr>
                </table>
            </form>

</body>
</html>