<div class="panel panel-default">
            <div class="panel-heading">Bukti Pembayaran</div>
            <form action="index.php/app/simpan_formbukti" method="post" enctype="multipart/form-data">
                <table class="table table-striped table-hover" width="100%">
                	<tr>
                		<th width="200px">No Pendaftaran</th>
                		<td><input type="text" name="no_pendaftaran" value="<?php echo $this->session->userdata('username') ?>" class="form-control" placeholder="No Pendaftaran" readonly></td>
                	</tr>
                    <tr>
                        <?php 
                        $no_p = $this->session->userdata('username');
                        $d = $this->db->query("SELECT nama_lengkap FROM pendaftaran where no_pendaftaran='$no_p'")->row();
                         ?>
                        <th width="200px">Nama Lengkap</th>
                        <td><input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?php echo $d->nama_lengkap ?>" required="" readonly></td>
                    </tr>
                    <tr>
                        <th width="200px">Nama Pengirim</th>
                        <td><input type="text" name="nama_pengirim" class="form-control" placeholder="Nama Pengirim" value="" ></td>
                    </tr>
                    <tr>
                        <th width="200px">Upload Bukti Pembayaran</th>
                        <td><input type="file" name="bukti_pembayaran" class="form-control" required=""></td>
                    </tr>

                	
                	<tr>
                		<th width="200px"></th>
                		<td>
                			<button type="submit" class="btn btn-primary">Kirim</button>
                			<button type="reset" class="btn btn-danger">Batal</button>
                		</td>
                	</tr>
                </table>
            </form>
            </div>