<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index_style.css">
    <title>Coffee Reads - take a break</title>
</head>
<body>
    <nav class = "navbar background">
        
        <ul class = "nav-list" >
            
            <div class="logo"><img src="image/logo.jpg" alt ="logo" ></div>
            <li> <a href="#Home"> Home </a></li>
            <li> <a href="#About"> About </a></li>
            <li> <a href="signup.php"> Login </a></li>
            <li> <a href="modexplore.php"> Explore </a></li>
            <li> <a href="viewcart.php">My Cart</a> </li>
        </ul>
       
        <div class="rightNav">
            <form action="pageinfo.php" method="post">
            <input type = "text" name="name" id="search">
            <button class ="btn btn-sm" name="Searchb"> Search</button>
            </form>
        </div>
    </nav>
    <section class="background firstSection">
        <div class="box-main" style="
                width: 614.5;
                height: 440px;
                ">
            <div class="firstHalf">
                <p class="text-big">COFFEE READS </p>
                <p class="text-ssmall">Make your day great with exclusive book collection brought to your home!!  Read books from your favorite author from the comfort of your home.</p>
                    <!-- <div class="buttons">
                        <button class="btn">PURCHASE</button>
                        <button class="btn">REVIEW</button>
                    </div> -->
            </div>
           
        </div>

    </section>
    
    <section class="secRight">
        <div class="paras" id='About'>
        <p class="sectionTag text-big">WHY CHOOSE COFFEE READS!!</p>
        <p class="sectionSubTag text-small">Since its fuse in 2005, Coffee Reads has cut a specialty for itself in the youngsters’ books section of the distributing business. We have some expertise in books implied for offspring of various ages.The wide scope of books offered by us incorporates fantasies, moral stories, showed storybooks, reference books, general learning books, sentence structure books, shading books, action books, sticker books, and some more. Every one of these books is accessible in both English and Hindi.</p>
               </div>
               <div class="thumbnail">
                <img src="image/wire.jpeg" alt="lights image" class="imgFluid" style="
                width:270px;
                ">
               </div>
               
    </section>
    <section class="secLeft">
        <div class="paras">
        <p class="sectionTag text-big">OUR VISION</p>
        <p class="sectionSubTag text-small">Our point is to give significant, charming, and also animating substance to youngsters that go much past their normal course books. With this point in view, we treat each book as a work of adoration. Every one of our books is broadly examined, attentively composed, and delightfully planned.
            Development and experimentation are indispensable to our methodology towards books. Our broad gathering of books– picture books, sticker books, story and sticker books, 3D Books, spring up books, innovative idea books, curiosity books, topic-based books, movement books, and so on – are a declaration to this methodology. This encourages us in making energizing and testing items for youngsters</p>
               </div>
               <div class="thumbnail">
                <img src="image/coffee2.jpeg" alt="lights image" class="imgFluid" style="
                width:270px;
                ">
               </div>
               
    </section>
    
    <section class="contact">
        <h2 class="text-center">Contact Us</h2>
        <div class="form" style="
        margin-left: 460px;
        margin-top:20px;
        ">
            <input type="text" name="name" id="name" placeholder="Enter your name"><br>
            <br>
            <input type="text" name="phno" id="phno" placeholder="Enter your phone number"><br>
            <br>
            <input type="text" name="email" id="email" placeholder="Enter your mail ID"><br>
            <br>
            <button class="btn btn-dark">Submit</button>
        </div>
    </section>
    <footer class="background">
        <p class="text-footer">
            copyright &copy; 2027 www.coffeeReads.com - All rights reserved
        </p>
    </footer>
    
</body>
</html>
 