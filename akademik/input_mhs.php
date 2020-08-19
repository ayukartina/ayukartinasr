<h3>Form Input Data Mahasiswa</h3>
<hr>
<form method="post" action="">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="txtNim"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="txtNama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="txtKelamin">
					<option value="">- Pilih -</option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="txtAlamat" size="60"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		</tr>
	</table>
</form>

<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO mhs (nim,nama_mhs,jk,alamat)
		VALUES('$_POST[txtNim]','$_POST[txtNama]','$_POST[txtKelamin]','$_POST[txtAlamat]')");

	if($simpan){
		header('location:data_mhs.php');
	}else{
		echo "Gagal Menyimpan data...";
	}

}
?>