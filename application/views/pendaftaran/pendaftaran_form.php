<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">No Pendaftaran <?php echo form_error('no_pendaftaran') ?></label>
            <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="No Pendaftaran" value="<?php echo $no_pendaftaran; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama Lengkap <?php echo form_error('nama_lengkap') ?></label>
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempat') ?></label>
            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat" value="<?php echo $tempat; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
        <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">RT <?php echo form_error('rt') ?></label>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Rt" value="<?php echo $rt; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">RW <?php echo form_error('rw') ?></label>
            <input type="text" class="form-control" name="rw" id="rw" placeholder="Rw" value="<?php echo $rw; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">No Rumah <?php echo form_error('no_rumah') ?></label>
            <input type="text" class="form-control" name="no_rumah" id="no_rumah" placeholder="No Rumah" value="<?php echo $no_rumah; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kode Pos <?php echo form_error('kode_pos') ?></label>
            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
        <div class="form-group">
            <label for="tempat_tinggal">Tempat Tinggal <?php echo form_error('tempat_tinggal') ?></label>
            <textarea class="form-control" rows="3" name="tempat_tinggal" id="tempat_tinggal" placeholder="Tempat Tinggal"><?php echo $tempat_tinggal; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Status Kawin <?php echo form_error('status_kawin') ?></label>
            <input type="text" class="form-control" name="status_kawin" id="status_kawin" placeholder="Status Kawin" value="<?php echo $status_kawin; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Jenis Pekerjaan <?php echo form_error('jenis_pekerjaan') ?></label>
            <input type="text" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" placeholder="Jenis Pekerjaan" value="<?php echo $jenis_pekerjaan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kewarganegaraan <?php echo form_error('kewarganegaraan') ?></label>
            <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan" value="<?php echo $kewarganegaraan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Agama <?php echo form_error('agama') ?></label>
            <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
        </div>
        <div class="form-group">
            <label for="hobi">Hobi <?php echo form_error('hobi') ?></label>
            <textarea class="form-control" rows="3" name="hobi" id="hobi" placeholder="Hobi"><?php echo $hobi; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Slta <?php echo form_error('slta') ?></label>
            <input type="text" class="form-control" name="slta" id="slta" placeholder="Slta" value="<?php echo $slta; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Jurusan <?php echo form_error('jurusan') ?></label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="<?php echo $jurusan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">No Ijazah<?php echo form_error('no_sttb') ?></label>
            <input type="text" class="form-control" name="no_sttb" id="no_sttb" placeholder="No Sttb" value="<?php echo $no_sttb; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Tanggal Ijazah <?php echo form_error('tgl_sttb') ?></label>
            <input type="text" class="form-control" name="tgl_sttb" id="tgl_sttb" placeholder="Tgl Sttb" value="<?php echo $tgl_sttb; ?>" />
        </div>
        <div class="form-group">
            <label for="tempat_sttb">Tempat Ijazah Dikeluarkan <?php echo form_error('tempat_sttb') ?></label>
            <textarea class="form-control" rows="3" name="tempat_sttb" id="tempat_sttb" placeholder="Tempat Sttb"><?php echo $tempat_sttb; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Pilihan Studi <?php echo form_error('pilihan_studi') ?></label>
            <input type="text" class="form-control" name="pilihan_studi" id="pilihan_studi" placeholder="Pilihan Studi" value="<?php echo $pilihan_studi; ?>" />
        </div>
        <!-- <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div> -->
        <div class="form-group">
            <label for="date">Tgl Buat <?php echo form_error('tgl_buat') ?></label>
            <input type="text" class="form-control" name="tgl_buat" id="tgl_buat" placeholder="Tgl Buat" value="<?php echo $tgl_buat; ?>" />
        </div>
        <div class="form-group">
            <label for="time">Jam Buat <?php echo form_error('jam_buat') ?></label>
            <input type="text" class="form-control" name="jam_buat" id="jam_buat" placeholder="Jam Buat" value="<?php echo $jam_buat; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Tahun Lulus <?php echo form_error('tahun_lulus') ?></label>
            <input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder="Tahun Lulus" value="<?php echo $tahun_lulus; ?>" />
        </div>
        <input type="hidden" name="id_pendaftaran" value="<?php echo $id_pendaftaran; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('pendaftaran') ?>" class="btn btn-default">Cancel</a>
    </form>