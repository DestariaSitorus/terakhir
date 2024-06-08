<?php

include"koneksi.php";

if (isset($_POST["submit"])){
   $namabarang =$_POST['namabarang'];
   $kodebarang =$_POST['kodebarang'];
   $jumlahbarang =$_POST['jumlahbarang'];

   $sql = "INSERT INTO `databarang`(`namabarang`, `kodebarang`, `jumlahbarang`)
   VALUES ('$namabarang', '$kodebarang', '$jumlahbarang')";

   $result = mysqli_query($conn,$sql);

   if($result){
      echo "<script>
      alert('Data Berhasil Ditambahkan');
      window.location.href = 'databarang.php';
      </script>";
   } else {
      echo "Failed:" . mysqli_error($conn);
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
   <h3>Add New</h3>

   <form action="" method="post">
      <div class="col">
         <label>Nama Barang</label>
         <input type="text" class="form-control" name="namabarang" placeholder="Masukkan nama barang">
         <br>
         <br>
         <label>Kode Barang</label>
         <input type="text" class="form-control" name="kodebarang" placeholder="Masukkan kode barang">
         <br>
         <br>
         <label>Jumlah Barang</label>
         <input type="number" class="form-control" name="jumlahbarang" placeholder="Masukkan jumlah barang">
         <br>
         <br>
      <div>
         <center>
         <button type="submit" name="submit"> Save </button><br><br>
         <center>
         <a href="databarang.php">Cancel</a>
</div>
</div>
</form>
</body>

<script>
   function prevenBack() {window.history.forward();}
   setTimeout(prevenBack(),);
   window.onunload = function(){null};
</script>
</html>
   