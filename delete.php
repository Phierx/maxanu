<?php

$image = $_POST['image'];



?>

<?php include 'connex/connex.php';?>

<?php 
// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{	
	
	$sql = "	
	DELETE FROM imagesup
	WHERE image = '$image'
	"; 
	echo $sql;
	
if ($conn->query($sql))
{
echo "delete sucessfully";
header("location: dashboard.php") ;
}
else
{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();

}

?>