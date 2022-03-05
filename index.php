<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>BE-IT Notes</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
<!-- Start of Hero Section -->
    <header class = "home">
        
        <?php include('partials/menu.php');?>
            <?php
                if(isset($_SESSION['login']) && isset($_SESSION['user']))
                {
                    echo "<h4 style='color:green';>Welcome </h4>" . $_SESSION['user'];
                    echo "<span id = 'log' style = 'visibility:hidden;'>truee</span>";
                }
                else
                {
                    echo "<span id = 'log' style='visibility:hidden;'>falsee</span>";
                }
                ?>
               
        <div class="home__box text-center">
            <div class="home__box--text">
                <h1>BE-IT Notes</h1>
                <h2>Get the latest e-notes of engineering for free.</h2>
                
            </div>
            <a href="signup.php" class = "btn btn-full" style="color: white;">Sign Up Now</a>
        </div>
    </header>
<!-- End of Hero Section -->

<!-- Start of Course Section -->
    <section class = "about">
        <h2 class = "text-black text-center">Our Courses</h2>
        <hr>
        <div class = "row">
            <div class="about__box col span_1_of_2">
                <img src="images/book3.jpg" alt="Writing" class = "karnali__image">
            </div>
            <div class="about__box col span_1_of_2">
                <div class="about__box--heading text-white">New in programming</div>
                <div class="about__box--para"><p>This course will help you to grab the fundamentals of C programming and help you to write complex programming and you do not required any experience.</p></div>
                <a href="#"class = "btn btn-ghost">Read More</a>
            </div>
        </div>
    </section>
<!-- End of Course Section -->

<!-- Start of Footer Sectoin -->
   <?php include('partials/footer.php');?>
<!-- End of Footer Section -->
<script src="js/main.js"async></script>
</body>
</html>