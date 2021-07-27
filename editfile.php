<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>edit page </title>
  </head>
  <body>



 <?php 

        require_once("connect.php");

        if(isset($_REQUEST["edit_id"])){

          $editid = $_REQUEST["edit_id"];
       

        $fileinfo = "SELECT * FROM user WHERE id=$editid";
        $runinfo = mysqli_query($connect,$fileinfo);


        while($getdate = mysqli_fetch_array($runinfo)){ 

  ?>




    <form action="edit.php" method="post">
      <input 
          type="text" 
          name="name" 
          placeholder="enter your name" 
          value="<?php echo $getdate["name"]; ?>" 
      />
      <input 
          type="text" 
          name="email" 
          placeholder="enter your email" 
          value="<?php echo $getdate["email"]; ?>" 
      />
      <input 
          type="text" 
          name="password" 
          value="<?php echo $getdate["password"]; ?>" 
      />

      <input 
          type="hidden" 
          name="editid"  
          value="<?php echo $editid ?>"
      />
      
      <input 
          type="submit" 
          name="submitbtn" 
          value="edit data" 
        />

    </form>


<?php }  }?>


  
</body>
</html>
