<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Download E-notes</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body>
<!-- Nav Section Starts Here -->
<!-- Nav Section Ends Here -->
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
                <h1>All Complete Notes in one place</h1>
                <h2>For Third Semester Only</h2>
            </div>
        </div>
</header>
<section class = "about">
    <center class = "row"><h2>Download</h2></center>
    <hr>
        
        <div class = "row">
            
            <div class="about__box col span_1_of_2">
                <img src="images/webtechnology.jpg" alt="Subject Pic" class = "karnali__image">
            </div>
            <div class="about__box col span_1_of_2">
                <div class="about__box--heading">Web Technology</div>
                <div class="about__box--para">Get the pdf note of Web Technology</div>
                <a href="<?php echo SITEURL?>download_Pdf.php?file=webtechnology">Download</a>
            </div>
        </div>
        <div class = "row">
            
            <div class="about__box col span_1_of_2">
                <img src="images/logiccircuit.png" alt="Subject Pic" class = "karnali__image">
            </div>
            <div class="about__box col span_1_of_2">
                <div class="about__box--heading">Logic Circuit</div>
                <div class="about__box--para">Get the pdf note of Logic Circuit</div>
                <a href="<?php echo SITEURL?>download_Pdf.php?file=logiccircuit">Download</a>
            </div>
        </div>
        <div class = "row">
            
            <div class="about__box col span_1_of_2">
                <img src="images/maths.jpg" alt="Subject Pic" class = "karnali__image">
            </div>
            <div class="about__box col span_1_of_2">
                <div class="about__box--heading">Maths</div>
                <div class="about__box--para">Get the pdf note of Maths</div>
                <a href="<?php echo SITEURL?>download_Pdf.php?file=maths">Download</a>
            </div>
        </div>
        <div class = "row">
            
            <div class="about__box col span_1_of_2">
                <img src="images/probability.png" alt="Subject Pic" class = "karnali__image">
            </div>
            <div class="about__box col span_1_of_2">
                <div class="about__box--heading">Probability and Queueing Theory</div>
                <div class="about__box--para">Get the pdf note of Probability</div>
                <a href="<?php echo SITEURL?>download_Pdf.php?file=probability">Download</a>
            </div>
        </div>
        <div class = "row">
            
            <div class="about__box col span_1_of_2">
                <img src="images/ECI.jpg" alt="Subject Pic" class = "karnali__image">
            </div>
            <div class="about__box col span_1_of_2">
                <div class="about__box--heading">Electronic Circuit and Instrumentation</div>
                <div class="about__box--para">Get the pdf note of Electronic Circuit and Instrumentation</div>
                <a href="<?php echo SITEURL?>download_Pdf.php?file=eci">Download</a>
            </div>
        </div>
        <div class = "row">
            
            <div class="about__box col span_1_of_2">
                <img src="images/dsa.jpg" alt="Subject Pic" class = "karnali__image">
            </div>
            <div class="about__box col span_1_of_2">
                <div class="about__box--heading">Data Strucuture And Algorithm</div>
                <div class="about__box--para">Get the pdf note of Data Structure And Algorithm</div>
                <a href="<?php echo SITEURL?>download_Pdf.php?file=dsa">Download</a>
            </div>
        </div>
    </section>
<!-- Footer Section STarts here -->
<?php include('partials/footer.php');?>
<!-- Footer Section Ends Here -->
<script src="js/main.js"></script>
</body>
</html>