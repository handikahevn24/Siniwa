<?php
include "../conn.php";
$kode_pelajaran = $_POST['kode_pelajaran'];
$nama_pelajaran = $_POST['nama_pelajaran'];
$kkm            = $_POST['kkm'];
$keterangan     = $_POST['keterangan'];

$query = mysql_query("INSERT INTO pelajaran (kode_pelajaran, nama_pelajaran, kkm, keterangan) VALUES 
                      ('$kode_pelajaran', '$nama_pelajaran', '$kkm', '$keterangan')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'pelajaran.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dimasukan!'); window.location = 'pelajaran.php'</script>";	
}
?>