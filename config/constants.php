<?php
    //echo "consants included";
     //Start Session
    session_start();


    define('SITEURL','adarshaofficial.epizy.com');
    define('LOCALHOST','sql108.epizy.com');//constants should be capital letter//servername
    define('DB_USERNAME','epiz_31210701');
    define('DB_PASSWORD','wJhDe7q3OtTLo');
    define('DB_NAME','epiz_31210701_adarshaofficial');

    // define('SITEURL','http://localhost/adarshaPHP/my-notes/');
    // define('LOCALHOST','localhost');//constants should be capital letter
    // define('DB_USERNAME','root');
    // define('DB_PASSWORD','');
    // define('DB_NAME','my_note');
    
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
   
?>