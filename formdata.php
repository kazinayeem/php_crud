<?php

require_once("connect.php");


if(isset($_REQUEST["name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"]) ){

    
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

  
}

$insertquery = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$password')";



$runquery = mysqli_query($connect, $insertquery);

if($runquery == true){
   header("location: index.php?action=true");
   

}else{
    header("location: index.php?action=false");
}


?>