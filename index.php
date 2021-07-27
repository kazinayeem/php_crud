<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>





    <form action="formdata.php" method="post">
      <input 
      type="text" 
      name="name" 
      placeholder="enter your name" 
      />
      <input type="text" name="email" placeholder="enter your email" />
      <input type="text" name="password" placeholder="enter your password" />

     
      <input type="submit" name="submitbtn" value="save data" />
    </form>

<?php

if(isset($_REQUEST["action"])){

    if($_REQUEST["action"]=="true"){
        echo "<font color='green'>user insert successfull</font>";
    }else if($_REQUEST["action"]=="delete"){
        echo "<font color='red'>user delete successfull</font>";
    }else if ($_REQUEST["action"] =="edit") {
        // code...
        echo "<font color='orange'>user edit successfull</font>";
    }
}

?>




<?php 
require_once("connect.php")
?>
<hr><br>
<div>

<table border="1">
    <tr style="font-size: 25px;">
        <td>id</td>
        <td>Name</td>
        <td>email</td>
        <td>password</td>
        <td>Action</td>
    </tr>
<!-- php query start -->
<?php 
$showdataquery = "SELECT * FROM user";
$runquery = mysqli_query($connect, $showdataquery);

if($runquery==true){
    $countdatat = 1;
    while($mydata = mysqli_fetch_array($runquery))  { ?>
        
        <tr>
            <td><?php echo $countdatat;$countdatat++;?></td>
            <td><?php echo $mydata["name"] ?></td>
            <td><?php echo $mydata["email"] ?></td>
            <td><?php echo $mydata["password"] ?></td>
            <td><?php echo $mydata["date"] ?></td>
            <td><a href="editfile.php?edit_id=<?php echo $mydata["id"] ?>">edit</a> || 
            
            
            <a href="delete.php?id=<?php echo $mydata["id"] ?>">delete</a>
        
        
        </td>
        </tr>


    <?php }} ?>



   
</table>


</div>
  
  </body>
</html>
