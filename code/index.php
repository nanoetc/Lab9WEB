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
    <title>home</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    <header><h1 >welcome</h1></header>
    <div class="content">
      <h2>Ini Halaman Home</h2>
<p>Ini adalah bagian content dari halaman.</p>
</div>
  </body>
</html>
<?php
include("footer.php"); ?>
