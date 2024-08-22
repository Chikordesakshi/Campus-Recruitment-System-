<?php 

  session_start();

  if(isset($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">

    <title>Company Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  </head>
  <body>

  <font-family: "Sofia", sans-serif;>
                    <?php
                    if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
                      ?>
                      <!-- Navigation Bar Start -->

                <section>
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
                <li class="scroll-to-section"><a href="user/profile.php" >Profile</a></li>
                <li class="scroll-to-section"><a href="index.php" class="active"> Drives</a></li>
                <li class="scroll-to-section"><a href="user/dashboard.php" >Dashboard</a></li>
                <li class="scroll-to-section"><a href="search.php" >Search </a></li>
                <li class="scroll-to-section">
                <div class="main-menu">
                <ul class="menu-list"><div class="border-first-button">
                <li><a href="logout.php"> Logout</a>
                <ul>
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
           <?php 
            } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
            ?>
            <!-- Navigation Bar Start -->

            <section>
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
                <div class="main-menu">
                      <ul class="nav">
                      <li class="scroll-to-section"><a href="homepage_1.php" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="company/dashboard.php">Dashboard</a></li>
                      <li class="scroll-to-section">
                      <div class="main-menu">
                      <ul class="menu-list"><div class="border-first-button">
                      <li><a href="logout.php"> logout</a>
                      <ul>
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
            <?php } else { 
                      ?>
                      <section>
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

<ul class="nav" font-family: "Sofia", sans-serif;>
<li class="scroll-to-section"><a href="homepage_1.php">Home</a></li>
<li class="scroll-to-section"><a href="mainregister.php">Register</a></li>
<li class="scroll-to-section"><a href="mainlogin.php" class="active">Login</a></li>
<li class="scroll-to-section">

<ul>
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
<br><br><br><br><br><br>
  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Company Login</p>
  </div>
  <br><br>
  <br>

  <section>
    <div class="container">
      <div class="row" align="center" style="text-shadow: 3px 3px 3px #ababab;">
        <form method="post" action="checkcompanylogin.php">
          <div>

            <table style="border:none;">

              <tr>
                <td><label for="email" style="font-size: 22px; color: #053a5a;">Email Address&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px;" type="email" id="email" name="email" placeholder="Email" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="password" style="font-size: 22px; color: #053a5a;">Password</label></td>
                <td style="font-size: 22px; color: #053a5a;">:</td>
                <td><input style="font-size: 20px; padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px;" type="password" id="password" name="password" placeholder="Password" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><a href="companyforgot-password.php" style="font-size: 22px; color: red;">Forgot Password? Click Here...</a></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><button type="submit" style="font-size: 18px; background-image: linear-gradient( 135deg, #3B2667 10%, #BC78EC 100%); color: white; width: 40%; height: 50px; border-color: transparent; border-radius: 5px;">Submit</button></td>
              </tr>

            </table>

            <br>

          </div>

          <?php
          if(isset($_SESSION['registerCompleted'])){                
          ?>
          <div>
          <p id="successMessage" style="text-align: center; color: red; font-size: 28px;">You have registered successfully!</p>
          </div>
          <?php
          unset($_SESSION['registerCompleted']);}
          ?>

          <?php
          if(isset($_SESSION['loginError'])){                
          ?>
          <div>
          <p style="text-align: center; color: red; font-size: 28px;">Invalid Email or Password!</p>
          </div>
          <?php
          unset($_SESSION['loginError']);}
          ?>

        </form>
      </div>
    </div>
  </section>
  <br>
  <?php
  include('footer.php');
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(function(){
      $("#successMessage:visible").fadeOut(5000);
    });
  </script>
  </body>
</html>