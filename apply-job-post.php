<?php

  session_start();

  if(empty($_SESSION['id_user'])) {
    $_SESSION['callFrom'] = "apply-job-post.php?id=".$_GET[id];
    header("Location: login.php");
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
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <title>Job Details</title>

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>

  <body>
    
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
                            <ul class="nav" style="font-family: Copperplate, Papyrus, fantasy;">
                <li class="scroll-to-section"><a href="homepage_1.php"><b>Home</b></a></li>
                <li class="scroll-to-section"><a href="profile.php" ><b>Profile</b></a></li>
                <li class="scroll-to-section">
                <div class="main-menu">
                <ul class="menu-list"><div class="border-first-button">
                <li><a href="logout.php"><b> Logout</b></a>
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
</div>
           </header>
           <br>
           <br>
           <br>
           <br><br><br>

  <div style="background-image: linear-gradient( 109.6deg,  rgba(62,161,219,1) 11.2%, rgba(93,52,236,1) 100.2% );font-family: Copperplate, Papyrus, fantasy; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Drive Details</p>
  </div>

  <br>
  <br>
  <div class="container">

    <?php 
      $sql = "SELECT * FROM job_post WHERE id_jobpost='$_GET[id]'";
      $result = $conn->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
        ?>

        <table align="center">

          <tr style="font-size: 26px;">
            <td style="color: #053a5a;"><strong>Job Title</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['jobtitle']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 26px;">
            <td style="color: #053a5a;"><strong>Company webiste </strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['website']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 26px;">
            <td style="color: #053a5a;"><strong>Job Description</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td style="padding-left: 15px;">&nbsp;&nbsp;&nbsp;<?php echo $row['description']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 26px;">
            <td style="color: #053a5a;"><strong>Minimum Salary</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['minimumsalary']; ?> per Month</td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 26px;">
            <td style="color: #053a5a;"><strong>Maximum Salary</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['maximumsalary']; ?> per Month</td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 26px;">
            <td style="color: #053a5a;"><strong>Stream Eligible</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['stream']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 26px;">
            <td style="color: #053a5a;"><strong>Drive Type</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['jobtype']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td><a href="apply.php?id=<?php echo $row['id_jobpost']; ?>" style="background-color: #053a5a; border-color: transparent; border-radius: 5px; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 13px; color: white; font-size: 24px; text-decoration: none;">Apply</a></td>
          </tr>

        </table>

        <?php 
        }
      }
    ?>
  </div>
  <br><br>

  <?php
include('footer.php');
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
  
</html>