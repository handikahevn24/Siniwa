<?php
include "../conn.php";

$id             = $_POST['id'];
$semester       = $_POST['semester'];
$kode_pelajaran = $_POST['kode_pelajaran'];
$kode_guru      = $_POST['kode_guru'];
$kode_kelas     = $_POST['kode_kelas'];
$kode_siswa     = $_POST['kode_siswa'];
$nilai_tugas1   = $_POST['nilai_tugas1'];
$nilai_tugas2   = $_POST['nilai_tugas2'];
$nilai_tugas3   = $_POST['nilai_tugas3'];
$nilai_uts      = $_POST['nilai_uts'];
$nilai_uas      = $_POST['nilai_uas'];
$keterangan     = $_POST['keterangan'];

$query = mysql_query("UPDATE nilai SET semester='$semester', kode_pelajaran='$kode_pelajaran', kode_guru='$kode_guru', kode_kelas='$kode_kelas', kode_siswa='$kode_siswa', nilai_tugas1='$nilai_tugas1', nilai_tugas2='$nilai_tugas2', nilai_tugas3='$nilai_tugas3', nilai_uts='$nilai_uts', nilai_uas='$nilai_uas', keterangan='$keterangan' WHERE id='$id'")or die(mysql_error());
if ($query){
echo "<script>alert('Data Berhasil di edit!'); window.location = 'nilai.php'</script>";	
} else {
	echo "<script>alert('Data Gagal di edit!'); window.location = 'nilai.php'</script>";	
}

?>