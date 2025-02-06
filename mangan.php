<?php 
require 'koneksi.php';

$sql = "SELECT * FROM mangan";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!-- Menampilkan data dari database ke tabel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mangan</title>
</head>
<body>
    <h1>Halaman Mangan</h1>
    <a href="mangan-tambah.php">Tambah Data</a>
        <thead>
            <table>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Makanan</th>
            <th>Kapan Makan</th>
            <th>Makan Jam Berapa</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no=0; foreach($rows as $row) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?php echo $row["tanggal"]; ?></td>
                    <td><?php echo $row["nama_makanan"]; ?></td>
                    <td><?php echo $row["kapan_makan"]; ?></td>
                    <td><?php echo $row["makan_jam_berapa"]; ?></td>

                    <td>
                        <a href="mangan-edit.php?id=<?=$row['id']?>">Edit</a>
                        <a href="mangan-hapus.php?id=<?=$row['id']?>">Hapus</a>
                    </td>
                </tr>

                <?php endforeach; ?>
        </tbody>   
        </table>
</body>
</html>