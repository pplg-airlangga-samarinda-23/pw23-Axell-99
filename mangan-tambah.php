<?php 
require 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $tanggal= $_POST['tanggal'];
    $nama_makanan= $_POST['nama_makanan'];
    $kapan_makan= $_POST['kapan_makan'];
    $makan_jam_berapa= $_POST['makan_jam_berapa'];
    
    $sql = "INSERT INTO mangan (tanggal,nama_makanan,kapan_makan,makan_jam_berapa) VALUES (?,?,?,?)";
    $row = $koneksi->execute_query($sql,[$tanggal,$nama_makanan,$kapan_makan,$makan_jam_berapa]);

    if($row){
        header("location:mangan.php");  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <style>
        table,th,tr,td{border: 1px solid black;}
    </style>
    </head>
<body>
    <form action="" method="post">
        <div class = "form-item">
            <label>Tanggal</label><br>
            <input type="date"name="tanggal" id="tanggal"><br>
            <label>Nama Makanan</label><br>
            <input type="text"name="nama_makanan" id="nama_makanan"><br>
            <label>Kapan Makan</label><br>
            <input type="text"name="kapan_makan" id="kapan_makan"><br>
            <label>Makan Jam Berapa</label><br>
            <input type="number"name="makan_jam_berapa" id="makan_jam_berapa"><br>
            <button id="login-btn">Submit</button>
            <button><a href="mangan.php">Back</a></button>
        </div>
    </form>
</body>
</html>