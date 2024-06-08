<?php
include "koneksi.php";
$IdBarang = $_GET["IdBarang"];
$sql = "DELETE FROM databarang WHERE IdBarang ='$IdBarang'";
$result = mysqli_query($conn,$sql);

if ($result) {
    echo "<script>
    alert('Data Berhasil Didelete');
    window.location.href ='databarang.php';
    </script>";
}else {
    echo "Failed:".mysqli_error($conn);
}
