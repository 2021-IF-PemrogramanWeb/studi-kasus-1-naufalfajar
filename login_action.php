<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if($email=="anjay@gmail.com" && $password=="anjay")
        echo("Login Berhasil");
    else
        echo("Login Gagal");
?>
