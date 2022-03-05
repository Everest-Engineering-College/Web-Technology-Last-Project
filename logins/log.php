<?php include('../config/constants.php');?>
<?php 
    if(isset($_POST['submit']))
    {
        //echo "clicked";
        //get the data from the form

        $email = $_POST['email'];
        $password = $_POST['password'];

       //sql to get the the username
       $sql = "SELECT *FROM tbl_user WHERE Email ='$email' AND Password = '$password'";
       //Execute the query
       $res = mysqli_query($conn,$sql);
       //Count to check whether user exists or not
       $count = mysqli_num_rows($res);
       if($count==1)
       {
           $row = mysqli_fetch_assoc($res);
           $username = $row['Name'];
           //User exists
           echo "user exists";
           $_SESSION['user'] = $username;//to check whether username exists or not

           $_SESSION['login'] = true;
           header('location:'.SITEURL.'download.php');

       }
       else
       {
           //User doesnot exists
           echo "User doesnot exists";
           $_SESSION['login'] = "<div class ='error'>No User Found.</div>";
           
       }
    }
?>