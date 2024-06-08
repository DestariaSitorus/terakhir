<?php
session_start();
if (isset($_SESSION['username'])){
	header("location: index.php");
	exit;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stok.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
   
<header>
    <div class="logo">Kasir System</div>
    <nav>
        <ul>
            <li><a href="stokbarang.php">Stok Barang</a></li>
            <li><a href="penjualan.php">Penjualan Barang</a></li>
            <li><a href="databarang.php">Pendataan Barang</a></li>
<button onclick="logout()">Logout</button>

<script>
    function logout() {
        window.location.href = "index.php";
    }
</script>
  </ul>
  </nav>
  </header>


<div class="container">
  <?php 
  include "koneksi.php";
   if (isset($_GET["msg"])){
    $msg = $_GET["msg"];
    echo '<div class="alert alret-warning alert-dismissible fade show" role="alert">
    ' .$msg.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><button>
    </div>';
   }
?>

<a href="tambahbarang.php" type="button" class="add-button"> Add New</a><br><br>
        <div class="table-container">
            <center>
            <h3 class="mb-4">Stok Barang</h3>
            <center>
                    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th scope="col">Id Struk</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Stok Barang</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM `stok`";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
                <td><?php echo $row["IdStruk"]?></td>
                <td><?php echo $row["namabarang"]?></td>
                <td><?php echo $row["kodebarang"]?></td>
                <td><?php echo $row["stokbarang"]?></td>
                <td>
                  <a href= "edit.php?IdStruk=<?php echo $row["IdStruk"]?>" class="add-button">Edit</a>
                  <a href= "delete.php?IdStruk=<?php echo $row["IdStruk"]?>" class="add-button">Delete</a>
            </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
          </body>
    </html>