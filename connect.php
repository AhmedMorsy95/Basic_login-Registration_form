

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
echo "Connected successfully";

echo '</br>';

// first check if username already exists

$sql = "SELECT username FROM User2";
$result = mysqli_query($conn,$sql);
$rows[] = array();

while ( $row = mysqli_fetch_assoc($result) ) {
    if($row['username'] == $_POST['uname']){
         echo "<script type='text/javascript'>alert('username used , pick another one please !');</script>";
         return;
    }
    //echo $row['username'];
    $rows[] = $row;
}

// check if email already exists

$sql = "SELECT email FROM User2";
$result = mysqli_query($conn,$sql);
$rows[] = array();

while ( $row = mysqli_fetch_assoc($result) ) {
    if($row['email'] == $_POST['email']){
         echo "<script type='text/javascript'>alert('email is already registered !');</script>";
         return;
    }
    //echo $row['email'];
    $rows[] = $row;
}

// if both donot exist , insert into table
$sql = "SELECT MAX(id) from User2";
$query = mysqli_query($conn,$sql);	
$row=mysqli_fetch_row($query);
$max = $row[0];
$id = $max +1;
$username = $_POST['uname'];
$psw = md5($_POST['psw']);
$email = $_POST['email'];
$date = date("Y-m-d");

$sql = "INSERT INTO User2( username, password, email, registration_date,last_login_date) VALUES ('$username' , '$psw' , '$email' , '$date' , '$date' )";
//echo $sql;
if(mysqli_query($conn,$sql)){
    echo "</br>  insertion successful </br>";
}

?>


