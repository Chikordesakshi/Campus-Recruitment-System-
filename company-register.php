<?php
  session_start();

  if(isset($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
  }

  require_once("db.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Company Registration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">

  </head>

  <body>

  <font face="calibri">

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
                    <a href="../homepage_1.php" class="logo">
                      <img src="assets/images/C1.jpg" alt=" LOGO">
                    </a>
                  <!-- ***** Logo End ***** -->
                <?php
                if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
                ?>
                  <ul class="nav">
                      <li class="scroll-to-section"><a href="../homepage_1.php">Home</a></li>
                      <!--<li class="scroll-to-section"><a href="view-job-application.php">view Application</a></li>-->
                      <li class="scroll-to-section"><a href="user/dashboard.php" class="active">Dashboard</a></li>
                      <li class="scroll-to-section">
                        <div class="main-menu">
                        <ul class="menu-list"><div class="border-first-button">
                          <li><a href="logout.php"> Logout</a></li>
                        </ul>
                        </div>
                </div>
                <!-- ***** Menu End ***** -->
                </nav>
                <?php 
                } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
                ?>
                <ul class="nav">
                      <!--<li class="scroll-to-section"><a href="view-job-application.php">view Application</a></li>-->
                      <li class="scroll-to-section"><a href="company/dashboard.php" class="active">Dashboard</a></li>
                      <li class="scroll-to-section">
                        <div class="main-menu">
                        <ul class="menu-list"><div class="border-first-button">
                          <li><a href="logout.php"> Logout</a></li>
                        </ul>
                        </div>
                </div>
                <!-- ***** Menu End ***** -->
                </nav>

                <li style="padding-right: 25px;"><a href="company/dashboard.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Dashboard</a></li>
                <li style="padding-right: 25px;"><a href="logout.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Logout</a></li>
                <?php } else { 
                ?>
                <ul class="nav">
                      <li class="scroll-to-section"><a href="mainregister.php">Register</a></li>
                    <!--  <li class="scroll-to-section"><a href="dashboard.php" class="active">Dashboard</a></li>-->
                      <li class="scroll-to-section">
                        <div class="main-menu">
                        <ul class="menu-list"><div class="border-first-button">
                          <li><a href="mainlogin.php"> Login</a></li>
                        </ul>
                        </div>
                </div>
                <!-- ***** Menu End ***** -->
                </nav>
                <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
        </header>
      </div>
    </div>
  </section>
<br><br><br><br><br>
  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 73px;">Register as a Company</p>
  </div>

  <br>

  <p style="font-size: 18px; color: red; text-align: center;"> ( Fields marked with * are required. ) </p>

  <br>

  <section>
    <div class="container">
      <div class="row" align="center">
        <form method="post" action="addcompany.php">

          <div>

            <table style="border:none;">

              <tr>
                <td><label for="companyname" style="font-size: 20px; color: #053a5a;">Company Name&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="companyname" name="companyname" placeholder="Company Name *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="headofficecity" style="font-size: 20px; color: #053a5a;">Head Office City&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="headofficecity" name="headofficecity" placeholder="Head Office City *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="contactno" style="font-size: 20px; color: #053a5a;">Contact Number&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="Number" id="contactno" pattern=".{10,10}" minlength="10" maxlength="10" name="contactno" placeholder="Contact Number *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="website" style="font-size: 20px; color: #053a5a;">Website&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="website"" name="website"" placeholder="Website"></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="companytype"" style="font-size: 20px; color: #053a5a;">Company Type&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="companytype"" name="companytype"" placeholder="Company Type"></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="email" style="font-size: 20px; color: #053a5a;">Company Email Address&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="email" id="email" name="email" placeholder="Email Address *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="password" style="font-size: 20px; color: #053a5a;">Password&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="password" id="password" name="password" placeholder="Password *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><button type="submit" style="font-size: 18px; background-color: #053a5a; color: white; width: 50%; height: 50px; border-color: transparent; border-radius: 5px;">Submit</button></td>
              </tr>

            </table>

            <br>

          </div>

          <?php
          if(isset($_SESSION['registerError'])){                
          ?>
          <div>
          <p style="text-align: center; color: red; font-size: 28px;">Email already Exists!</p>
          </div>
          <?php
          unset($_SESSION['registerError']);}
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

  </font>
  </body>
</html>