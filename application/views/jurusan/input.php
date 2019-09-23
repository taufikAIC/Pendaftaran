<?php echo form_open('jurusan/simpan')?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>kode jurusan</td>
		<td><input type="text" name="kode_jurusan" id="kode_jurusan"></td>
	</tr>
	<tr>
		<td>Nama jurusan</td>
		<td><input type="text" name="nama_jurusan" id="nama_jurusan"></td>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="batal"></td>
	</tr>
</table>
<?php echo form_close()?>