<?php 
include '../../koneksi.php';
$id_wisata = $_POST['id_wisata'];
$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap']; 
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$nama_wisata = $_POST['nama_wisata'];
$harga = $_POST['harga'];
$jumlah_pesan = $_POST['jumlah_pesan'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$total_harga = $_POST['total_harga'];
$status = $_POST['status'];
$kode = $_POST['kode'];
$kode2 = 6462;
    //echo $query
if($kode == $kode2) {
	$query = "INSERT INTO transaksi (id_wisata, nama_lengkap, email, no_hp, nama_wisata, harga, jumlah_pesan, tanggal_pesan, total_harga, status, id_user) VALUES ('$id_wisata','$nama_lengkap','$email', '$no_hp', '$nama_wisata', '$harga', '$jumlah_pesan', '$tanggal_pesan', '$total_harga', '$status', '$id_user')";
	$exe = mysqli_query($conn,$query);
	if ($exe) {
		echo "<script>alert('Tambah data Berhasil');window.location.href='../profil.php?id_user=$id_user'</script>";
	}else{
		echo "<script>alert('Tambah Data Gagal');window.location.href='../kodeotp.php?id_wisata=$id_wisata&id_user=$id_user'</script>";
	}
}else {
	echo "<script>alert('Kode yang anda masukkan salah');window.location.href='../kodeotp.php?id_wisata=$id_wisata&id_user=$id_user'</script>";
}
?>
