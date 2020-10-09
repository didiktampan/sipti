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


$query = "INSERT INTO barang (id_barang,id_jenis,merk,tahun_perolehan,asal,NIB,serial_number,ket,status,lokasi,pemegang) VALUES ('$id_barang','$id_jenis','$merk','$tahun_perolehan','$asal','$NIB','$serial_number','$ket','$status','$lokasi','$pemegang')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>