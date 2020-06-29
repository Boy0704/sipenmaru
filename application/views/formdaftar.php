<div class="panel panel-default">
            <div class="panel-heading">FORMULIR PENDAFTARAN</div>
            <form action="index.php/app/simpan_formdaftar" method="post" enctype="multipart/form-data">
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
                		<td><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required=""></td>
                	</tr>
                	<tr>
                		<th width="200px">Tempat/Tanggal Lahir</th>
                		<td>
                			<div class="row">
                				<div class="col-md-6"><input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" required=""></div>
								<div class="col-md-6"><input type="text" name="tgl" id="tgllahir" class="form-control tgl" placeholder="yyyy-mm-dd" required=""></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Alamat</th>
                		<td><textarea class="form-control" rows="2" name="alamat" required=""></textarea></td>
                	</tr>
                	<tr>
                		<th width="200px">RT-RW/No Rumah/Kode Pos</th>
                		<td>
                			<div class="row">
                				<div class="col-md-2"><input type="text" name="rt" class="form-control" placeholder="RT" required=""></div>
								<div class="col-md-2"><input type="text" name="rw" class="form-control" placeholder="RW" required=""></div>
								<div class="col-md-3"><input type="text" name="no_rumah" class="form-control" placeholder="No Rumah" required=""></div>
								<div class="col-md-3"><input type="text" name="kode_pos" class="form-control" placeholder="Kode POS" required=""></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">No Telp</th>
                		<td><input type="text" name="no_telp" class="form-control" placeholder="No Telp" required=""></td>
                	</tr>
                	<tr>
                		<th width="200px">Status Tempat Tinggal</th>
                		<td>
                			<select name="tempat_tinggal" class="form-control" required="">
                				<option value="">Pilih Status Tempat Tinggal</option>
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
                				<option value="">Pilih Status Kawin</option>
                				<option value="Kawin">Kawin</option>
                				<option value="Belum Kawin">Belum Kawin</option>
                			</select>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Jenis Pekerjaan</th>
                		<td>
                			<select name="jenis_pekerjaan" class="form-control" required="">
                				<option value="">Pilih Jenis Pekerjaan</option>
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
                				<option value="">Pilih Kewarganegaraan</option>
                				<option value="WNI">WNI</option>
                				<option value="WNA">WNA</option>
                			</select>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Agama</th>
                		<td>
                			<select name="agama" class="form-control" required="">
                				<option value="">Pilih Agama</option>
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
                		<td><input type="text" name="hobi" class="form-control" placeholder="Hobi" required=""></td>
                	</tr>
                	<tr>
                		<th width="200px">Kata Sandi</th>
                		<td><input type="text" name="password" class="form-control" required="">Kata Sandi ini harap diingat, kata sandi ini digunakan untuk <b>Login Mahasiswa Baru</b></td>
                	</tr>
                	<tr>
                		<th width="200px">Upload Foto</th>
                		<td><input type="file" name="foto" class="form-control" required=""></td>
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
                		<td><input type="text" name="slta" class="form-control" placeholder="SMA/MA/SMK Asal" required=""></td>
                	</tr>
                	<tr>
                		<th width="200px">Jurusan</th>
                		<td><input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required=""></td>
                	</tr>
                	<tr>
                		<th width="200px">Tahun Lulus</th>
                		<td><input type="text" name="tahun_lulus" class="form-control" placeholder="yyyy" required=""></td>
                	</tr>
                	<tr>
                		<th width="200px">No Seri Ijazah/Tgl Ijazah</th>
                		<td>
                			<div class="row">
                				<div class="col-md-6"><input type="text" name="no_sttb" class="form-control" placeholder="No Seri Ijazah" >
                				*) Kosongkan Jika Tidak ada
                				</div>
								<div class="col-md-6"><input type="text" name="tgl_sttb" class="form-control tgl" placeholder="yyyy-mm-dd" ></div>
                			</div>
                		</td>
                	</tr>
                	<tr>
                		<th width="200px">Tempat Ijazah dikeluarkan</th>
                		<td><input type="text" name="tempat_sttb" class="form-control" placeholder="Tempat Ijazah dikeluarkan"></td>
                	</tr>
                    <tr>
                        <th width="200px">Upload File Lampiran</th>
                        <td>
                            <p>
                                <div style="color: red">
                                    *) File yang di upload berupda : ijazah, sertifikat, SKHU, dll. <br>
                                    *) File di arsipkan dengan format .rar atau .zip <br>
                                    *) Ukuran file maksimal 2 MB.
                                </div>
                            </p>
                            <input type="text" name="userfile" class="form-control" placeholder="FILE UPLOAD"></td>
                    </tr>

                	<tr>
                        <th width="200px">Mendapatkan Informasi Kampus</th>
                        <td><input type="text" name="informasi_kampus" class="form-control" placeholder="Masukkan Nama/no telp nya, jika dari orang lain atau pegawai kampus"></td>
                    </tr>
                    <tr>
                        <th width="200px">Pilihan Studi</th>
                        <td>
                            <select name="pilihan_studi" class="form-control" required="">
                                <option value="">Pilihan Program Studi</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Magister Manajemen">Magister Manajemen</option>
                            </select>
                        </td>
                    </tr>
                    <!-- <tr>
                        <th width="200px">Pembayaran Pendaftaran</th>
                        <td>
                            <select name="metode_pembayaran" class="form-control" required="">
                                <option value="">Pilihan Pembayaran</option>
                                <option value="Tranfer Bank">Transfer Via Bank</option>
                                <option value="Bayar dikampus">Bayar dikampus</option>
                            </select>
                        </td>
                    </tr> -->
                	<tr>
                		<th width="200px"></th>
                		<td>
                			<button type="submit" class="btn btn-primary">Daftar</button>
                			<button type="reset" class="btn btn-danger">Batal</button>
                		</td>
                	</tr>
                </table>
            </form>
            </div>