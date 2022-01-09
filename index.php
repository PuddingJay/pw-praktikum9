<?php
//memanggil file functions.php
require 'functions.php';

//memanggil function query pengambilan data pada table mahasiswa
//lalu ditampung kedalam variable mahasiswa
$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Praktikum 9 | Windu</title>
</head>

<body>
    <center>
        <h1>Daftar Karyawan</h1>

        <a class="tambah" href="tambah.php">
            <h2>Tambah Data</h2>
        </a>
        <br>
        <table cellpadding="10" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php foreach ($karyawan as $item) : ?>
                <tr>
                    <td><?= $item["id"] ?></td>
                    <td><?= $item["name"] ?></td>
                    <td><?= $item["email"] ?></td>
                    <td><?= $item["address"] ?></td>
                    <td><?= $item["gender"] ?></td>
                    <td><?= $item["position"] ?></td>
                    <td><?= $item["status"] ?></td>
                    <td>
                        <a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('Hapus nih?')">
                            <button class="hapus">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </center>

</body>

</html>