<?php
require 'function.php';
$barang = query("SELECT * FROM list_baranglocalpride")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Barang Toko Local Pride</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                text-align: center;
                margin: 0;
                padding: 0;
            }

            h1 {
                font-family: 'verdana', sans-serif;
                color: #333;
                text-shadow: 2px 2px 4px #888;
                margin-top: 20px;
            }

            a {
                display: inline-block;
                padding: 10px 20px;
                background-color:red;
                color: white;
                text-decoration: none;
                margin: 20px;
                border-radius: 5px;
            }

            a:hover {
                background-color: #005aa7;
            }

            table {
                margin: 0 auto;
                border-collapse: collapse;
                background-color: white;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            table th, table td {
                padding: 10px;
                border: 1px solid #ddd;
            }

            table th {
                background-color: #0078d4;
                color: white;
            }

            table tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            table tr:hover {
                background-color: #e0e0e0;
            }
        </style
        <title></title>
    </head>
    
    <body>
        <h1 style="font-family:verdana">Daftar Barang Toko Local Pride</h1>
        <a href="commandtambah.php">Tambah Data Barang</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="commandubah.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="commandhapus.php?no= <?= $row["no"];?>" onclick="return confirm('Barang akan dihapus?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>