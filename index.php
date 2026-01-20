<?php
include 'biodata.php';
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Biodata Pelajar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Biodata Saya</h1>

    <img src="gambar.jpeg" alt="Gambar Pelajar">

    <p>Nama: <?= $nama ?></p>
    <p>No Matrik: <?= $nomatrik ?></p>
    <p>Kelas: <?= $kelas ?></p>
</body>
</html>
