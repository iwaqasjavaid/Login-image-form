<?php
   session_start();
     if(isset($_SESSION['uname']))
        {
            header('location:lgsesion.php');
        }else{

         echo " not found ";
     }
 //   echo "<script>alert(1);</script>";

?>
<html>
<head>
    <title> My Login Form </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="login-box">
    <img src="avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form method="post" action="controllers/c.php">
        <p>Email Address</p>
        <input type="email" id="us" name="username" placeholder="Enter Email" required>
        <p>Password</p>
        <input type="password" id="pswd" name="password" placeholder="Enter Password" required>
        <input type="submit" value="Login" name="btn">
        <a href="#" >Forget Password</a>
    </form>
</div>
</body>

</html>