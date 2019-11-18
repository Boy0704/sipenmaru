<table class="table table-striped table-hover">
	<tr>
		<th>Judul</th>
		<th>Download</th>
	</tr>
	<?php 
		$d = $this->db->get('brosur');
		foreach ($d->result() as $rw) {
		 ?>
	<tr>
		<td><?php echo $rw->judul ?></td>
		<td><a href="files/brosur/<?php echo $rw->brosur ?>"><i class="glyphicon glyphicon-download-alt"></i></a></td>
	</tr>
	<?php } ?>
</table>