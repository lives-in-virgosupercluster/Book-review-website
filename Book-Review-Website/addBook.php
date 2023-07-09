
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeReads</title>
    <link rel="stylesheet" href="CSS/addBook_style.css">
</head>

<body>
    
    <div class="form">
    <h1>Add Book Form</h1>
    <form action="addBook.php" class="input" method="post">
        
        <input type="text" name="name" id="name" placeholder="Enter Book Name" class="input-items">
        <input type="text" name="isbn" id="isbn" placeholder="Enter ISBN number" class="input-items">
        <input type="text" name="author" id="author" placeholder="Enter Author Name" class="input-items">
        <input type="text" name="cost" id="cost" placeholder="Enter the cost of the book" class="input-items">
        <input type="submit" class="btn" name="submit">
        
    </form>
    </div>
        <!-- </div> -->
    
</body>
<?php
    include_once("php/config.php");
    if(isset($_POST['submit'])){
        echo"kuchk";
        $namebook=$_POST['name'];
        $namebook = str_replace(' ', '', $namebook);
        $author=$_POST['author'];
        $author = str_replace(' ', '', $author);
        $isbn=$_POST['isbn'];
        $isbn = str_replace(' ', '', $isbn);
        
        $cost=$_POST['cost'];
        $sql = "INSERT INTO bookinfo VALUES ($isbn, '$namebook', '$author',$cost)";
        if (mysqli_query($mysqli, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    }
?>
</html>