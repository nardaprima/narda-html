<html>
<head>
    <title>Info Beasiswa</title>
</head>
<body>
    <link href="style.css" rel="stylesheet" type="text/css">
    <form action="beasiswa_output.php" method="post">
    <h2>PENERIMAAN BEASISWA</h2>
    <pre>
    Nama         :<input type="text" name="nama">
    Nim          :<input type="text" name="nim">
    Kelas        :<input type="text" name="kelas">
    Jurusan      :<Select name=jurusan>
    <option value=Sistem Informasi>SI</option>
    <option value=Teknik Informatika>TI</option>
    </Select>
    Jenis Kelamin:<input type="radio" value=Pria name="jekel">Pria 
                  <input type="radio" value="Wanita" name="jekel">Wanita
     IPK         :<input type="text" size=4 name="ipk">
     <br>
     <input type="submit" value="Proses"> <input type="reset" value="Kembali">
    </br>
    </pre>
    </form>
</body>
</html>   