<?php

session_start();
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="mainloginpg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
  <!-- Navigation Bar Start -->
          <?php
          if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
            ?>
  <div class="container-fluid">
  <div class="container">
  <div class="row">
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="homepage_1.php" class="logo">
              <img src="assets/images/C1.jpg" alt=" LOGO">
            </a>
            <!-- ***** Logo End ***** -->
            <ul class="nav">
            <li class="scroll-to-section"><a href="user/dashboard.php" class="active">Dashboard</a></li>
            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
            <li class="scroll-to-section">
            <div class="main-menu">
            <ul class="menu-list"><div class="border-first-button">
            </ul>
            </div>
            </div></li>
            </ul>
            <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
    </div>
  </header>
    
            <?php 
            } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
            ?>
  <div class="container">
  <div class="row">
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="homepage_1.php" class="logo">
              <img src="assets/images/C1.jpg" alt=" LOGO">
            </a>
            <!-- ***** Logo End ***** -->
            <ul class="nav">
            <li class="scroll-to-section"><a href="company/dashboard.php" class="active">Dashboard</a></li>
            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
            <li class="scroll-to-section">
            <div class="main-menu">
            <ul class="menu-list"><div class="border-first-button">
         
            </ul>
            </div>
            </div></li>
            </ul>
            <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
    </div>
  </header>

            <?php } else { 
            ?>
            
    <div class="container-fluid">
  <div class="container">
  <div class="row">
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="homepage_1.php" class="logo">
              <img src="assets/images/C1.jpg" alt=" LOGO">
            </a>
            <!-- ***** Logo End ***** -->
            <ul class="nav">
            <li class="scroll-to-section"><a href="mainregister.php" class="active">Register</a></li>
            <li class="scroll-to-section"><a href="mainlogin.php">Login</a></li>
            <li class="scroll-to-section">
         
            </ul>
            </li>
            </ul>
            </div>
            </div></li>
            </ul>
            <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
    </div>
  </header>
          <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  </div>
  </div>
  </section>

  <!-- Navigation Bar End -->
    
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container-fluid">
    <h1 class="text-center mt-5 display-3 fw-bold">CHOOSE YOUR<span class="theme-text">REGISTRATION </span>TYPE</h1>
    <hr class="mx-auto mb-5 w-25">
  <div class="container">
      <div class="row">
        <div class="col-md-12" align="center">
          <div class="list-group" align="center" style="width: 50%; border: 1px solid #053a5a; border-radius: 5px;">
            <a class="list-group-item active" style="font-size: 20px;"> REGISTER AS</a>
            <a href="register.php" class="list-group-item" style="font-size: 20px;">STUDENT</a>
            <a href="company-register.php" class="list-group-item" style="font-size: 20px;">COMPANY</a>
          </div>
        </div>
            </div>
            </div>
            </div>
  <br>          
  <br>
  <br>
  <br>
  
 
  <br>
  <br>
  <?php
  include('footer.php');
  ?>
<!-- Option 1: Bootstrap Bundle with Popper 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>-->
  </body>
</html>