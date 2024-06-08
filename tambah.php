<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    $sqlquery = "INSERT INTO register (username, password, email, role)
    VALUES('$username', '$password', '$email', '$role')";
    $result = mysqli_query($conn, $sqlquery);

    if ($result) {
        header("Location: index.php?msg=New record created successfully");
     } else {
        echo "Failed: " . mysqli_error($conn);
     }

}


 ?>