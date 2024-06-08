<?php

session_start();

if(empty($_SESSION['username'])){
  header("location:index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier App</title>
    <link rel="stylesheet" href="databarangs.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container">
        <h1 class="my-4">Cashier App</h1>
        <div class="row">
            <div class="col-md-6">
                <h3>Add Masuk</h3>
                <form action="incoming.php" method="post">
                    <div class="form-group">
                        <label for="incomingName">Nama Barang</label>
                        <input type="text" class="form-control" id="incomingName" name="incomingName" required>
                    </div>
                    <div class="form-group">
                        <label for="incomingQuantity">Jumlah Barang</label>
                        <input type="number" class="form-control" id="incomingQuantity" name="incomingQuantity" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Incoming</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Add Keluar</h3>
                <form action="outgoing.php" method="post">
                    <div class="form-group">
                        <label for="outgoingName">Nama Barang</label>
                        <input type="text" class="form-control" id="outgoingName" name="outgoingName" required>
                    </div>
                    <div class="form-group">
                        <label for="outgoingQuantity">Jumlah Barang</label>
                        <input type="number" class="form-control" id="outgoingQuantity" name="outgoingQuantity" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Outgoing</button>
                </form>
            </div>
        </div>
        <h3 class="my-4">SStock</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'datadesta');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT item_name, quantity FROM masukbarang";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>{$row['item_name']}</td><td>{$row['quantity']}</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No items in stock</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        <h3 class="my-4">Transaksi</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Transaksi</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'datadesta');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT transaction_type, item_name, quantity, transaction_date FROM transactions";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>{$row['transaction_type']}</td><td>{$row['item_name']}</td><td>{$row['quantity']}</td><td>{$row['transaction_date']}</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No transactions recorded</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

