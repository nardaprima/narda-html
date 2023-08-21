<html>
<head>
    <title>Beasiswa</title>
</head>
<body>
<link href="style.css" rel="stylesheet" type="text/css">
    <h2> Data Penerima Beasiswa</h2>
    <pre>
<?php
    $nama=$_POST["nama"];
    $nim=$_POST["nim"];
    $kelas=$_POST["kelas"];
    $jurusan=$_POST["jurusan"];
    $jk=$_POST["jekel"];
    $ipk=$_POST["ipk"];
        if($ipk>=3.0)
        {
        $ket="Mendapat beasiswa sebesar Rp.1.000.000";
        }
        else
        { 
        $ket="Tidak dapat beasiswa";
        }
        echo "Nama          :$nama<br>";
        echo "Nim           :$nim<br>";
        echo "Kelas         :$kelas<br>";
        echo "Jurusan       :$jurusan <br>";
        echo "Jenis Kelamin :$jk <br>";
        echo "IPK           :$ipk<br>";
        echo "Menyatakan bahwa $nama $ket";
        ?>
        <br>
     <a href=input_beasiswa.php>Kembali</a>
    </pre>
</body>
</html>