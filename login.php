<html>
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
    background-color: #A52A2A;
    border-radius: 50%;
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
</style>
<body>
<h1> login </h1>
<form action = "exists.php" method = "post">
    <br></br>
    <label uname="for"><b>User Name</b></label>
    <br></br>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br></br>
    <label for="psw"><b>Password</b></label>
    <br></br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br></br>
    <button type="login">login</button>
</form>
</body>
<html>
