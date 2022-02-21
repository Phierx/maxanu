<?php session_start();
$_SESSION['username'] ;
$_SESSION['UserID'] ;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include 'includes/head.php';?>
  
  </head>
  <body >
    
    
    <?php include 'includes/nav.php';?>
    <?php include 'includes/dashnav.php';?>
    <?php
    // Set session variables
    
    
    
    ?>
    
    <h2></h2>

    <div class="row">
      <div class="column left" >
        <div class="sidebar flow" style=" border: 2px #cfd13b solid;">
          <a class="active" onclick="pageClick('shop')" ><i class="fa fa-university" aria-hidden="true"></i> Shop</a>
          <a  onclick="pageClick('inventory')" class="inventory"><i class="fa fa-trello" aria-hidden="true"></i> Inventory</a>
          <a onclick="pageClick('messages')"><i class="fa fa-envelope-open"></i>   Messages</a>
          <a onclick="pageClick('settings')"><i class="fa fa-cogs"></i>   Settings</a>
        </div>
      </div>
      <div class="column right" >
      
      
        <div id="shop" > <?php include 'data.php';?> </div>
            <div id="inventory" > <?php include 'uploadpage.php';?> </div>
            <div id="messages" > </div>
            <div id="settings" > </div>
        
        
      </div>
    </div>


  </body>
</html>