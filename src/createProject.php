<?php
 require('checkUserConnect.php');
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Project Creation</title>
 </head>
 <body>
  <p>
   <h1>Create a new project</h1>
  </p>
  <p>
   <form action="post_createProject.php" method="post">
    <table style="width:70%">
     <tr>
      <td>Project name : </td><td><input type="text" name="projectName" /></td>
     </tr>
     <tr>
      <td>Sprint duration (days) : </td><td><input type="number" name="sprintDuration" /></td>
     </tr>
     <tr>
      <td></td><td><input id="bCreate" type="submit" value="Create"></td>
     </tr>
     <tr>
      <td></td><td><a href="projectList.php">Cancel</a></td>
     </tr>
    </table>
   </form>
  </p>
 </body>
</html>
