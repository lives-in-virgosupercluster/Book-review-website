<?php
   if(isset($_POST['cart'])){
    include_once("php/config.php");
    $isbn=$_COOKIE['isbn'];
    $username=$_COOKIE['username'];
    $sql = "Insert into cart values('$username',$isbn)";
    $result = mysqli_query($mysqli,$sql);
    header("location: modexplore.php");
   }
?>