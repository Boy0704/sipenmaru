<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
        <div class="form-group">
            <label for="isi_konten">Isi Konten <?php echo form_error('isi_konten') ?></label>
            <textarea class="form-control" rows="3" name="isi_konten" id="isi_konten" placeholder="Isi Konten"><?php echo $isi_konten; ?></textarea>
        </div>
        <input type="hidden" name="id_konten" value="<?php echo $id_konten; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('konten') ?>" class="btn btn-default">Cancel</a>
    </form>
    <script type="text/javascript">
        CKEDITOR.replace( 'isi_konten' );
    </script>