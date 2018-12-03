<html>
<head>
<script type = "text/javascript">
  function go(){
     var values = $(this).serialize();
        $.ajax({
        url: "connect.php",
        type: "post",
        data: values ,
        success: function (response) {
           // you will get response from your php page (what you echo or print)                 

        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }

    });
  }

  function validateEmail(email) 
  {
    var re = /\S+@\S+\.\S+/;
    if(re.test(email.value) == true){
       return go();
    }
    alert("Invalid email");
    return false;
  }

</script>
</head>

<body>
<h1> Registration </h1>
<form onsubmit = "return validateEmail(email)" action = "connect.php" method = "post">
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
    <button type="register">register</button>
    

</form>
</body>
<html>
