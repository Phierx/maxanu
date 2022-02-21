<?php session_start(); ?>

<?php include 'connex/connex.php';?>

<?php 
// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $logpassword = mysqli_real_escape_string($conn,$_POST['password']);

    if ($name != "" && $logpassword != ""){

        $sql_query = "select count(*) as cntUser from users where name='".$name."' and password='".$logpassword."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $name;
            header('Location: dashboard.php');
            echo "yes";
        }else{
            echo "Invalid username and password";
        }

    }

}

?>
