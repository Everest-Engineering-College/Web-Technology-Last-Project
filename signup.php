<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SignUp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginandlogout.css">
</head>
<body">
<?php include('config/constants.php');?>
    <section class = "signup">
        <div class = "signup__form text-center">
            <h2 class = "text-white">Create An Account</h2>
            <hr>
            <form action="" method = "post">
                <label for="fullname"class = "text-white">Full Name: </label>
                <input type="text" name = "fullname" placeholder = "Enter your name" id = "fullname" required><br><br>
                <label for="email" class = "text-white">Email: </label>
                <input type="email" name = "email" placeholder = "Enter your Email here" id = "email" required><br><br>
                <label for="passwrd" class = "text-white">Password:</label>
                <input type="password" name = "password" id = "passwrd" placeholder = "Enter your password here" required><br><br>
                <label for="crfmpasswrd" class = "text-white">Confirm-Password: </label>
                <input type="password" name = "confirmpassword" id = "crfmpasswrd" placeholder = "Confirm password" required><br><br>
                <?php
                    if(isset($_SESSION['signup']))
                    {
                        echo $_SESSION['signup'];
                        unset($_SESSION['signup']);
                    }
                ?>
                <input type="submit" name = "submit" value = "Submit" class = "submit">
                <h3 class = "text-white">Already Have An Account? <a href="login.php" class = "text-aqua">Login</a></h3>
            </form>
            
        </div>
    </section>
    <?php include('partials/footer.php');?>

    
</body>
</html>
<?php
if(isset($_POST['submit']))
    {
        // echo "clicked";
        //get the data from the form
         $fullname = $_POST['fullname'];
         $email = $_POST['email'];
         $password = $_POST['password'];//md5 for //password encrypting
         $confirmPassword = $_POST['confirmpassword'];//md5 for password encrypting
        if($password == $confirmPassword)
        {
            echo "password correct";
            //Insert data into database
            $sql = "INSERT INTO tbl_user SET
                    Name = '$fullname',
                    Email = '$email',
                    Password = '$password'";
            //Execute the query
            $res = mysqli_query($conn,$sql) or mysqli_error();
            //Checking whether the query is execute or not
            if($res == TRUE)
            {
                echo "can";
                $_SESSION['signup'] = "<div class ='success'>Created successfully</div>"; 
            }
            else
            {
                echo "cannot";
                $_SESSION['signup'] = "<div class ='error'>Failed to create</div>";
            }
        }
        else
        {
            $_SESSION['signup'] = "<div class ='error'>Password didnot match to create4</div>";
        }
        
    }
?>