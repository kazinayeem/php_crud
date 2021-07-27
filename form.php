<?php 

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];


$checkpassworld = strlen($password);

if($checkpassworld > 6){
    header("location: index.php?all_done=submit done");
}else{
    header("location: index.php?pws_error=password is short");
}

echo "<h1>Name : $name </h1>";
echo "<h1>Email : $email </h1>";
echo "<h1>password : $password </h1>";
















?>