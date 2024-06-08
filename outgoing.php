<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datadesta";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$itemName = $_POST['outgoingName'];
$quantity = $_POST['outgoingQuantity'];

$sql = "INSERT INTO transactions (transaction_type, item_name, quantity) VALUES ('outgoing', '$itemName', $quantity)";
$conn->query($sql);

$sql = "SELECT * FROM masukbarang WHERE item_name='$itemName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['quantity'] >= $quantity) {
        $sql = "UPDATE masukbarang SET quantity = quantity - $quantity WHERE item_name='$itemName'";
    } else {
        echo "Insufficient stock for outgoing transaction.";
        $conn->close();
        exit;
    }
} else {
    echo "Item not found in stock.";
    $conn->close();
    exit;
}
$conn->query($sql);

$conn->close();

header('Location: databarang.php');
exit;
?>
