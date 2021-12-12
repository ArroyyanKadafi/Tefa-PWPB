<?php 
session_start();
require 'koneksi.php';
?>

<!-- Eksekusi Form Login -->
 <?php 
          if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Query untuk memilih tabel
            $cek_data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
            $hasil = mysqli_fetch_array($cek_data);
            $status = $hasil['status'];
            $login_user = $hasil['username'];
            $row = mysqli_num_rows($cek_data);

            // Pengecekan Kondisi Login Berhasil/Tidak
              if ($row > 0) {
                  session_start();   
                  $_SESSION['login_user'] = $login_user;

                  if ($status == 'admin') {
                    header('location: admin.php');
                  }elseif ($status == 'user') {
                    header('location: user.php'); 
                  }
              }else{
                  header("location: login.php");
              }
          }
         ?>
      </div>
    <!-- Akhir Eksekusi Form Login -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SIGN IN</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="login&registrasi.css">

  </head>
  <body>

    <!-- Login -->
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-5">SIGN IN</h3>

                            <form action="" method="POST">
                                  
                                <div class="mb-3">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Name">
                                </div>

                                <div class="mb-3">
                                    <input type="password" name="password" id="password" class="form-control"   placeholder="Password">
                                </div>

                                <div class="from-group form-check text-left ml-2">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label for="remember" class="form-check-label ml-2">Remember</label>
                                </div>
                                    <div class="col-6 text-right"></div>
                                        <a href="forget.php">Forget Your Password</a>
                                </div> 
                                    <button type="submit"  name="submit" class="btn btn-dark">Submit</button>
                                <br>
                                <div>
                                    <p>New Member ? <a href="registrasi.php">Create Account</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
