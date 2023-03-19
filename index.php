  <?php
session_start();
include ("koneksi.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Absensi</title>
	<link rel="icon" href="img/paja.png" type="image/png">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

 
</head>

<style>
body{
  background: #4663Be;
}
.card{
  background: #8dbafe;
}

</style>

<body>
<nav class="navbar bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/paja.png" alt="" width="30" height="24" class="d-inline-block align-text-top text-black-100">
     Desa Paja
    </a>
  </div>
</nav>


<div class="card text-center">
  <div class="card-header text-dark">
    Sistem Absensi Desa Paja
  </div>
  <div class="card-body">
   
    <p class="card-text">Silahkan pilih tombol login berdasarkan Keterangan.</p>
 
    <section class="section-margin">
        <ul class="list-inline" id="chart-skill">
          <li><a href="login.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Login Admin</button></a>
          </li><br>
          <li><a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-primary" style="size: 50px;">Login Pegawai</button></a>
          </li> 
        </ul>

        </section>
      </div>
    </div>
    

  
</div> 

    <!-- Login Feature Section Start -->

    

    <!-- Login Feature Section End -->
    

    <!--================ about section start =================-->      
   


  
  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>