<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">
    <title>Home</title>
</head>
<style>
    
    .navbar-nav li a {
        color: white !important; /* Buat teks berwarna putih */
        margin-right: 15px;      /* Tambahkan jarak antar item */
    }
    .navbar-nav li a.active {
        font-weight: bold;       /* Berikan gaya berbeda untuk yang aktif */
    }
    footer {
            text-align: center; /* Rata tengah teks */
            padding: 10px 0;   /* Tambahkan padding */
            background-color: #f8f9fa; /* Warna latar belakang abu-abu terang */
            width: 100%; /* Lebar penuh */
        }
</style>
<body>
    <!-- Navbar -->
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



    <!-- Content -->
    <div class="container mt-5">
        <h5 class="text-center text-success">Selamat Datang di Aplikasi Penjualan</h5>
    </div>
    
    <footer>
        <p class="tex-center">&copy; <?php echo date("Y"); ?> Nama Perusahaan. Semua hak dilindungi. </p>
    </footer>
    
   

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
