<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoffeeReads</title>
   <link rel="stylesheet" href="CSS/login_style.css">

</head>
<?php
    $valid = 1;
    $nameErr="";
    $pwdErr="";
    $unErr="";
    $username="";
    $password="";
    if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (empty($username)) {
            $nameErr = "Name is required";
            $valid=0;
        }
        if (empty($password)) {
            $regnoErr = "Password is required";
            $valid=0;
        }
        else if (!preg_match("/[a-zA-Z0-9]{8,}/",$password)) {
            $regnoErr = "Invalid Password";
            $valid=0;
        }
        if($valid == 1){
            include_once("php/config.php");
            $sql = "SELECT Username FROM credential WHERE Username = '$username'";
            $result = mysqli_query($mysqli,$sql);
            if(mysqli_num_rows($result) > 0){
                $unErr="Username already exists.";
            }
            else{
                $sql="Insert into credential values('$username','$password')";
                $result = mysqli_query($mysqli,$sql);
                setcookie('username',$user,time()+300000);
                header("Location: modexplore.php");
            }
        }
    }
    
    //head to explore.
?>
<body>
<!-- <nav class = "navbar background">
        
        <ul class = "nav-list" >
            
            <div class="logo"><img src="image/logo.jpg" alt ="logo" ></div>
            <li> <a href="#Home"> Home </a></li>
            <li> <a href="#About"> About </a></li>
            <li> <a href="signup.php"> Login </a></li>
            <li> <a href="explore.html"> Explore </a></li>
        </ul>
       
        <div class="rightNav">
            <form action="display.php" method="post">
            <input type = "text" name="name" id="search">
            <button class ="btn btn-sm" name="search"> Search</button>
            </form>
        </div>
    </nav> -->
    <div class = "class1">
    <h1>SIGN UP</h1>
    <form  name="myForm" id ="myForm" action="signup.php" method="post">
        <div class="forms" id="email">
            <input type="email" name="username" placeholder ="Enter your mail ID" required><br><span class="formerror"> </span>
        </div>
        <div class="forms" id="pass">
         <input type="password" name="password" placeholder = "Enter a valid password" required><br><span class="formerror"></span>
        </div>
        <div class = "check">
        <p><span><input type="checkbox" required style = "width: 65px; height:15px;"></span>I agree to the terms of services</p>
        </div>
        <input class="but" type="submit" name="submit" value="SignUp" style = "width: 74px; height:42px;">
        <hr>
        <p class = "or">OR</p>
        <input class="butt" type="submit" value="Login with Gmail Account" style = "width: 210px; height:40px;"></button>
        <p>Do you have an account? <a href = "signin.php">Sign-in</a></p>
    </form>
    </div>
    
</body>


</html>