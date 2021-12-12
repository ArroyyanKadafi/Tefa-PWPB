<?php
require 'simpan_registrasi.php';

//  Kondisi apakah berhasil atau tidak
if (isset($_POST["submit"])) {

    if (submit($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil !');
                document.location.href = 'login.php'; 
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="login&registrasi.css">
    <title>SIGN UP</title>
</head>

<body>

    <!-- Login -->
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-5">SIGN UP</h3>

                            <form action="" method="POST">

                                <div class="mb-3">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                </div>

                                <div class="mb-3">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="mb-3">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                </div>

                                <div class="mb-3">
                                    <select id="sts" class="form-control" name="status">
                                        <option selected>Pilih Status Registrasi...</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="mb-3">
                                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password">
                                </div>

                                <div class="from-group form-check text-left ml-2">
                                    <input type="checkbox" class="form-check-input" id="agree">
                                    <label for="agree" class="form-check-label ml-2">I Agree to the <a href="">Terms Of Service & Privacy Police</a></label>
                                </div>
                                <div class="col-6 text-right"></div>
                                <a href="forget.html">Forget Your Password</a>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
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