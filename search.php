<?php
session_start();
require_once("db.php");
?>

<html>

  <head>

    <title>Search for Jobs</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

  </head>
  <body>
  <section>
  <div class="container">
  <div class="row">
  <header>
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
                <li class="scroll-to-section"><a href="index.php"> Drives</a></li>
                <li class="scroll-to-section"><a href="user/dashboard.php" >Dashboard</a></li>
                <li class="scroll-to-section"><a href="search.php" class="active">Search </a></li>
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
                      <li class="scroll-to-section"><a href="homepage_1.php">Home</a></li>
                      <li class="scroll-to-section"><a href="company/dashboard.php" class="active">Dashboard</a></li>
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

  <br>  <br>

  <br>  <br>

  <br>  <br>

  <div style="background-color: #053a5a; height: 180px;">
    <p style="font-size: 34px; color: white; text-align: center; padding-top: 30px;">Search a Job</p>
    <p style="font-size: 34px; color: aqua; text-align: center;">Find Your Dream Job</p>
  </div>

  <br>  <br>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <form id="myForm" class="form-inline">

        <div class="form-group" style="font-size: 18px; margin-left: -20px;">
          <label>stream : </label>
          <select id="stream" class="form-control" style="font-size: 16px;">
            <option value="" selected="">Select stream</option>
            <?php 
              $sql = "SELECT DISTINCT(stream) FROM job_post WHERE stream IS NOT NULL ORDER BY stream";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo "<option value='".$row['stream']."'>".$row['stream']."</option>";
                }
              }
            ?>
          </select>
        </div>

        <div class="form-group" style="font-size: 18px; margin-left: 20px;"">
          <label>jobtype : </label>
          <select id="jobtype" class="form-control" style="font-size: 16px;">
            <option value="" selected="">Select jobtype </option>
            <?php 
              $sql = "SELECT DISTINCT(jobtype) FROM job_post WHERE jobtype IS NOT NULL";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo "<option value='".$row['jobtype']."'>".$row['jobtype']."</option>";
                }
              }
            ?>
          </select>
        </div>

        <button class="btn" style="font-size: 16px; background-color: #053a5a; color: white; margin-left: 10px; width: 100px;">Search</button>

        </form>

        <div class="row" style="margin-top: 5%;">
          <div class="table-responsive">
            <table id="myTable" class="table">
              <thead style="color: #053a5a; font-size: 18px;">
                <th>Job Name</th>
                <th>Job Description</th>
                <th>Minimum Salary</th>
                <th>Maximum Salary</th>
                <th>stream</th>
                <th>jobtype</th>
                <th>Action</th>
              </thead>
              <tbody style="color: black; font-size: 18px;">

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
  </section>
  <?php
  include('footer.php');
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
    $(function() {
      var oTable = $('#myTable').DataTable({
        "autoWidth" : false,
        "ajax" : {
          "url" : "refresh_job_search.php",
          "dataSrc" : "",
          "data" : function (d) {
            d.stream = $("#stream").val();
            d.jobtype = $("#jobtype").val();
          }
        }
      });

      $("#myForm").on("submit", function(e) {
        e.preventDefault();
        oTable.ajax.reload( null, false);
      })

    });
  </script>
    
  </font>
  </body>
</html>