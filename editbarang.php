<?php
include "koneksi.php";

$IdBarang = $_GET['IdBarang'];

if (isset($_POST["submit"])){
    $namabarang = $_POST['namabarang'];
    $kodebarang = $_POST['kodebarang'];
    $jumlahbarang = $_POST['jumlahbarang'];

    $sql = "UPDATE databarang
            SET `namabarang`='$namabarang',`kodebarang`='$kodebarang',`jumlahbarang`='$jumlahbarang'
            WHERE IdBarang = '$IdBarang'";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>
        alert('Data Berhadil Dihapus');
        window.location.href= 'databarang.php';
        </script>";
        exit();
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
    <?php
    $sql = "SELECT * FROM databarang WHERE IdBarang ='$IdBarang'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
      <form action="" method="post">
        <h3>Edit Item</h3>
        <div class="col">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="namabarang" value="<?php echo $row['namabarang']?>"><br><br>
            <label class="form-label">Kode Barang</label>
            <input type="text" name="kodebarang" value="<?php echo $row['kodebarang']?>"><br><br>
            <label class="form-label">Nama Barang</label>
            <input type="text" name="jumlahbarang" value="<?php echo $row['jumlahbarang']?>"><br><br>

            <div>
                <button type="submit" name="submit">Update</button><br><br>
                <a href ="databarang.php">Cancel</a>
        </div>
        </div>
        </form>
</div>
</div>
</body>
</html>



</body>
</html>