<?php
include "../../../koneksi.php";

$jenis_buku = $_POST['kat'];
$query = "SELECT DISTINCT jenis_buku FROM buku WHERE id_kategori='$jenis_buku'";
$exe=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($exe)){

	?>
	<option value="<?php echo $row["jenis_buku"] ?>"><?php echo $row["jenis_buku"] ?></option><br>

	<?php
}
?>