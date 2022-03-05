<?php include('config/constants.php');?>

<head>
    <title>Document</title>
    
</head>
    <nav>
      
        <ul class = "home__nav text-center" >
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <?php
                if(isset($_SESSION['login']) && isset($_SESSION['user']))
                {
                    echo " <li><a href='download.php'>Download</a><li>";
                }
                else
                {
                    echo  "<li><a href='#' id = 'open'>Download</a><li>";
                }
                ?>
            
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
           
        </ul>
    </nav>
<div class="modal-container" id = "modal_containerr">
    <div class="modal">
        <h2 style="margin-bottom:10px;"class = "text-white">Login</h2>
        <hr>
        <form action="logins/log.php" method = "post">
                
                <label for="email"class = "text-white">Email: </label>
                <input type="email" name = "email" placeholder = "Enter your Email here" id = "email" required><br><br>
                <label for="passwrd"class = "text-white">Password:</label>
                <input type="password" name = "password" id = "passwrd" placeholder = "Enter your password here" required><br><br>
               
                <input type="submit" name = "submit" value = "Submit" class = "submit" style="margin-bottom:20px;padding:6px 24px;border-radius:6px">
                <h3 class = "text-white">Don't Have An Account? <a href="signup.php"class = "text-aqua">Sign Up</a></h3>
            </form>
        <button id = "close">Close Me</button>
    </div>
</div>
<script src="js/main.js"></script>
