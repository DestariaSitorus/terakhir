<?php 

	session_start();

	require 'ceklogin.php';

	if(!isset($_SESSION["login"])){
		header("Location: index.php");
		exit;
	}

	if(isset($_SESSION["petugas"])){
		if(isset($_GET["cetakRegistrasi"])){
			echo "
					<script>
						alert('Anda Bukan Admin!');
						document.location.href = 'main.php';
					</script>
				";
		}
	}