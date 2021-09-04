<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//query data
mysqli_query("$conn", "")

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Pegawai </h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>email</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                 <a href="">ubah</a> |
                 <a href="">hapus</a>
            </td>
            <td><img src="img.jpg" alt=""></td>
            <td>4565656464</td>
            <td>Nur Ali Ikhsan</td>
            <td>nur.aliikhsan@indonesiapower.co.id</td>
            <td>operator</td>
        </tr>



    </table>


</body>
</html>