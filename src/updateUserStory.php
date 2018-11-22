<?php 
require('checkUserConnect.php');
 require "connect.php";
  session_start(); 
  $_SESSION["idUserStory"] = $_GET['id'];
  $idUserStory = $_SESSION["idUserStory"];
  $sql = "SELECT  * FROM `UserStory`  WHERE `idUserStory` = '$idUserStory'";
  if($result = $conn->query($sql))
  {
    $row = $result->fetch(); //row contins us info to put them in dom fields
  }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update user story</title>
  </head>
  <body class="bg-white">
    <div class ="container">
    <form action="post_updateUserStory.php" method="post"> 
    <div class="form-group" >
    <label for="numUs">Number</label>
    <input type="text" class="form-control" name="numUs" value="<?php echo $row['num']; ?>">
    </div>
    <div class="form-group">
    <label for="desc">description</label>
    <textarea class="form-control" name="desc" rows="1"><?php echo $row['description']; ?></textarea>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Priorité</label>
      <select class="form-control" name="prio" value="xx">
       <option><?php echo $row['priorite']; ?></option>
        <option>Low</option>
        <option>Medieum</option>
        <option>High</option>
      </select>
    </div>
    <div class="form-group">
    <label for="diff">difficulte</label>
    <input type="text" class="form-control" name="diff" value="<?php echo $row['difficulte']; ?>">
    </div>
    <button type="submit" class="btn btn-primary btn-sm" name="update_us" >Update</button> &nbsp;
    <?php
    //back to our us
    session_start();
    echo '<a href="userStoryList.php?id='.$_SESSION["idProject"].' " class="btn btn-primary btn-sm">Back</a>'
    ?>
    </div>
    </form>
    
    
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
