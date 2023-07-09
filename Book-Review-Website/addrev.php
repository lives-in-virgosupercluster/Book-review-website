<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/addrev.css">
</head>
<body>
<div id="review">
    <h2>Post a Review</h2>
        <form action="addrev.php" method="post" id="revform">
            <textarea name="message" id="" cols="30" rows="5" id="texta"></textarea><br>
            <input type="submit" value="Post Review" name="Postreview" class='btn'>
        </form>
    
        <?php    
            include_once("php/config.php");
          
            if(isset($_POST['Addreview'])){
            $isbn=$_POST['isbn'];
          // echo $isbn;
            setcookie('isbn',$isbn,time()+300000);
           
           
            $sql = "Select username , message from review where isbn = '$isbn' LIMIT 5";
            $result = mysqli_query($mysqli,$sql);
            // echo "<table id='rev'>";
           
            echo "<div id='revmssg'>";
            echo "<h2>Previous Reviews</h2>";
            while($data = mysqli_fetch_array($result)){
                echo "<div class='items'>";
                    echo $data['username'].": ".$data['message'];
                echo "</div>";
            }
            // echo "</table>";
            echo '</div>';
        }
        if(isset($_POST['Postreview'])){
            $username=$_COOKIE['username'];
            $mssg=$_POST['message'];
            $isbn=$_COOKIE['isbn'];
           
            $sql="insert into `review` values($isbn,'$username','$mssg')";
            $mysql=mysqli_query($mysqli,$sql);
            //echo"harsh";
            //echo mysql_error();
            $sql = "Select username , message from review where isbn = '$isbn' LIMIT 5";
            $result = mysqli_query($mysqli,$sql);
            // echo "<table id='rev'>";
           
            echo "<div id='revmssg'>";
            echo "<h2>Previous Reviews</h2>";
            while($data = mysqli_fetch_array($result)){
                echo "<div class='items'>";
                    echo $data['username'].": ".$data['message'];
                echo "</div>";
            }
            // echo "</table>";
            echo '</div>';
            
        }
        
        ?>
        <form action="addrev.php" method="post">
            <input type="submit" value="Back to Explore" name="explore" class='btn'>
        </form>
        <?php
        if(isset($_POST['explore'])){
            header("Location: modexplore.php");
        }
        ?>
    </div>

    
</body>
</html>