<?php

  session_start();
  if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
    header("Location: user/dashboard.php");
    exit();
  } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])) {
  header("Location: company/dashboard.php");
  exit();
  }
?>

<html>
  <head>
    <title>Student Registration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="btnhover.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

  </head>
  <body>
  <!-- Navigation Bar Start -->

  <section>
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
            <li class="scroll-to-section"><a href="homepage_1.php">Home</a></li>
            <li class="scroll-to-section"><a href="mainregister.php"  class="active">Register</a></li>
            <li class="scroll-to-section">
            <div class="main-menu">
            <ul class="menu-list"><div class="border-first-button">
            <!--<li><a href="mainlogin.php"> Login </a>
            <ul>
            </ul>
            </li>-->
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
            if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
              ?>
              <li><a href="user/dashboard.php">Dashboard</a></li>
              <ul class="menu-list"><div class="border-first-button">
            <li><a href="logout.php"> Logout </a>
             <?php 
              } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
              ?>
                 <li><a href="company/dashboard.php">Dashboard</a></li>
              <ul class="menu-list"><div class="border-first-button">
            <li><a href="logout.php"> Logout </a>
            <?php } else { 
              ?>
              <!--<li style="padding-right: 25px;"><a href="search.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Search for Jobs</a></li>
            -->
            <li><a href="mainregister.php">Register</a></li>
              <ul class="menu-list"><div class="border-first-button">
            <li><a href="mainlogin.php"> Login </a>
            <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
      </header>
      </div>
    </div>
  </section>
    <br>
    <br>
    <br>
  <div style=" background: rgb(185,136,183);background: linear-gradient(165deg, rgba(185,136,183,0.31976540616246496) 8%, rgba(14,41,158,0.48783263305322133) 28%); height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 73px;">Register as a Student</p>
  </div>

  <br>

  <p style="font-size: 18px; color: red; text-align: center;"> ( Fields marked with * are required. ) </p>
  <br>
  
      <div class="container">
        <div class="row">
          <form method="post" action="adduser.php" enctype="multipart/form-data">

          <div class="col-md-12" align="center">
          <?php 
              //If User already registered with this email then show error message.
              if(isset($_SESSION['registerError'])) {
                ?>
                <div class="form-group">
                  <label style="text-align: center; color: red; font-size: 28px;">Email Already Exists! Choose A Different Email!</label>
                </div>
              <?php
               unset($_SESSION['registerError']); }
              ?> 

              <?php if(isset($_SESSION['uploadError'])) { ?>
              <div class="form-group">
                  <label style="text-align: center; color: red; font-size: 28px;"><?php echo $_SESSION['uploadError']; ?></label>
              </div>
              <?php unset($_SESSION['uploadError']); } ?> 
            </div>

          <div class="col-md-6">

              <label style="font-size: 18px;">First Name : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="text" id="fname" name="fname" placeholder="First Name *" required>
              </div>

              <br>

              <label style="font-size: 18px;">Last Name : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="text" id="lname" name="lname" placeholder="Last Name *" required>
              </div>

              <br>

              <label style="font-size: 18px;">Email Address : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="email" id="email" name="email" placeholder="Email Address *" required>
              </div>

              <br>

              <label style="font-size: 18px;">Date Of Birth : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="date" id="dob" name="dob" placeholder="Date of Birth *" min="1985-01-01" max="2004-01-01" required="">
              </div>

              <br>

              <label style="font-size: 18px;">Age : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="number" id="age" min="1" max="99" name="age" placeholder="Age *" required="">
              </div>

              <br>

              <label style="font-size: 18px;">Passing Year : </label>
              <div>
              <input type="number" placeholder="YYYY" min="2022" max="2023" style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;">

              </div>
              <br>

              <label style="font-size: 18px;">Stream : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="text" id="stream" name="stream" placeholder="Stream">
              </div>

              <br>  

              <label style="font-size: 18px;">SSC Marks : </label>
              <div>
              <input type="number" placeholder="10th Percentage"  style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;"  id="ssc" name="ssc" required="">

              </div>
              <br>
              <label style="font-size: 18px;">HSC Score  : </label>
              <div>
              <input type="number" placeholder="12th Percentage"  style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" id="hsc" name="hsc" required="">

              </div>
              <br>

          </div>    

          <div class="col-md-6">             

              <label style="font-size: 18px;">Password : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="password" id="password" name="password" placeholder="Password *" required="">
              </div>

              <br>
              
              <label style="font-size: 18px;">Contact Number : </label>
              <div class="form-group">
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="number" id="contactno" name="contactno" minlength="10" maxlength="10" class="form-control" placeholder="Phone Number *" value="" required="">
              </div>

              <br>

              <label style="font-size: 18px;">Address : </label>
              <div>
                <textarea style="border:1px solid black; border-radius: 5px; width: 80%; padding: 15px; font-size: 18px;" rows="4" id="address" name="address" placeholder="Address *" required=""></textarea>
              </div>

              <br> 

              <label style="font-size: 18px;">City : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="text" id="city" name="city" placeholder="City">
              </div>

              <br>

              <label style="font-size: 18px;">State : </label>
              <div>
                <input style="border:1px solid black; border-radius: 5px; width: 80%; height: 45px; padding: 15px; font-size: 18px;" type="text" id="state" name="state" placeholder="State">
              </div>

              <br>
              <div>
                <label style="color: red; font-size: 18px;">Upload Resume (PDF or DOC)</label>
                <input type="file" name="resume" style="font-size: 15px;" class="btn btn-flat btn-danger" required>
              </div>

              <br>

          </div>


    <div class="col-md-12" align="center">
      <div>
        <button class="btn-hover color-7" style="font-size: 18px; border-color: transparent; border-radius: 5px; width: 12%; height: 45px;">Register</button>
      </div>
    </div>

  </form>
    
  </div>
  </div>

  <br>
  <br>

  </div>

<?php
include('footer.php');
?>

  </footer>
  <script>
  document.querySelector("input[type=number]")
  .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>


</html>