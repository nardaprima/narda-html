<!DOCTYPE html>
<html>

<head>
    <title> DATA MAHASISWA </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mahasiswa.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 align="center">Data Mahasiswa</h1>
        </div>
        <div class="main">
            <div class="left">
                <h3 align="center"> Menu </h3>
                <ul>
                    <li><a href='index.php'> Home </a></li>
                    <li><a href="index.php?page = mahasiswa"> Mahasiswa </a></li>
                    <li><a href='index.php?page=galeri'> Galeri </a></li>
                </ul>
            </div>
        </div>

        <div class="middle">
            <h3 align="center"> Berita </h3>
            <?php
            $page = (isset($_GET['page'])) ?
                $_GET['page'] : 'main';
            switch ($page) {
                case 'Mahasiswa':
                    include 'mahasiswa.php';
                    break;
                case 'galeri':
                    include 'galeri.php';
                    break;
                case 'main';
                default:
                    include 'home.php';
            }
            ?>
        </div>
        <div class="right">
            <h3 align="center"> Mata Pelajaran </h3>
            <ul>
                <li><a href='index.php'> Database </a></li>
                <li><a href='index.php'> Website </a></li>
                <li><a href='index.php'> Mobile </a></li>
            </ul>
            </p>
        </div>
    </div>
</body>

</html>