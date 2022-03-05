<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginandlogout.css">
</head>
<body>
    <?php include('partials/menu.php');?>
    <section class = "signup">
        <div class = "signup__form text-center">
            <h2 class = "text-white">Login</h2>
            <hr>
            <br>
            <form action="logins/log.php" method = "post">
                
                <label for="email"class = "text-white">Email: </label>
                <input type="email" name = "email" placeholder = "Enter your Email here" id = "email" required><br><br>
                <label for="passwrd"class = "text-white">Password:</label>
                <input type="password" name = "password" id = "passwrd" placeholder = "Enter your password here" required><br><br>
               
                <input type="submit" name = "submit" value = "Submit" class = "submit">
                <h3 class = "text-white">Don't Have An Account? <a href="signup.php"class = "text-aqua">Sign Up</a></h3>
            </form>
            
        </div>
    </section>
    <?php include('partials/footer.php');?>
    
</body>
</html>

