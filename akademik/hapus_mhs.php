<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM mhs WHERE  nim='$_GET[nim]'");

if($hapus){
	header('location:data_mhs.php');
}else{
	echo "Gagal Menghapus data...";
}
?>