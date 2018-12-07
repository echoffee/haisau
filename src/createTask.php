<?php
require('checkUserConnect.php');
session_start();
require 'connect.php';
$query = "SELECT * FROM Sprint WHERE Sprint.idSprint = ".$_GET['id'];
foreach($conn->query($query) as $row){
  $sprint = $row;
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Task Creation</title>
 </head>
 <body>
  <p>
   <h1>Create a new task for sprint <?php echo $sprint['nom']?></h1>
  </p>
  <p>
   <form action="post_createTask.php" method="post">
    <table style="width:70%">
     <tr>
      <td>Task name : </td><td><input type="text" name="taskName" /></td>
     </tr>
     <tr>
      <td>Description : </td><td><textarea name="taskDescription" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>Cost (man-days) : </td><td><input type="number" name="taskCost" /></td>
     </tr>
     <tr>
      <td><input type="hidden" name="sprintId" value="<?php echo $sprint['idSprint']?>" /></td>
     </tr>
     <tr>
      <td></td><td><input id="bCreate" type="submit" value="Create"></td>
     </tr>
     <tr>
      <td></td><td><a href="taskList.php?id=<?php echo $sprint['idSprint']?>">Cancel</a></td>
     </tr>
    </table>
   </form>
  </p>
 </body>
</html>