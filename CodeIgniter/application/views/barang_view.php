<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Data List</h1>
    <table border="3" class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Deskripsi Barang</th>
            <th>Harga Barang</th>
            <th>Harga Jual</th>
            <th>Stok Barang</th>
            <th>Supplier Barang</th>
            <th>Tanggal Masuk</th>
        </tr>
        </thead>
        <?php foreach ($records as $record): ?>
        <tr>
            <td><?php echo $record['id_barang']; ?></td>
            <td><?php echo $record['kode_barang']; ?></td>
            <td><?php echo $record['nama_barang']; ?></td>
            <td><?php echo $record['kategori_barang']; ?></td>
            <td><?php echo $record['deskripsi_barang']; ?></td>
            <td><?php echo $record['harga_barang']; ?></td>
            <td><?php echo $record['harga_jual']; ?></td>
            <td><?php echo $record['stok_barang']; ?></td>
            <td><?php echo $record['supplier_barang']; ?></td>
            <td><?php echo $record['tanggal_masuk']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>
