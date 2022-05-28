<?php
include("koneksi.php");
include("header.php");



$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title style="center">Data Barang</title>
  </head>
  <body>
    <div class="container">
      <h1>data barang</h1>
      <div class="main">
        <table class="table table-success table-striped">
          <thead>
          <tr>
            <th>Gambar</th>
            <th>Nama barang</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stock</th>
            <th>Aksi</th>
          </tr>
        </thead>
          <?php if($result): ?>
          <?php while($row = mysqli_fetch_array($result)): ?>
          <tbody>
          <tr>
            <td><img src="gambar/<?= $row['gambar'];?>" alt="<?=$row['nama'];?>"></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['kategori'];?></td>
            <td><?= $row['harga_beli'];?></td>
            <td><?= $row['harga_jual'];?></td>
            <td><?= $row['stok'];?></td>
            <td><a href="ubah.php?id=<?=$row['id_barang'];?>">ubah </a><a href="hapus.php?id=<?=$row['id_barang'];?>" onclick="return confirm('yakin hapus data?');">Hapus</a></td>
          </tr>
        </tbody>

        <?php endwhile; else: ?>
        <tr>
            <td colspan="7">Belum ada data</td>
        </tr>
      <?php endif; ?>
    </table>
    <button type="button" class="btn btn-outline-primary"><a href="tambah.php" >Tambah Barang</a></button>
  </div>
</div>

  </body>
</html>
<?php
include("footer.php"); ?>
