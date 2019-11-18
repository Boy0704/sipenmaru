<?php
$row = $data->row();
?>
<div class="panel panel-default">
            <div class="panel-heading">FORMULIR PENDAFTARAN</div>
            <form action="index.php/app/aksiubah_formdaftar/<?php echo $this->uri->segment(3) ?>" method="post" enctype="multipart/form-data">
                <table class="table table-striped table-hover" width="100%">
                	<tr>
                		<th colspan="2">
                			<div class="alert alert-info">
                				IDENTITAS PENDAFTARAN
                			</div>
                		</th>
                	</tr>
                	<tr>
                		<th width="200px">Nama Lengkap</th>
                		<td><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $row->nama_lengkap ?>" required=""></td>
                	</tr>
                	<tr>
                		<th width="200px">Tempat/Tanggal Lahir</th>
                		<td>
                			<div class="row">
                				<div class="col-md-6"><input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" required="" value="<?php echo $row->tempat ?>"></div>
								<div class="col-md-6"><input type="text" name="tgl" id="tgllahir" class="form-control tgl" placeholder="yyyy-mm-dd" required="" value="<?php echo $row->tgl_lahir ?>"></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Alamat</th>
                		<td><textarea class="form-control" rows="2" name="alamat" required="" ><?php echo $row->alamat ?></textarea></td>
                	</tr>
                	<tr>
                		<th width="200px">RT-RW/No Rumah/Kode Pos</th>
                		<td>
                			<div class="row">
                				<div class="col-md-6"><input type="text" name="rt" class="form-control" placeholder="RT" required="" value="<?php echo $row->rt ?>"></div>
								<div class="col-md-6"><input type="text" name="rw" class="form-control" placeholder="RW" required="" value="<?php echo $row->rw ?>"></div>
								<div class="col-md-6"><input type="text" name="no_rumah" class="form-control" placeholder="No Rumah" required="" value="<?php echo $row->no_rumah ?>"></div>
								<div class="col-md-6"><input type="text" name="kode_pos" class="form-control" placeholder="Kode POS" required="" value="<?php echo $row->kode_pos ?>"></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">No Telp</th>
                		<td><input type="text" name="no_telp" class="form-control" placeholder="No Telp" required="" value="<?php echo $row->no_telp ?>"></td>
                	</tr>
                	<tr>
                		<th width="200px">Status Tempat Tinggal</th>
                		<td>
                			<select name="tempat_tinggal" class="form-control" required="">
                				<option value="<?php echo $row->tempat_tinggal ?>"><?php echo $row->tempat_tinggal ?></option>
                				<option value="Rumah Sendiri">Rumah Sendiri</option>
                				<option value="Rumah Orang Tua">Rumah Orang Tua</option>
                				<option value="Kos/Kontrakan">Kos/Kontrakan</option>
                				<option value="Asrama">Asrama</option>
                			</select>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Status Kawin</th>
                		<td>
                			<select name="status_kawin" class="form-control" required="">
                				<option value="<?php echo $row->status_kawin ?>"><?php echo $row->status_kawin ?></option>
                				<option value="Kawin">Kawin</option>
                				<option value="Belum Kawin">Belum Kawin</option>
                			</select>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Jenis Pekerjaan</th>
                		<td>
                			<select name="jenis_pekerjaan" class="form-control" required="">
                				<option value="<?php echo $row->jenis_pekerjaan ?>"><?php echo $row->jenis_pekerjaan ?></option>
                				<option value="PNS">PNS</option>
                				<option value="Karyawan Swasta">Karyawan Swasta</option>
                				<option value="Wirausaha">Wirausaha</option>
                				<option value="Belum Bekerja">Belum Bekerja</option>
                			</select>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Kewarganegaraan</th>
                		<td>
                			<select name="kewarganegaraan" class="form-control" required="">
                				<option value="<?php echo $row->kewarganegaraan ?>"><?php echo $row->kewarganegaraan ?></option>
                				<option value="WNI">WNI</option>
                				<option value="WNA">WNA</option>
                			</select>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Agama</th>
                		<td>
                			<select name="agama" class="form-control" required="">
                				<option value="<?php echo $row->agama ?>"><?php echo $row->agama ?></option>
                				<option value="Islam">Islam</option>
                				<option value="Katholik">Katholik</option>
                				<option value="Kristen">Kristen</option>
                				<option value="Hindu">Hindu</option>
                				<option value="Budha">Budha</option>
                				<option value="Lainnya">Lainnya</option>
                			</select>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Hobi</th>
                		<td><input type="text" name="hobi" class="form-control" placeholder="Hobi" required="" value="<?php echo $row->hobi ?>"></td>
                	</tr>
                	<tr>
                		<th width="200px">Upload Foto</th>
                		<td><input type="file" name="foto" class="form-control" >
                            <br>
                            <b>*) Foto Sebelumnya</b><br>
                            <img src="files/foto/<?php echo $row->foto ?>" style="width: 100px; height: 100px;">
                        </td>
                	</tr>
                	<tr>
                		<th colspan="2">
                			<div class="alert alert-info">
                				DATA PENDIDIKAN TERAKHIR
                			</div>
                		</th>
                	</tr>
                	<tr>
                		<th width="200px">SMA/MA/SMK Asal</th>
                		<td><input type="text" name="slta" class="form-control" placeholder="SMA/MA/SMK Asal" required="" value="<?php echo $row->slta ?>"></td>
                	</tr>
                	<tr>
                		<th width="200px">Jurusan</th>
                		<td><input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required="" value="<?php echo $row->jurusan ?>"></td>
                	</tr>
                	<tr>
                		<th width="200px">Tahun Lulus</th>
                		<td><input type="text" name="tahun_lulus" class="form-control" placeholder="yyyy" required="" value="<?php echo $row->tahun_lulus ?>"></td>
                	</tr>
                	<tr>
                		<th width="200px">No Seri Ijazah/Tgl Ijazah</th>
                		<td>
                			<div class="row">
                				<div class="col-md-6"><input type="text" name="no_sttb" class="form-control" placeholder="No Seri Ijazah" value="<?php echo $row->no_sttb ?>">
                				*) Kosongkan Jika Tidak ada
                				</div>
								<div class="col-md-6"><input type="text" name="tgl_sttb" class="form-control tgl" placeholder="yyyy-mm-dd" value="<?php echo $row->tgl_sttb ?>"></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Tempat Ijazah dikeluarkan</th>
                		<td><input type="text" name="tempat_sttb" class="form-control" placeholder="Tempat Ijazah dikeluarkan" value="<?php echo $row->tempat_sttb ?>"></td>
                	</tr>
                	<tr>
                		<th width="200px">Pilihan Studi</th>
                		<td>
                			<select name="pilihan_studi" class="form-control" required="">
                				<option value="<?php echo $row->pilihan_studi ?>"><?php echo $row->pilihan_studi ?></option>
                				<option value="Manajemen">Manajemen</option>
                				<option value="Akuntansi">Akuntansi</option>
                			</select>
                		</td>
                	</tr>
                    <tr>
                        <th width="200px">Pembayaran Pendaftaran</th>
                        <td>
                            <select name="metode_pembayaran" class="form-control" required="">
                                <option value="<?php echo $row->metode_pembayaran ?>"><?php echo $row->metode_pembayaran ?></option>
                                <option value="Tranfer Bank">Transfer Via Bank</option>
                                <option value="Bayar dikampus">Bayar dikampus</option>
                            </select>
                        </td>
                    </tr>
                	<tr>
                		<th width="200px"></th>
                		<td>
                			<button type="submit" class="btn btn-primary">Ubah</button>
                		</td>
                	</tr>
                </table>
            </form>
            </div>