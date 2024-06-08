<?php
include "koneksi.php";
$IdStruk = $_GET["IdStruk"];
$sql = "DELETE FROM stok WHERE IdStruk ='$IdStruk'";
$result = mysqli_query($conn,$sql);

if ($result) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href ='stokbarang.php';
    </script>";
}else {
    echo "Failed:".mysqli_error($conn);
}
