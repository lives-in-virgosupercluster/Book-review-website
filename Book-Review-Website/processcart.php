<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function msg(){
            alert("Processing Transaction");
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/processcart.css">
</head>
<body>
    <div class="inputform">
        <fieldset>
    <form action="processcart.php" method="post">
     <label>   Name:  <input type="text" name="name" id=""></label><br>
     <label>   phno:  <input type="text" name="" id=""></label><br>
     <label>  Address line-1  <input type="text" name="" id=""></label><br>
     <label>  Address line-2   <input type="text" name="" id=""></label><br>
     <label>  Pincode  <input type="text" name="" id=""></label><br>
      <input type="submit" value="Process Transaction" name='submit' onclick="msg()" class='btn'>
    </form>
</fieldset>
    </div>
    
</body>
<?php
    include_once("php/config.php");
    if(isset($_POST['submit'])){
        $username = $_COOKIE["username"];
        $sql = "Delete from cart where username = '$username'";
        $result = mysqli_query($mysqli,$sql);
        
        //echo '<script>console.log("harsh");</script>';
        sleep(1);
        header("location: viewcart.php");
    }
?>
</html>