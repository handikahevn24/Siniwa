<?php
include "../conn.php";
$kode_kelas   = $_POST['kelas'];
$kode_siswa   = $_POST['kode_siswa'];
$jurusan      = $_POST['jurusan'];

$sqlCek="SELECT * FROM kelas_siswa WHERE kode_kelas='$kode_kelas' AND kode_siswa='$kode_siswa'";
	$qryCek=mysql_query($sqlCek) or die ("Eror Query".mysql_error()); 
	if(mysql_num_rows($qryCek)>=1){
		$pesanError[] = "Maaf, Kode Kelas<b> $txtNamaKls </b> dengan <b>Kode Siswa</b> yang sama sudah dibuat";
	} else {
    
$query = mysql_query("INSERT INTO kelas_siswa (kode_kelas, kode_siswa, jurusan) VALUES ('$kode_kelas', '$kode_siswa', '$jurusan')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'kelas-siswa.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dimasukan!'); window.location = 'kelas-siswa.php'</script>";	
}
}
?>