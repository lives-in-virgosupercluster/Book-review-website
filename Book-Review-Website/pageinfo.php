<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    $isbn="";
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/pageinfo.css">
</head>
<body>
    <div id="info">
        <?php
            include_once("php/config.php");
            echo"<div class='bmk'>";
            if(isset($_POST["Search"])){
                $bookname=$_POST['bookname'];
                echo'<div id="newimg">';
                $sm="book-images/".$bookname.'.jpg';
                echo'<img src='."$sm".'>';
                echo'</div>';

                $sql="select * from bookinfo where Name = '$bookname'";
                $result = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($result)>0){
                // echo $result['isbn']." ".$result['name']." ".$result["author"]." ".$result['cost'];
                    $row = mysqli_fetch_assoc($result);
                    $isbn=$row['ISBN'];
                    setcookie('isbn',$isbn,time()+300000);
                    echo'<table class="record" border=2px>';
                    echo'<th>'.'ISBN'.'</th>';
                    echo'<th>'.'Name'.'</th>';
                    echo'<th>'.'Author'.'</th>';
                    echo'<th>'.'Cost'.'</th>';
                    echo'<tr>'.'<td>'.$row['ISBN'].'</td>';
                    echo'<td>'.$row['Name'].'</td>';
                    echo'<td>'.$row['Author'].'</td>';
                    echo'<td>'.$row['Cost'].'</td>';
                    echo'</tr>';
                    echo'</table>';
                }
                $myfile = fopen("synopsis/".$bookname.".txt", "r") or die("Unable to open file!");
                // Output one line until end-of-file
                echo"<h2>"."Synopsis"."</h2>";
                while(!feof($myfile)) {
                    echo "<p class='para'>".fgets($myfile) ."</p>";
                }
                fclose($myfile);
            }

            if(isset($_POST['readmore'])){
                $bookname=$_POST['book'];
                echo'<div id="newimg">';
                $sm="book-images/".$bookname.'.jpg';
                echo'<img src='."$sm".'>';
                echo'</div>';
                $sql="select * from bookinfo where Name = '$bookname'";
                $result = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($result)>0){
                // echo $result['isbn']." ".$result['name']." ".$result["author"]." ".$result['cost'];
                    $row = mysqli_fetch_assoc($result);
                    $isbn=$row['ISBN'];
                   // $isbn=$row['ISBN'];
                    setcookie('isbn',$isbn,time()+300000);
                    
                    echo'<table class="record" border=2px>';
                    echo'<th>'.'ISBN'.'</th>';
                    echo'<th>'.'Name'.'</th>';
                    echo'<th>'.'Author'.'</th>';
                    echo'<th>'.'Cost'.'</th>';
                    echo'<tr>'.'<td>'.$row['ISBN'].'</td>';
                    echo'<td>'.$row['Name'].'</td>';
                    echo'<td>'.$row['Author'].'</td>';
                    echo'<td>'.$row['Cost'].'</td>';
                    echo'</tr>';
                    echo'</table>';
                }
                $myfile = fopen("synopsis/".$bookname.".txt", "r") or die("Unable to open file!");
                // Output one line until end-of-file
                echo"<h2>"."Synopsis"."</h2>";
                while(!feof($myfile)) {
                    echo "<p class='para'>".fgets($myfile) ."</p>";
                }
                fclose($myfile);    
            }
            if(isset($_POST['Searchb'])){
                $bookname=$_POST['name'];
                // $bookname=$_POST['bookname'];
                echo'<div id="newimg">';
                $sm="book-images/".$bookname.'.jpg';
                echo'<img src='."$sm".'>';
                echo'</div>';
                $sql="select * from bookinfo where Name = '$bookname'";
                $result = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($result)>0){
                    // echo $result['isbn']." ".$result['name']." ".$result["author"]." ".$result['cost'];
                    $row = mysqli_fetch_assoc($result);
                    $isbn=$row['ISBN'];
                    setcookie('isbn',$isbn,time()+300000);
                    
                    echo'<table class="record" border=2px>';
                    echo'<th>'.'ISBN'.'</th>';
                    echo'<th>'.'Name'.'</th>';
                    echo'<th>'.'Author'.'</th>';
                    echo'<th>'.'Cost'.'</th>';
                    echo'<tr>'.'<td>'.$row['ISBN'].'</td>';
                    echo'<td>'.$row['Name'].'</td>';
                    echo'<td>'.$row['Author'].'</td>';
                    echo'<td>'.$row['Cost'].'</td>';
                    echo'</tr>';
                    echo'</table>';
                }
                $myfile = fopen("synopsis/".$bookname.".txt", "r") or die("Unable to open file!");
                // Output one line until end-of-file
                echo"<h2>"."Synopsis"."</h2>";
                while(!feof($myfile)) {
                    echo "<p class='para'>".fgets($myfile) ."</p>";
                }
                fclose($myfile);
            }
            echo'</div>';
        ?>

        <!-- form with text area -->
    </div>
    <form action="addrev.php" method="post">
        <input type="hidden" name="isbn" value=<?php echo $isbn?>>
        <input type="submit" value="Show reviews" name="Addreview" class='btn'>
    </form>
    <form action="add2cart.php" method="post">
        <input type="submit" value="Add to Cart" name='cart'class='btn'>
    </form>
    <!-- <div id="review">
    <h3>Post a Review</h3>
        <form action="pageinfo.php" method="post" id="revform">
            <textarea name="message" id="" cols="30" rows="5" id="texta"></textarea><br>
            <input type="submit" value="Add Review" name="Addreview" class='btn'>
        </form>
    
        
    </div> -->
    
</body>
</html>