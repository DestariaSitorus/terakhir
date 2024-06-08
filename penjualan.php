<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="penjualan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo">Kasir System</div>
    <nav>
        <ul>
            <li><a href="stokbarang.php">Stok Barang</a></li>
            <li><a href="penjualan.php">Penjualan Barang</a></li>
            <li><a href="databarang.php">Pendataan Barang</a></li>
<button onclick="logout()">Logout</button>

<script>
    function logout() {
        window.location.href = "index.php";
    }
</script>
  </ul>
  </nav>
  </header>


<div class="table-container">
            <center>
            <h3 class="mb-4">Pembelian Barang</h3>
            <center>
                    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th scope="col">Id Penjualan</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col">Tanggal Penjualan</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Id Pelanggan</th>
              <th scope="col">Aksi</th>
            </tr>
</body>
</html>