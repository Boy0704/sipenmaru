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
            <label for="varchar">Nama Pengirim <?php echo form_error('nama_pengirim') ?></label>
            <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" placeholder="Nama Pengirim" value="<?php echo $nama_pengirim; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Bukti Pembayaran <?php echo form_error('bukti_pembayaran') ?></label>
            <input type="text" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran" placeholder="Bukti Pembayaran" value="<?php echo $bukti_pembayaran; ?>" />
        </div>
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('bukti_pembayaran') ?>" class="btn btn-default">Cancel</a>
    </form>