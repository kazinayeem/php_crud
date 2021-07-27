<?php 


require_once("connect.php");

$getid = $_REQUEST["id"];

$detdata = "DELETE FROM user WHERE id=$getid";

$rundelquery = mysqli_query($connect, $detdata);

if($rundelquery == true){
    header("location: index.php?action=delete");

}else{
    header("location: index.php?action=not_delete");
}






?>