<?php
include "koneksi.php";

$IdStruks = $_GET['IdStruk'];

if (isset($_POST["submit"])){
    $namabarang = $_POST['namabarang'];
    $kodebarang = $_POST['kodebarang'];
    $stokbarang = $_POST['stokbarang'];

    $sql = "UPDATE stok
            SET `namabarang`='$namabarang',`kodebarang`='$kodebarang',`stokbarang`='$stokbarang'
            WHERE IdStruk = '$IdStruks'";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>
        alert('Data Berhadil Dihapus');
        window.location.href= 'stokbarang.php';
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
    $sql = "SELECT * FROM stok WHERE IdStruk ='$IdStruks'";
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
            <input type="text" name="stokbarang" value="<?php echo $row['stokbarang']?>"><br><br>

            <div>
                <button type="submit" name="submit">Update</button><br><br>
                <a href ="stokbarang.php">Cancel</a>
        </div>
        </div>
        </form>
</div>
</div>
</body>
</html>



</body>
</html>