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

    <title>Placement&Internship</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>

      .container1 {
        position: relative;
        width: 100%;
        margin-top: 0;
      }

      .container1 img {
        width: 100%;
        height: auto;
      }

      .container1 .btn1 {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #7ec0ca;
        color: black;
        font-size: 24px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }

    </style>

  </head>

  <body>

  
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
            <!--<li style="padding-right: 25px;"><a href="search.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Search for Jobs</a></li>-->
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
<li class="scroll-to-section"><a href="homepage_1.php" class="active">Home</a></li>
<li class="scroll-to-section"><a href="mainregister.php">Register</a></li>
<li class="scroll-to-section">
<div class="main-menu">
<ul class="menu-list"><div class="border-first-button">
<li><a href="mainlogin.php"> Login</a>
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
  <div align="center">

    <form action ="" method = "post">

      <input style="font-size: 18px; color: black; padding: 7px; border: 1px solid black; border-radius: 5px;" name="search" type="text" size="30" placeholder="Search By Job Title E.g Accounting"/>

      <input type="submit" style="font-size: 18px; color: white; background-color: #053a5a; border-color: transparent; border-radius: 5px; width: 150px; height: 45px;" value="Search" />

    </form> 

    <br>

    <?php 

    $output = '';

    if(isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = mysqli_query($conn,"SELECT * FROM job_post WHERE jobtitle LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);

    if($count == 0){
    ?>
    <p style="font-size: 22px; color: #053a5a;">No Results Found!</p> 
    <?php
    }else{

    ?>

    <div class="container">
      <div class="row">
        <table style="width: 100%;">
          <tr>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Job Title</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Job Description</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Stream</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Maximum Salary</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Maximum Salary</td>
          </tr>
        </table>
      </div>
    </div>

  </div>

  <?php

  while ($row = mysqli_fetch_array($query)) {
  ?>

  <div class="container">
    <div class="row">
      <table style="width: 100%;" border="1" class="table-striped">

        <tr>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><a href="apply-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><?php echo $row['description']; ?></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><?php echo $row['stream']; ?></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><?php echo $row['minimumsalary']; ?> per Month</td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><?php echo $row['maximumsalary']; ?> per Month</td>
        </tr>

      </table>
    </div>
  </div>

        <?php 
      }
    }
  }
  ?>

  <br>
  </div>
  </div>

  <section>
    <div class="container">
      <div class="row">
      <br><br><br>
        <h1 class="text-center" style="background-image: linear-gradient( 109.6deg,  rgba(62,161,219,1) 11.2%, rgba(93,52,236,1) 100.2% ); color: white; border-color: transparent; border-radius: 5px; height: 80px;font-family: Copperplate, Papyrus, fantasy;">Latest Drives </h1>
        <br>
        <br>
        <br>

        <?php 

        $sql = "SELECT * FROM job_post ORDER BY id_jobpost DESC limit 5";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
        $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
        $result1 = $conn->query($sql1);
        if($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) 
        {

        ?>

        <div align="left">

        <h4 style="font-size: 28px;"><a href="apply-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a><span class="pull-right" style="font-size: 20px;">Rs. <strong><?php echo $row['maximumsalary']; ?> per Month</span></strong></h4>

        <div style="font-size: 19px;">
        <div><strong>Company Name : </strong><?php echo $row1['companyname']; ?> | <strong>Head Office : </strong><?php echo $row1['headofficecity']; ?> | <strong>Stream Eligible: </strong><?php echo $row['stream']; ?></div>
        </div>

        <hr style="border-color:black;">

        </div>

        <?php
        }
        }
        }
        }
        ?>

      </div>
    </div>
  </section>

  <br><br>
  <?php
  include('footer.php');
  ?>
  </body>
</html>