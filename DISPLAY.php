<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN</title>
</head>
<body>
<?php
echo "<h2>Data Buku</h2>";
$file_name = "buku.txt";
$read = file($file_name);
?>

<table border="1">
    <thead>
        <tr>
            <th>KODE BUKU</th>
            <th>JUDUL</th>
            <th>PENGARANG</th>
            <th>PENERBIT</th>
            <th>TAHUN TERBIT</th>
            <th>JUMLAH HALAMAN</th>
            <th>KATEGORI</th>
            <th>COVER BUKU</th>
            <th>EDIT</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($read as $buku) {
        $data_buku = explode("-", $buku); ?>
        <tr>
            <td><?php echo $data_buku[0];?></td>
            <td><?php echo $data_buku[1];?></td>
            <td><?php echo $data_buku[2];?></td>
            <td><?php echo $data_buku[3];?></td>
            <td><?php echo $data_buku[4];?></td>
            <td><?php echo $data_buku[5];?></td>
            <td><?php echo $data_buku[6];?></td>
            <td><img src="upload/<?php echo $data_buku[7];?>" width="200" height="300"></td>
            <td>
            <a href="DEL_BUKU.php?kode_buku=<?php echo $data_buku[0]; ?>">DELETE</a>
            <a href="EDT_BUKU.php?kode_buku=<?php echo $data_buku[0]; ?>">EDIT</a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>
<br><br><a href="FORM.php">Kembali ke Form</a>
</body>
</html>

