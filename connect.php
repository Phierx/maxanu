<?php
$name = filter_input(INPUT_POST, 'Name');
$lastname = filter_input(INPUT_POST, 'Lastname');
$phone = filter_input(INPUT_POST, 'Phone');
$email = filter_input(INPUT_POST, 'Email');
$pass = filter_input(INPUT_POST, 'Password');
if (!empty($name)){
if (!empty($lastname)){?>
<?php include 'connex/connex.php';?>
<?php
    
$conn = new mysqli($servername, $username, $password, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (Name, Lastname , Phone , Email, Password)
values ('$name','$lastname','$phone','$email','$pass')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
header("location: dashboard.php") ;
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "empty fields";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>