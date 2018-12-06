<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add user story</title>
  </head>
  <body class="bg-white">
    <div class ="container">
    <form action="post_addUserStory.php" method="post"> 
    <div class="form-group" >
    <label for="numUs">US #</label>
    <input type="text" class="form-control" name="numUs">
    </div>
    <div class="form-group">
    <label for="desc">Description</label>
    <textarea class="form-control" name="desc" rows="3"></textarea>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Priority</label>
      <select class="form-control" name="prio">
        <option>Low</option>
        <option>Medium</option>
        <option>High</option>
      </select>
    </div>
    <div class="form-group">
    <label for="diff">Difficulty</label>
    <input type="text" class="form-control" name="diff">
    </div>
    <button type="submit" class="btn btn-primary btn-sm" name="add_us">Add</button> &nbsp;
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
