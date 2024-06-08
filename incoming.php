<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datadesta";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$itemName = $_POST['incomingName'];
$quantity = $_POST['incomingQuantity'];

$sql = "INSERT INTO transactions (transaction_type, item_name, quantity) VALUES ('incoming', '$itemName', $quantity)";
$conn->query($sql);

$sql = "SELECT * FROM masukbarang WHERE item_name='$itemName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "UPDATE masukbarang SET quantity = quantity + $quantity WHERE item_name='$itemName'";
} else {
    $sql = "INSERT INTO masukbarang (item_name, quantity) VALUES ('$itemName', $quantity)";
}
$conn->query($sql);

$conn->close();

header('Location: databarang.php');
exit;
?>
