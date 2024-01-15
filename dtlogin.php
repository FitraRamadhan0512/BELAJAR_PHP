<?php
    require('connection.php');

if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username,password FROM login WHERE username = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param ($stmt, 's', $username);
    mysqli_stmt_execute ($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $stored_password = $row['password'];
        if (password_verify($password, $stored_password)) {
            echo '<script>
                    alert("Login benar");
                    window.location = "home.php";
                  </script>';
        } else {
            echo '<script>
                    alert("Kata sandi salah");
                    window.location = "login.php";
                  </script>';
        }
    } else {
        echo '<script>
                alert("Data tidak ditemukan");
                window.location = "login.php";
              </script>';
    }
} 
?>