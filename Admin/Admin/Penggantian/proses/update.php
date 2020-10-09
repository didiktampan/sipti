<?php 
include '../../../koneksi.php';
$id_barang=$_POST['id_barang'];
$id_jenis=$_POST['id_jenis'];
$merk=$_POST['merk'];
$tahun_perolehan=$_POST['tahun_perolehan'];
$asal=$_POST['asal'];
$NIB=$_POST['NIB'];
$serial_number=$_POST['serial_number'];
$ket=$_POST['ket'];
$status=$_POST['status'];
$lokasi=$_POST['lokasi'];
$pemegang=$_POST['pemegang'];


$query = mysqli_query($conn, "update barang set id_jenis='$id_jenis', merk='$merk', tahun_perolehan='$tahun_perolehan', asal='$asal', NIB='$NIB', serial_number='$serial_number',ket='$ket', status='$status' , lokasi='$lokasi', pemegang='$pemegang' where id_barang='$id_barang'") or die(mysqli_error());
 
if ($query) {
    echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>