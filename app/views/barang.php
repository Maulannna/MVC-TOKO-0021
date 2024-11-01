<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Barang</title>
</head>
<style>
    .navbar-nav li a {
        color: white !important; /* Buat teks berwarna putih */
        margin-right: 15px;      /* Tambahkan jarak antar item */
    }
    .navbar-nav li a.active {
        font-weight: bold;       /* Berikan gaya berbeda untuk yang aktif */
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="index.php?page=home" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'home') || !isset($_GET['page']) ? 'active' : ''; ?>">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
           
            <li><a href="index.php?page=barang" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'barang') ? 'active' : ''; ?>">Barang</a></li>
            <li><a href="index.php?page=pelanggan" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'pelanggan') ? 'active' : ''; ?>">Pelanggan</a></li>
            <li><a href="index.php?page=transaksi" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'transaksi') ? 'active' : ''; ?>">Transaksi</a></li>
        </ul>
    </div>
</nav>

    <div class="container mt-5 ">
        <h5 class="text-left text-success">Data Barang</h5>
        
        <a href="index.php?page=tambah_brg" class="btn btn-info btn-sm bg-success<?php echo (isset($_GET['page']) && $_GET['page'] == 'tambah_brg') ? 'active' : ''; ?>" >Tambahkan Data</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    if (isset($Barang) && is_array($Barang)) { // Memastikan $Barang terdefinisi
                        foreach ($Barang as $item) {
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor++; ?></th>
                    <td><?php echo $item["kd_barang"]; ?></td> <!-- Pastikan ini sesuai dengan struktur data -->
                    <td><?php echo $item["nama_barang"]; ?></td>
                    <td><?php echo $item["harga"]; ?></td>
                    <td><?php echo $item["stok"]; ?></td>
                    <td>
                    <a href="index.php?page=edit_barang&kd_barang=<?= $item['kd_barang'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?page=delete_barang&kd_barang=<?= $item['kd_barang'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</a>
                        
                       
                    </td>
                </tr>
                <?php
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data barang ditemukan.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
