<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="testing2.png">
    <img src="testing2.png" alt="logo" width="70">
    <title>LIST DATA MAHASISWA</title>
    <link rel="stylesheet" href="index.css">
    <?php
    require('functions.php');
    ?>
</head>

<body>
    <center>
        <div class="menu">
            <h2>Data Mahasiswa</h2>
    </center>
</body>

<hr>

<ul>

    <a href="tambah.php">Tambah</a>
    <a href="about.php">About me</a>

</ul>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Jenis kelamin</th>
        <th>Alamat</th>
        <th>Edit</th>
    </tr>

    <?php
    // Ambil data dari database
    $data = query("SELECT * FROM mhs"); // Pastikan fungsi query() sudah ada di file 'functions.php'
    ?>

    <?php $no = 1; ?>
    <?php foreach ($data as $dt) : ?>
        <tr>
            <td><?= $dt['id']; ?></td>
            <td><?= $dt['nim']; ?></td>
            <td><?= $dt['nama']; ?></td>
            <td><?= $dt['prodi']; ?></td>
            <td><?= $dt['jk']; ?></td>
            <td><?= $dt['alamat']; ?></td>
            <td>
                <a href="edit.php?nim=<?= $dt['nim']; ?>" class="btn btn-success" onclick="return confirm('Update data..?')">Edit</a>
                <a href="hapus.php?nim=<?= $dt['nim']; ?>" class="btn btn-danger" onclick="return confirm('apakah kamu yakin.?')">Hapus</a>


        </tr>

    <?php endforeach; ?>
</table>
</div>
</div>
</body>

</html>