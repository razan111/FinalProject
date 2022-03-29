<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


//db connection
//$variable_name=mysqli_connect("server_name","username", "password","database_name")
$db = mysqli_connect("localhost", "root", "" ,"ecomarce");


    $insert_query = "INSERT INTO feadback (name,email,message) 
    VALUES ('$name','$email','$message')";

    mysqli_query($db, $insert_query);

    echo "registratoin successfull";


?>