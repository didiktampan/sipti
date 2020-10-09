<!DOCTYPE html>
<html>
<head>
  <title>Laporan</title>
</head>
<body>
  <center><h1>Laporan Data Perpustakaan</h1></center>
  <?php
  include "../../../koneksi.php";
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Peminjaman.xls");
  ?>
  <table border="1" align="center">
    <thead>
      <tr role="row">
        <th>No</th>
        <th>Judul Buku</th>
        <th>Peminjam</th>
        <th>Jumlah</th>
        <th>Tanggal Pinjam</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      $query="SELECT t.id, b.judul, pe.nama, t.jumlah_buku, t.tgl_pinjam, t.tgl_kembali, t.status FROM transaksi t INNER JOIN buku b on t.id_buku=b.id_buku INNER JOIN peminjam pe on t.id_peminjam=pe.id_peminjam where t.status = 1 ;";
      $exe = mysqli_query($conn,$query);
      while ($row = mysqli_fetch_array($exe)) {

       ?>
       <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['judul']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['jumlah_buku']; ?></td>
        <td><?php echo $row['tgl_pinjam']; ?></td>
        <td>
          <?php 
          if ($row['status'] == 1) {
            echo "<span>Pinjam</span>";
          }else{
            echo "<span>Kembali</span>";
          }
          ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>