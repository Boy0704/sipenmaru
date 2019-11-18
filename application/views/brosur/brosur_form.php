<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Upload Brosur <?php echo form_error('brosur') ?></label>
            <input type="file" class="form-control" name="brosur" id="brosur"  />
            <?php 
            if ($brosur !== '') {
                ?>
                <div>
                    *) Gambar Sebelumnya <br>
                    <img src="files/brosur/<?php echo $brosur; ?>" style="width: 100px; height: 100px;">
                </div>
                <?php
            } else {
                #kosngs
            }
            ?>
        </div>
        <input type="hidden" name="id_brosur" value="<?php echo $id_brosur; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('brosur') ?>" class="btn btn-default">Cancel</a>
    </form>