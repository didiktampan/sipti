<?php 
include '../../koneksi.php';
$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email']; 
$no_hp = $_POST['no_hp']; 
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$gambar = $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../img/".$_FILES['gambar']['name']);	

$query = "UPDATE user SET nama_lengkap = '$nama_lengkap', email = '$email', no_hp = '$no_hp', username = '$username', password = '$password', level = '$level', gambar = '$gambar' WHERE id_user = $id_user";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../profil.php?id_user=$id_user'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../profil.php?id_user=$id_user'</script>";
}
?>