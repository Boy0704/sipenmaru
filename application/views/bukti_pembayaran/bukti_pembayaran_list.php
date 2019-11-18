<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php //echo anchor(site_url('bukti_pembayaran/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('bukti_pembayaran/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('bukti_pembayaran'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>No Pendaftaran</th>
        <th>Nama Lengkap</th>
        <th>Nama Pengirim</th>
        <th>Bukti Pembayaran</th>
        <th>Action</th>
            </tr><?php
            foreach ($bukti_pembayaran_data as $bukti_pembayaran)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $bukti_pembayaran->no_pendaftaran ?></td>
            <td><?php echo $bukti_pembayaran->nama_lengkap ?></td>
            <td><?php echo $bukti_pembayaran->nama_pengirim ?></td>
            <td><a href="files/bukti/<?php echo $bukti_pembayaran->bukti_pembayaran ?>" target="_blank"><img src="files/bukti/<?php echo $bukti_pembayaran->bukti_pembayaran ?>" style="width: 50px; height: 50px;"></a></td>
            <td style="text-align:center" width="200px">

                <?php 
                if ($bukti_pembayaran->status == '0') {
                    ?>
                    <a href="app/ubah_status/<?php echo $bukti_pembayaran->id_pembayaran ?>">Konfirmasi</a>
                    <?php
                } else {
                    ?>
                    <label class="label label-info">Lunas</label>
                    <?php
                }
                echo ' | '; 
                echo anchor(site_url('bukti_pembayaran/update/'.$bukti_pembayaran->id_pembayaran),'Update'); 
                echo ' | '; 
                echo anchor(site_url('bukti_pembayaran/delete/'.$bukti_pembayaran->id_pembayaran),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>