<!DOCTYPE html>
<html>
<head>
	<title>input</title>
</head>
<body>

<!-- ketika mengunakan form open maka ada beberapa comand yang harus kita rubah di line 
61.$autoload['libraries'] = array('form_validation'); //tambah form_validation di  kolom array
92.$autoload['helper'] = array('url'); //tambah url pada array
 -->
	<?php echo form_open('siswa/proses'); ?>
	<table>
		<tr>
			<td>
				Nama :
			</td>
			<td>
				<input type="text" name="nama" placeholder="masukin nama lu">
			</td>
		</tr>
		<tr>
			<td>
				Alamat :
			</td>
			<td>
				<textarea name ="alamat" placeholder ="Lu mau ngapain?"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				No Tlp :
			</td>
			<td>
				<input type="text" name="nohp" placeholder="ga butuh2 amat sih">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="" value="Simpan">
			</td>
			<td>
				<input type="reset" name="" value="Batal">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>

	
</body>
</html>