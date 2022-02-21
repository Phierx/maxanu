<?php include 'connex/connex.php';?>

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM `imagesup` WHERE 1";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      


      echo'<div class="responsive">';
      echo'<div class="gallery">';
      echo'<a target="_blank" href="uploads/'. $row["image"].'">';
      echo'<img src="uploads/'. $row["image"].'" alt="Cinque Terre" width="600" height="400">';
      echo'</a>';
      echo'<div class="desc">'. $row["title"].'</div>';
      echo'</div>';
      echo'</div>';


    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>