<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      } else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>WARKOP</title>
  </head>
  <body>
    <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">Warung Kopi JOSSS !</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda</p>
        </div>
      </div>
    <!-- Akhir Jumbotron -->

    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  bg-dark">
             <div class="container">
                <a class="navbar-brand text-white" href="admin.php"><strong>Warung</strong> Kopi JOSSS !</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="admin.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
      <div class="container">
        <a href="tambah_menu.php" class="btn btn-success mt-3">TAMBAH DAFTAR MENU</a>
        <!-- <div class="row mt-3">
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/indomie1.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Indomie Goreng</h5>
               <label class="card-text harga">Rp. 7.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/miekuah.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Indomie Rebuss</h5>
               <label class="card-text">Rp. 7.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/indomie2.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Indomie Goreng + Telur</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/kuah.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Indomie Rebus + Telur</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>
         </div>  

         <div class="row mt-3">
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/bbraym.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Bubur Ayam </h5>
                <label class="card-text">Rp. 10.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/bbrkcgijo.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Bubur Kacang Ijo</h5>
                <label class="card-text">Rp. 8.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/rtbkr.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Roti Bakar</h5>
                <label class="card-text">Rp. 8.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/tehtrk.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Teh Tarik</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>
         </div>  

         <div class="row mt-3 mb-5">
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/kopiitem2.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Kopi Hitam</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>  

          <div class="col-md-3">
            <div class="card border-dark ">
              <img src="img/kopsu2.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Kopi Susu</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>        

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/esteh2.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Es Teh Manis</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>   

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="img/nutrisari.jpg" height="185px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Nutri Sari</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <a href="edit_menu.php" class="btn btn-primary btn-sm">EDIT</a>
                <a href="hapus_menu.php" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>   
         </div> 
      </div>
  Akhir Menu -->
        
        
        <div class="row">

  <?php 
    include('koneksi.php');
      $query = mysqli_query($conn, 'SELECT * FROM produk');
      $result = mysqli_fetch_all($query, MYSQLI_ASSOC);  
  ?>

    <?php foreach($result as $result) : ?>
          <div class="col-md-3 mt-4">
            <div class="card brder-dark">
              <img src="img/<?php echo $result['gambar'] ?>" height="180px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href="edit_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-success btn-sm btn-block">EDIT</a>

                <a href="hapus_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-danger btn-sm btn-block text-light">HAPUS</a>
              </div>
            </div>
          </div>
              <?php endforeach; ?>
            </div>
          </div>

          
  <!-- Akhir Menu -->

  <!-- Awal Footer -->
    <hr class="footer">
    <div class="container">
        <div class="row footer-body">
            <div class="col-md-6">
            </div>

        <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
            <label class="font-weight-bold" style="color: white;">Follow Us </label>
                <a href="#"><img src="img/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
                <a href="#"><img src="img/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
                <a href="#"><img src="img/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
         </div>
            </div>
        </div>
    </div>
  <!-- Akhir Footer -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>
<?php } ?>