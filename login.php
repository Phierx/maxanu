<?php session_start(); ?>

<?php include 'connex/connex.php';?>

<?php 
// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
$errors = array();
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

if (isset($_POST['submit'])) {
     
    // Data sanitization to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $logpassword = mysqli_real_escape_string($conn, $_POST['password']);
      
       
        $query = "SELECT * FROM users WHERE name='$name' AND password='$logpassword'";            
        $results = mysqli_query($conn, $query);

        $IDQuery = "SELECT UserID FROM users WHERE name='$name' AND password='$logpassword'"; 
        $IDresults = mysqli_query($conn, $IDQuery);
        $row = mysqli_fetch_row($IDresults);
        $UserID = $row[0] ;
            
        // $results = 1 means that one user with the
        // entered username exists
        if (mysqli_num_rows($results) == 1) {
          
            // Storing username in session variable
            $_SESSION['username'] = $name;
            $_SESSION['UserID'] = $UserID;

            // Page on which the user is sent
            // to after logging in
            echo "yes ";
            echo $_SESSION['username'];
            echo $_SESSION['UserID'];
            // header('location: login.php');
           header('location: dashboard.php');
            
        }
        else {
             
            // If the username and password doesn't match
            echo "Invalid username and password";
        }
   
}

?>
