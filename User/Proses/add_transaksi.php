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
$tanggal_pesan = date("Y-m-d H:i:s");
$total_harga = $_POST['total_harga'];
$status = 1;

// include '../vendor/autoload.php';
// $basic  = new \Nexmo\Client\Credentials\Basic('626ad0b3', 'hXDm25zRtffqb3vD');
// $client = new \Nexmo\Client($basic);
// try {
//     $message = $client->message()->send([
//         'to' => $no_hp,
//         'from' => 'Peonpegu',
//         'text' => 'Aktivasi pembelian di Peonpegu adalah 6462'
//     ]);
//     $response = $message->getResponseData();
//     if($response['messages'][0]['status'] == 0) {
//         echo "The message was sent successfully\n";
//     } else {
//         echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
//     }
// } catch (Exception $e) {
//     echo "The message was not sent. Error: " . $e->getMessage() . "\n";
// }
$query = "INSERT INTO sementara2 (id_user, id_wisata, nama_lengkap, email, no_hp, nama_wisata, harga, jumlah_pesan, tanggal_pesan, total_harga, status) VALUES ('$id_user', '$id_wisata','$nama_lengkap','$email', '$no_hp', '$nama_wisata', '$harga', '$jumlah_pesan', '$tanggal_pesan', '$total_harga', '$status')";
    //echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
    echo "<script type='text/javascript'>window.location.href='../kodeotp.php?id_wisata=$id_wisata&id_user=$id_user'</script>";
}else{
    echo "<script type='text/javascript'>window.location.href='../detail.php?id_wisata=$id_wisata&id_user=$id_user'</script>";
}
?>