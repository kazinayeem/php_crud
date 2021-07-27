<?php



$host = "localhost";
$dbuser = "root";
$dbpassworld = "";
$dbname = "mydata";

$connect = mysqli_connect($host,$dbuser,$dbpassworld,$dbname);

if($connect == false){
    echo "<h1>database is connect not successfull</h1>";
}
?>