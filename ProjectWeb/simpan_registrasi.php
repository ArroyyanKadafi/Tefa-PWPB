<?php
require 'koneksi.php';

function submit($data) {
      global $conn;
      $username = strtolower(stripslashes($data["username"]));
      $email = strtolower(stripslashes($data["email"]));
      $phone = strtolower(stripslashes($data["phone"]));
      $status = strtolower(stripslashes($data["status"]));
      $password = strtolower(stripslashes($data["password"]));
      $password2 = strtolower(stripslashes($data["password2"]));
  
      // VARIABLE 2 - memungkinkan user memasukan password dengan tanda kutip
      $password = mysqli_real_escape_string($conn, $password);
      $password2 = mysqli_real_escape_string($conn, $password2);
  
  
  
      // cek komfirmasi password
      if ($password !== $password2) {
          echo "<script>
                  alert('konfirmasi password tidak sesuai!');
                </script>";
          return false;
      }
  
  
      // cek username sudah ada atau belum
      $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  
      if (mysqli_fetch_assoc($result)) {
          echo "<script>  
                  alert('nama sudah ada!')
                </script>";
          return false;
      }
  
  
      // enkripsi password
      // $password = password_hash($password, PASSWORD_DEFAULT);
      // $password2 = password_hash($password2, PASSWORD_DEFAULT);
  
  
      // tambahkan user baru ke database
      mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$phone', '$status', '$password', '$password2')");
      return mysqli_affected_rows($conn);
  }
?>

