<?php
require "koneksi.php";

if($_SERVER["REQUEST_METHOD"] === "GET"){
    $id = $_GET['id'];
    $sql = "SELECT * FROM mangan WHERE id=?";
    $row= $koneksi->execute_query($sql, [$id])->fetch_assoc();
}elseif ($_SERVER["REQUEST_METHOD"] === "POST"){
    $tanggal = $_POST["tanggal"];
    $nama_makanan = $_POST["nama_makanan"];
    $kapan_makan = $_POST["kapan_makan"];
    $makan_jam_berapa = $_POST["makan_jam_berapa"];
    $id = $_GET["id"];

    $sql = "UPDATE mangan SET tanggal=?, nama_makanan=?, kapan_makan=?, makan_jam_berapa=? WHERE id=?";
    $row = $koneksi ->execute_query($sql, [$tanggal, $nama_makanan, $kapan_makan, $makan_jam_berapa, $id]);
    header("location:mangan.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit List Makanan</title>
</head>
<body>
    <h1 style ="font-size: large;">Edit Makanan</h1>
    <form action="" method="POST">  
    <div class = "form-item">
            <label>Tanggal</label><br>
            <input type="date"name="tanggal" id="tanggal"><br>
            <label>Nama Makanan</label><br>
            <input type="text"name="nama_makanan" id="nama_makanan"><br>
            <label>Kapan Makan</label><br>
            <input type="text"name="kapan_makan" id="kapan_makan"><br>
            <label>Makan Jam Berapa</label><br>
            <input type="number"name="makan_jam_berapa" id="makan_jam_berapa"><br>
        </div>
        <button type =submit>Submit</button>
    </form>
    <a href="mangan.php">Back</a>
</body>