<?php
require 'tambah.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registeruser.css">
</head>
<body>
    <div class="kotak_regis">
    <form action="tambah.php" method="POST">
    <p class="font_regis">Register's</p>
			<label for="username">Username :</label>
			<input type="text" id="username" name="username" class="form_regis" required>
			<label for="passsword">Password :</label>
			<input type="password" name="password" value="" class="form_regis" required>
            <label for="email">Email :</label>
			<input type="text" id="email" name="email" class="form_regis" required>
            <label for="role">Role:</label>
            <select name="role" id="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
            </select>
            <br>
            <br>
			<input type="submit" name="submit" class="button_register" value="Register">
			<center>
			<div class="">Have an account? <a href="index.php">Login</a> </div>
            </center>
    </div>
</body>
</html>