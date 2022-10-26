<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
    $NIK = $_POST ['NIK'];
    $jenis_kendaraan = $_POST ['jenis_kendaraan'];

    $sql = "INSERT INTO muna_26okt(NIK, jenis_kendaraan) VALUES ('$NIK', '$jenis_kendaraan')";
    $query = mysqli_query($koneksi, $sql);

    }else{
        ("akses dilarang");
    }
?>