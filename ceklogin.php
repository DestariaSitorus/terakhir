<?php
$koneksi = mysqli_connect("localhost", "root", "", "datadesta");

session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // "register" sesuai sama username table
    $query = "SELECT role FROM register WHERE username='$username' AND password='$password'";
    $cekuser = mysqli_query($koneksi, $query);
    
    if(mysqli_num_rows($cekuser) == 1){
        $user = mysqli_fetch_assoc($cekuser);
        $role = $user['role'];

        $_SESSION['username'] = $row['username'];

        if($role == 'user'){
            echo "<script>
              alert('Welcome');
              window.location.href = 'user.php';
              </script>";
            exit();
    
        }elseif($role == 'admin'){
             echo "<script>
              alert('Welcome'); 
              window.location.href = 'databarang.php';
              </script>";
            exit();
    
        }elseif($role == 'petugas'){
            echo "<script>
            alert('Welcome');
            window.location.href = 'stokbarang.php';
            </script>";
          exit();
    
        }else{
            echo "<script>
            alert('Invalid Username/Password');
            window.location.href = 'index.php';
            </script>";
        }
    }
}
?>
