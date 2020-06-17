<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php //echo anchor(site_url('pendaftaran/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pendaftaran/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pendaftaran'); ?>" class="btn btn-default">Reset</a>
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
		<th>Status Bayar</th>
		
		<th>Action</th>
            </tr><?php
            foreach ($pendaftaran_data as $pendaftaran)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pendaftaran->no_pendaftaran ?></td>
            <td><?php echo $pendaftaran->nama_lengkap ?></td>
			<td><?php echo ($pendaftaran->status_bayar == 'paid') ? '<span class="label label-success">Lunas</span>' : '<span class="label label-danger">Belum Lunas</span>' ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pendaftaran/read/'.$pendaftaran->id_pendaftaran),'Detail'); 
				echo ' | '; 
				echo anchor(site_url('pendaftaran/update/'.$pendaftaran->id_pendaftaran),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pendaftaran/delete/'.$pendaftaran->id_pendaftaran.'/'.$pendaftaran->no_pendaftaran),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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