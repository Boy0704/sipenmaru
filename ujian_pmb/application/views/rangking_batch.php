<table class="table table-bordered rangking" style="margin-bottom: 10px">
            <thead>
            <tr>
                <th>No</th>
				<th>ID USER</th>
				<th>Nama User</th>
				<th>Total Nilai</th>
				<th>Nilai Lulus</th>
				<th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $start = 0;
            $batch_id = $this->uri->segment(3);
            $this->db->where('akses', 'siswa');
            $siswa_data= $this->db->get('user')->result();
            foreach ($siswa_data as $siswa)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $siswa->username ?></td>
			<td><?php echo $siswa->nama_lengkap ?></td>
			<td><?php echo total_nilai_perbatch($siswa->user_id,$batch_id) ?></td>
			<td><?php echo target_lulus_perbatch($batch_id) ?></td>
			<td><?php 
			if (total_nilai_perbatch($siswa->user_id,$batch_id) >= target_lulus_perbatch($batch_id)) {
			 ?>
			<label class="label label-success">LULUS</label>	
		<?php }else{ ?>
			<label class="label label-danger">TIDAK LULUS</label>	
		<?php } ?>

			 </td>
			
		</tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        