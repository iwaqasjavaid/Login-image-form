<?php
include "../models/loginDAL.php";
$obj = new loginDAL();

 if(isset($_POST['btn']))
 {
   // echo "hello";

   $us=$_POST['username'];
   $pswd=$_POST['password'];

//echo $us;
//echo $pswd;

    $res=$obj->login();
    $row=mysqli_fetch_assoc($res);
     //  print_r($row);
//echo "<br>";
//     $id=$row[0];
//    echo "<br>";
//    echo $us;
//    echo "<br>";
//    echo $pswd;
//    echo "<br>";
    $usn=$row['username'];
//     echo "<br>";
     $pswd1=$row['password'];

 //   header('location:../lgsesion.php?u=$pswd');

    if($us==$usn && $pswd==$pswd1){
        session_start();
        $_SESSION['uname']=$us;
        header('location:../lgsesion.php');
    } else{
        echo "not matching";
    }


//  echo $id;
//  echo $usn;
//  echo $pswd1;

}