<?php
 session_start();
  if(isset($_SESSION['uname']))
  {
    echo  $_SESSION['uname'];

}else{

      header('location:img.php');

  }


if(isset($_REQUEST['btn']))
{
    session_unset();
    session_destroy();
    header('location:img.php');
}

?>
<html>
<head>
    <title> Session page</title>
</head>
<body>

<form action="" method="post">
    <button name="btn">LOGOUT</button>
</form>

</body>
</html>
