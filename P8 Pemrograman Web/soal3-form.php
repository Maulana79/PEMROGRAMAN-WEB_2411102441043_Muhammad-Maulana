<html>
    <head>
        <title>Form Pendaftaran Mahasiswa Baru</title>
    </head>
    <body>
        <h1>Pendaftaran Online Mahasiswa Baru</h1>
        <form action="soal3-proses.php" method="post">
            <table>
                <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
                <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempatLahir" size="30"></td></tr>
                <tr><td>Tanggal Lahir</td><td>:</td><td>
                    <select name="tgl"><?php for($i=1; $i<=31; $i++) echo "<option>$i</option>"; ?></select>
                    <select name="bln"><?php for($i=1; $i<=12; $i++) echo "<option>$i</option>"; ?></select>
                    <select name="thn"><?php for($i=1980; $i<=2005; $i++) echo "<option>$i</option>"; ?></select>
                </td></tr>
                <tr><td>Alamat Rumah</td><td>:</td><td><textarea name="alamat" rows="4" cols="30"></textarea></td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td>
                    <input type="radio" name="jk" value="Pria"> Pria 
                    <input type="radio" name="jk" value="Wanita"> Wanita
                </td></tr>
                <tr><td>Asal Sekolah</td><td>:</td><td><input type="text" name="asalSekolah" size="30"></td></tr>
                <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilaiUAN" size="10"></td></tr>
            </table>
            <br/>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>