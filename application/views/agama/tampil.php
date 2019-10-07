<?php echo anchor('agama/input','Tambah baru');?>
<table border="1">
	<tr>
		<td>No</td> 
		<td>Nama Agama</td> 
		<td>Aksi</td>
	</tr>
	<?php foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo $value ->id_agama?></td> 
		<td> <?php echo $value->nama_agama?></td> 
		<td><?php echo anchor('agama/edit/'.$value->id_agama, 'Edit'); ?> <?php echo anchor('agama/delete/'.$value->id_agama, 'Hapus'); ?> </td>
	</tr>
	<?php } ?>
</table>
