<html>
<style> 
body {
  background-image: url("welcome.jpg");
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
  margin: 30px 200;
}

</style>
<body>
</body>
<html>
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "Test";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

echo '</br>';

// first check if username already exists

$username = $_POST['uname'];
$sql = "SELECT username FROM User2 WHERE username = '$username' ";
$result = mysqli_query($conn,$sql);

$size = mysqli_num_rows($result);
if($size == 0){
       echo "<script type='text/javascript'>alert('username doesnot exist !');</script>";
       header("Location: http://localhost/test_App/login.php");
       return;
}
/// we need to verify if he entered the password correct
$sql = "SELECT password FROM User2 WHERE username = '$username' ";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
$password = $row[0];

if($password != md5($_POST['psw'])){
           echo "<script type='text/javascript'>alert('invalid password !');</script>";
           header("Location: http://localhost/test_App/login.php");
           return;
}
    $sql = "SELECT last_login_date FROM User2 WHERE username = '$username' ";   
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_row($result);
    $date = $row[0];
    echo "<script type='text/javascript'>alert('Welcome $username , your last login was on $date !');</script>";
     
    $date = date("Y-m-d");
    $sql  = "UPDATE User2 SET last_login_date = '$date' WHERE username = '$username'";
    if(!mysqli_query($conn,$sql)){
       echo "couldnot update date"; 
    }    
   
/*
will be needed to update last login time
$sql = "SELECT id from User";
$query = mysqli_query($conn,$sql);
$id = mysqli_num_rows($query) + 1;
$username = $_POST['uname'];
$psw = md5($_POST['psw']);
$email = $_POST['email'];
$date = date("Y-m-d");

$sql = "INSERT INTO User(id, username, password, email, registration_date) VALUES ('$id' , '$username' , '$psw' , '$email' , '$date' )";
if(mysqli_query($conn,$sql)){
    echo "</br>  insertion successful </br>";
}*/


?>
