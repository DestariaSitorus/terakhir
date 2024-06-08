<?php
$koneksi = mysqli_connect("localhost", "root", "", "datadesta");

if (isset($_POST['addnewbarang'])) {
    $namabarang = $_POST['namabarang'];
    $kodebarang = $_POST['kodebarang'];
    $kodebarang = $_POST['jumlahbarang'];

    $addtotable = mysqli_query($conn,"insert to stokbarang(namabarang,kodebarang,jumlahbarang) values ('$namabarang',$kodebarang','$jumlahbarang')");
    if($addtotable){
    header('location:.php');
    }else{
        echo'gagal';
    } 
    }

