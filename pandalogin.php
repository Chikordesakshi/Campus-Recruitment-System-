
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panda Login</title>
    <link rel="stylesheet" href="loginstylesheetpanda.css">
</head>
<body>
<br><br><br>
    <div class="panda">
        <div class="ear"></div>
        <div class="face">
            <div class="eye-shade"></div>
            <div class="eye-white">
                <div class="eye-ball"></div>
            </div>
            <div class="eye-shade rgt"></div>
            <div class="eye-white rgt">
                <div class="eye-ball"></div>
            </div>
            <div class="nose"></div>
            <div class="mouth"></div>
        </div>
        <div class="body"> </div>
        <div class="foot">
            <div class="finger"></div>
        </div>
        <div class="foot rgt">
            <div class="finger"></div>
        </div>
    </div>
    <form method="post" action="checklogin.php">
        <div class="hand"></div>
        <div class="hand rgt"></div>
        <h1>Login Here !</h1>
        <div class="form-group">
            <input type="email"required="required" class="form-control" />
            <label class="form-label" type="email" id="email" name="email" placeholder="Email" required="">Email Address  </label>
        </div>
        <div class="form-group">
            <input id="password" type="password" required="required" class="form-control" />
            <label class="form-label">Password</label>
          <!--  <p class="alert">Invalid Credentials..!!</p>-->
            <p><a href="forgot-password.php" style="font-size: 22px; color: red;">Forgot Password? Click Here...</a></p>
           <br>
            <button class="btn" type="submit" style="font-size: 18px;">Submit</button>
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
                <p style="text-align: center; color: red; font-size: 28px;">Invalid Email or Password</p>
              </div>
              <?php
              unset($_SESSION['loginError']);}
              ?>

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
                <p style="text-align: center; color: red; font-size: 28px;">Invalid Email or Password</p>
              </div>
              <?php
              unset($_SESSION['loginError']);}
              ?>
            </form>
        </div>
      </div>
    <br>

            
    </form>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script id="rendered-js">
        $('#password').focusin(function() {
            $('form').addClass('up');
        });
        $('#password').focusout(function() {
            $('form').removeClass('up');
        });

        // Panda Eye move
        $(document).on("mousemove", function(event) {
            var dw = $(document).width() / 15;
            var dh = $(document).height() / 15;
            var x = event.pageX / dw;
            var y = event.pageY / dh;
            $('.eye-ball').css({
                width: x,
                height: y
            });

        });

        // validation


        $('.btn').click(function() {
            $('form').addClass('wrong-entry');
            setTimeout(function() {
                $('form').removeClass('wrong-entry');
            }, 3000);
        });
        
    </script>
    
</body>
</html>