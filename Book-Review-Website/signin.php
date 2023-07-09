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
    include_once("php/config.php");
    if(isset($_POST['submit'])) {
        // echo "You have successfully valid";  
        $user=$_POST['username'];
        $password=$_POST['password'];
        $sql = "SELECT * FROM credential WHERE Username='$user' AND Password='$password'";
        $result = mysqli_query($mysqli, $sql);
        if(mysqli_num_rows($result)==1){
            setcookie('username',$user,time()+300000);
           header("Location: modexplore.php");
           
        }
        else{
            echo "Username or password incorrect";
        }
    }
?>
<body>
    <div class = "class1">
    <h1>SIGN IN</h1>
    <form  name="myForm" id ="myForm" action="signin.php" method="post">
        <div class="forms" id="email">
            <input type="email" name="username" placeholder ="Enter your mail ID" required><br><span class="formerror"> </span>
        </div>
        <div class="forms" id="pass">
         <input type="password" name="password" placeholder = "Enter a valid password" required><br><span class="formerror"></span>
        </div>
        <div class = "check">
        <p><span><input type="checkbox" required style = "width: 65px; height:15px;"></span>I agree to the terms of services</p>
        </div>
        <input class="but" type="submit" name="submit" value="Sign In" style = "width: 74px; height:42px;">
        <hr>
        <p class = "or">OR</p>
        <input class="butt" type="submit" value="Login with Gmail Account" style = "width: 210px; height:40px;"></button>
        
    </form>
    </div>
    
</body>


</html>