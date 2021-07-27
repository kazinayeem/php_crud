<?php


require_once("connect.php");


if(isset($_REQUEST["submitbtn"])){

	echo $name = $_REQUEST["name"];
   $email = $_REQUEST["email"];
   $password = $_REQUEST["password"];
   $editid = $_REQUEST["editid"];

   $updatequery = "UPDATE user SET name='$name',email='$email',password='$password' WHERE id=$editid";
}

$runquery = mysqli_query($connect,$updatequery);

if($runquery == true){
	header("location: index.php?action=edit");
}else{
	header("location: index.php");
}











 ?>