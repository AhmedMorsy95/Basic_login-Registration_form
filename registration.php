<html>
<head>
<script type = "text/javascript">
  function validateEmail(email) 
  {

    var re = /\S+@\S+\.\S+/;
    if(re.test(email.value) == true){
       return;
    }
    alert("Invalid email");
    return false;
  }
</script>
<style> 
body {
  background-image: url("Firefox_wallpaper.png");
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
  margin: 30px 200;
}
input {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;

}
button{
    background: rgba(0,0,0,0);
    color: white;
    font-size: 19px;
    border-radius: 50%;
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
</style>
</head>

<body>
<h1> Registration </h1>
<div class = "img">
<form action = "connect.php" method = "post" onsubmit = "return validateEmail(email)">
    <br></br>
    <label uname="for"><b>User Name</b></label>
    <br></br>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br></br>
    <label for="psw"><b>Password</b></label>
    <br></br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br></br>
    <label for="email"><b>Email</b></label>
    <br></br>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br></br>
    <button type="register">Register</button>    

</form>
</div>
</body>
<html>
