<html>
 <body>
  <p>
   <h1>Modify project <?php echo $_GET['name'] ?></h1>
  </p>
  <p>
   <form action="post_modifyProject.php" method="post">
    <table style="width:70%">
     <tr>
      <td>Project name : </td><td><input type="text" name="projectName" /></td>
     </tr>
     <tr>
      <td><input type="hidden" name="projectId" value="<?php echo $_GET['id']?>" /></td>
     </tr>
     <tr>
      <td></td><td><input id="bCreate" type="submit" value="Modify"></td>
     </tr>
     <tr>
      <td></td><td><a href="projectList.php">Cancel</a></td>
     </tr>
    </table>
   </form>
  </p>
 </body>
</html>
