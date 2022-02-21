<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include 'includes/head.php';?>
  </head>
  <body>
    
  <?php include 'includes/nav.php';?>
  <?php include 'includes/subnav.php';?>
   
     
    
    <h2></h2>

    <div class="row">
      <div class="column left half main" style="background-color:#aaa;">
        <img src="image/bag.jpg" class="mainimage" alt="">
      </div>

      <div class="column right half main mainbg" style=" text-align: center; background-color:rgb(122, 122, 122);">
        <div class="flow">
          <div class="container">
            <div class="wrapper">
              <div class="title"><span>Welcome Back</span></div>
              <form action="login.php" method="post">
                <div class="row">
                  <i class="fa fa-user"></i>
                  <input name="name" type="text" placeholder="name" >
                </div>
                <div class="row">
                  <i class="fa fa-lock"></i>
                  <input name="password" type="password" placeholder="Password" >
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                  <input name="submit" type="submit" value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
              </form>
            </div>
          </div>
      </div>
    </div>


  </body>
</html>
