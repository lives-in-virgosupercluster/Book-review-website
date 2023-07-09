<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>

    
    <link rel="stylesheet" href="CSS\modexplore.css">
</head>
<body>
    <div id="explore">
    <form action="pageinfo.php" method="post" id="frm1">
        <input type="text" name="bookname" id="bookname" class='inp' placeholder="Explore!">
        <input type="submit" value="Search" name="Search" class='btn'>
    </form>
    
        <div id="books" >

            <div id="1" class="items">
                <form action="pageinfo.php" id="idbook1" class="idbook" method="post">
                <img src="book-images/harrypotter.jpg" alt="HarryPotter" srcset="">
                <input type="hidden" name="book" value='HarryPotter'>
                <input type="submit" value="Read more" name="readmore" class='btn'>

</form>
            </div>
            <div id="2" class="items">
                <form action="pageinfo.php" method="post" class="idbook">
                <img src="book-images/LOTR.jpg" alt="LOTR" srcset="">
                <input type="hidden" name="book" value='LOTR'>
                <input type="submit" value="Read more" name="readmore" class='btn'>
</form>
            </div>
            <div id="3" class="items">
                <form action="pageinfo.php" method="post" class="idbook">
                <img src="book-images/midnightchildren.jpg" alt="midnight">
                <input type="hidden" name="book" value='midnightchildren'>
                <input type="submit" value="Read more" name="readmore" class='btn'>
</form>
            </div>
            <div id="4" class="items">
                <form action="pageinfo.php" method="post" class="idbook">
                <img src="book-images/oneindiangirl.jpg" alt="oneindiangirl">
                <input type="hidden" name="book" value='oneindiangirl'>
                <input type="submit" value="Read more" name="readmore" class='btn'>
</form>
            </div>
            <div id="5" class="items">
                <form action="pageinfo.php" method="post" class="idbook">
                <img src="book-images/trialbysilence.jpg" alt="trialbysilence">
                <input type="hidden" name="book" value='trialbysilence'>
                <input type="submit" value="Read more" name="readmore" class='btn'>
</form>
            </div>
            

        </div>

    

<form action="modexplore.php" method="post">
    <input type="submit" value="Back to Home" name="back" class='btn'>
</form>
<?php
if(isset($_POST['back'])){
    header("Location: index.php");
}
?>
</div>
</body>
</html>