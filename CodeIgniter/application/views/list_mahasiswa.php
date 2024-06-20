<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 250px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        .button-container {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <div class="button-container">
        <form action="<?php echo site_url('mahasiswa/search_mahasiswa'); ?>" method="post">
            <input type="text" name="keyword" placeholder="Cari Nama Mahasiswa">
            <button type="submit">Cari</button>
            <button type="button" onclick="window.location.href='<?php echo base_url('mahasiswa/data_mahasiswa'); ?>'">Reset</button>
        </form>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Angkatan</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Mata Kuliah Favorit</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) { ?>
        <tr>
            <td><?php echo $mhs['id']; ?></td>
            <td><?php echo $mhs['nama']; ?></td>
            <td><?php echo $mhs['npm']; ?></td>
            <td><?php echo $mhs['angkatan']; ?></td>
            <td><?php echo $mhs['kelas']; ?></td>
            <td><?php echo $mhs['alamat']; ?></td>
            <td><?php echo $mhs['mata_kuliah_favorit']; ?></td>
            <td><?php echo $mhs['email']; ?></td>
            <td><?php echo $mhs['jenis_kelamin']; ?></td>
            <td><?php echo $mhs['tanggal_lahir']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
