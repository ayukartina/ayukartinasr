<h3>Edit Data Mahasiswa</h3>
<hr>
<?php
include "koneksi.php";
if(isset($_GET['nim'])){
	$sqlEdit = mysqli_query($konek, "SELECT * FROM mhs WHERE nim='$_GET[nim]'");
	$e=mysqli_fetch_array($sqlEdit);
}
?>
<form method="post" action="">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="txtNim" value="<?php echo $e['nim']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="txtNama" value="<?php echo $e['nama_mhs']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="txtKelamin">
					<option value="<?php echo $e['jk']; ?>"><?php echo $e['jk']; ?>"</option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="txtAlamat" size="60" value="<?php echo $e['alamat']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		</tr>
	</table>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$update = mysqli_query($konek, "UPDATE mhs SET nama_mhs='$_POST[txtNama]',
		                                          jk='$_POST[txtKelamin]',
		                                          alamat='$_POST[txtAlamat]'
		                                    WHERE nim='$_POST[txtNim]'");

	if($update){
		header('location:data_mhs.php');
	}else{
		echo "Gagal Mengupdate data...";
	}

}
?>