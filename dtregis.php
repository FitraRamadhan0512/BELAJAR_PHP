<?php
    require('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $password2 = $_POST['password2'];

    $cek = "SELECT * FROM login WHERE username = '$username'";
    $result = mysqli_query($koneksi,$cek);

    if(mysqli_num_rows($result) > 0) {
        echo '<script>
                alert ("Username sudah ada");
                windows.location = "registrasi.php";
              </script>';
    }else{
        if (password_verify ($password2, $password)) {
        $insert = "INSERT INTO login (username,password) values ('$username','$password')";
        $confir = mysqli_query($koneksi,$insert);
        
        if($confir) {
            echo '<script>
                    alert ("Registrasi Berhasil");
                    window.location = "login.php";
                  </script>';
        } else {
            echo '<script>
                    alert ("Registrasi Gagal");
                    window.location = "registrasi.php";
                  </script>';

        }

        } else {
            echo '<script>
                    alert ("Konfirmasi Password Tidak Sesuai");
                    window.location = "registrasi.php";
                  </script>';
        }

    }
}
?>