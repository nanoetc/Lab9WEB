<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
  {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;
    if($file_gambar['error'] == 0)
    {
      $filename = str_replace(' ','_',$file_gambar['name']);
      $destination = dirname(__FILE__) .'/gambar/' . $filename;
      if(move_uploaded_file($file_gambar['tmp_name'], $destination))
      {
        $gambar = 'gambar/' .$filename;;
      }
    }
    $sql = 'INSERT INTO data_barang (nama,Kategori,harga_jual,harga_beli,stok,gambar)';
    $sql .= "VALUE ('{$nama}','{$kategori}','{$harga_jual}','{$harga_beli}','{$stok}','{$gambar}')";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
  }?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap.min.css">
      <title>Tambah Barang</title>
    </head>
    <body>
      <div class="container">
        <h1>MENU</h1>
        <fieldset>
          <legend>Tambah Barang</legend
          <p>
          <div class="main">
          <form method="post" action="tambah.php" enctype="multipart/form-data">
            <div class="input">
              <label>Nama Barang</label>
              <input type="text" name="nama" />
            </div>
          </p>
            <p>
            <div class="input">
                <label>kategori</label>
                <select name="kategori">
                  <option value="Komputer">Komputer</option>
                  <option value="Elektronik">Elektronik</option>
                  <option value="handphone">handphone</option>
                </select>
              </div>
            </p>
            <p>
              <div class="input">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" />
              </div>
            </p>
            <p>
              <div class="input">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" />
              </div>
            </p>
            <p>
              <div class="input">
                <label>Stok</label>
                <input type="text" name="stok" />
              </div>
            </p>
            <p>
              <div class="input">
                <label>File Gambar</label>
                <input type="text" name="file_gambar" />
              </div>
            </p>
              <div class="submit">
                <input type="submit" class="btn btn-outline-primary" name="submit" value="Simpan" />
              </div>
            </fieldset>
            </form>
          </div>
        </div>
    </body>
  </html>
