<?php
require 'functions.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {
    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        echo '<script>
        alert("Data Berhasil Disimpan");
        document.location.href = "index.php";
        </script>';
    } else {
        echo '<script>
        alert("Data Gagal Disimpan");
        document.location.href = "index.php";
        </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data Karyawan</title>
</head>

<body>

    <h1>Tambah Data</h1>
    <div class="containerFormTambah">
        <div class="formTambah">
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="name">Name : </label><br>
                        <input type="text" name="name">
                    </li><br>
                    <li>
                        <label for="email">Email : </label><br>
                        <input type="text" name="email"><br>
                    </li><br>
                    <li>
                        <label for="address">Address : </label><br>
                        <input type="text" name="address"><br>
                    </li><br>
                    <li>
                        <select name="gender">
                            <option selected>Male</option>
                            <option>Female</option>
                        </select><br>
                    </li><br>
                    <li>
                        <label for="position">Position : </label><br>
                        <input type="text" name="position">
                    </li><br>
                    <li>
                        <select name="status">
                            <option selected>Fulltime</option>
                            <option>Parttime</option>
                        </select>
                    </li><br>
                    <button class="cancel" type="button" name="cancel" value="return" onclick="location.href='index.php'">Cancel</button>
                    <button class="tambahData" type="submit" name="submit">Tambah Data</button>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>