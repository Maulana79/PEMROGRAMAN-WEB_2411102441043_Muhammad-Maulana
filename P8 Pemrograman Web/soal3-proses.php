<?php
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempatLahir'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$asalSekolah = $_POST['asalSekolah'];
$nilaiUAN = $_POST['nilaiUAN'];
?>

<html>
    <head>
        <title>Hasil Pendaftaran Mahasiswa Baru</title>
    </head>
    <body>
        <h1>Hasil Pendaftaran Mahasiswa Baru</h1>
        <h2>Terimakasih <?php echo $nama; ?> sudah mengisi form pendaftaran.</h2>

        <table>
            <tr><td>Nama Lengkap</td><td>:</td><td><?php echo $nama; ?></td></tr>
            <tr><td>Tempat Lahir</td><td>:</td><td><?php echo $tempatLahir; ?></td></tr>
            <tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $tgl . "-" . $bln . "-" . $thn; ?></td></tr>
            <tr><td>Alamat Rumah</td><td>:</td><td><?php echo $alamat; ?></td></tr>
            <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $jk; ?></td></tr>
            <tr><td>Asal Sekolah</td><td>:</td><td><?php echo $asalSekolah; ?></td></tr>
            <tr><td>Nilai UAN</td><td>:</td><td><?php echo $nilaiUAN; ?></td></tr>
        </table>
    </body>
</html>