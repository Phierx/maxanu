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

      

      echo'<div class="tableround">';
      
        echo'<div class="inner"> <img class="imgtable" src="uploads/'. $row["image"].'" alt="Cinque Terre" width="600" height="400"></a></div>';
        
        echo'<div class="inner"> <h2> '. $row["title"].' </h2></div>';
        echo'<input style="display:none;" type="text" name="file" value='. $row["title"].' >';
        echo'<div class="inner"> <h2>'. $row["comment"].' </h2></div>';
        
        echo'<div class="inner"> <h2> Update </h2></div>';
      
        echo'<div class="inner"> <h2> '. $row["name"].' </h2></div>';
        echo'<div class="inner"> <h2> Publish </h2></div>';
      
        
        echo '  
				<form method="post" action="delete.php">
				<div style="display: none;">
				<input type="text"  name="image" value='. $row["image"].' >		
        
				</div>
        <button class="inner" name="delete" >
        <h2> Delete <i class="fa  fa-trash-o"></i></h2> 
        </button>
				</form>	';
        echo'</div>';

    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>