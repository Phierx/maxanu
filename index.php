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
              <form action="#">
                <div class="row">
                  <i class="fa fa-user"></i>
                  <input type="text" placeholder="Email or Phone" required>
                </div>
                <div class="row">
                  <i class="fa fa-lock"></i>
                  <input type="password" placeholder="Password" required>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                  <input type="submit" value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
              </form>
            </div>
          </div>
      </div>
    </div>


  </body>
</html>
