<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include 'includes/head.php';?>
  </head>
  <body>
    
  <?php include 'includes/nav.php';?>
  <?php include 'connex/connex.php';?>
   
     
    
    <h2></h2>

    <div class="row">
      

      <div class="column full mainbg" style=" text-align: center; background-color:rgb(122, 122, 122);">
        <div class="flow">
          <div class="container" style="width: 800px;">
            <div class="wrapper">
              <div class="title"><span>SignUp Form</span></div>
              <form method="post" action="connect.php">
                <div class="row">
                  <i class="fa fa-user"></i>
                  <input type="text" name="Name" placeholder="Name" required>
                </div>
                <div class="row">
                  <i class="fa fa-user"></i>
                  <input type="text" name="Lastname" placeholder="Last Name" required>
                </div>
                <div class="row">
                  <i class="fa fa-phone"></i>
                  <input type="phone" name="Phone" placeholder="phone" required>
                </div>
                <div class="row">
                  <i class="fa fa-lock"></i>
                  <input type="password" name="Password" placeholder="Password" required>
                </div>
                <div class="row">
                <i class="fa fa-envelope"></i>
                  <input type="Email" name="Email" placeholder="Email" required>
                </div>
                <div class="row button">
                  <input type="submit" value="Save">
                </div>
                  </br>
                  </br>
                <div class="row button"style="border:#347bf7;" >
                <i class="fa fa-facebook-f" style="background: #1876f2;"></i> <input type="submit" style="background: #346fbd;" value="Use Facebook">
                </div>
                <div class="row button">
                <i class="fa fa-google" style="background:#e34133;"></i><input type="submit" style="background:#df5448;;" value="Use Gmail">
                </div>
                
                </br>
              </form>
            </div>
          </div>
      </div>
    </div>


  </body>
</html>
