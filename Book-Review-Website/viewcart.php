<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/viewcart.css">
</head>
<body>
    <div id="cart">
    <h1>MY CART</h1>

        <?php
            include_once("php/config.php");
            
            $username = $_COOKIE["username"]; // or whatever the name is.
            $sql = "select * from cart where username = '$username'";
            $result = mysqli_query($mysqli,$sql);
            $tot=0;
            echo "<table id='items' border='2px'>";
            echo "<tr>".'<th>'.'Book Name'.'</th>';
            echo "<th>".'Author'.'</th>';
            echo '<th>'.'Cost'.'</th>';
            echo '</tr>';
            while($data = mysqli_fetch_array($result)){
                $i = $data['isbn'];
                $s = "select * from bookinfo where ISBN = $i";
                $res = mysqli_query($mysqli,$s);
               
                while($dt = mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>".$dt['Name']."</td>";
                    echo "<td>".$dt['Author']."</td>";
                    echo "<td>".$dt['Cost']."</td>";
                    echo "</tr>";
                    $tot += $dt['Cost'];
                }
                
            }
            echo"</table>";
            echo "<p id='para'> Total cost is ".$tot." rupees. </p>";
            
        ?>
        <form action="processcart.php" method="post">
            <input type="submit" value="Buy Now" name='buy'class='btn'>
        </form>
        <form action="viewcart.php" method='post'>
            <input type="submit" value="Back to Home" name="home" class='btn'>
        </form>
   </div>
   <?php
   if(isset($_POST['home'])){
    header("Location: index.php");
   }
   ?>
        
</body>
</html>