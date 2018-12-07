<?php
require('checkUserConnect.php');
session_start();
require 'connect.php';
$query = "SELECT * FROM Projet WHERE Projet.idProjet = ".$_GET['id'];
foreach($conn->query($query) as $row){
  $projet = $row;
}
$lastSprint = "SELECT MAX(dateDebut), MAX(dateFin) FROM Sprint WHERE Sprint.idProjet =".$projet['idProjet'];
foreach($conn->query($lastSprint) as $S){
  $lastSprintEndDate = $S[1];
}
$pas = $projet['dureeSprint'];
if(!is_null($lastSprintEndDate)) {
  list($y,$m,$d)= explode("-",$lastSprintEndDate);
  $newStart = mktime(0,0,0,$m,$d+1,$y);
  $newStart = gmdate("Y-m-d", $newStart);
}
else {
  $newStart = date('Y-m-d', time());
}
list($y,$m,$d)= explode("-",$newStart);
$newEnd = mktime(0,0,0,$m,$d+$pas,$y);
$newEnd = gmdate("Y-m-d", $newEnd);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Sprint Creation</title>
 </head>
 <body>
  <p>
   <h1>Create a new sprint for project <?php echo $projet['nom']?></h1>
  </p>
  <p>
   <form action="post_createSprint.php" method="post">
    <table style="width:70%">
     <tr>
      <td>Sprint name : </td><td><input type="text" name="sprintName" /></td>
     </tr>
     <tr>
       <td><input type="hidden" name="projectId" value="<?php echo $projet['idProjet']?>" /></td>
     </tr>
     <tr>
       <td><input type="hidden" name="start" value="<?php echo $newStart ?>" /></td>
     </tr>
     <tr>
       <td><input type="hidden" name="end" value="<?php echo $newEnd ?>" /></td>
     </tr>
     <tr>
      <td></td><td><input id="bCreate" type="submit" value="Create"></td>
     </tr>
     <tr>
      <td></td><td><a href="sprintList.php?id=<?php echo $projet['idProjet']?>">Cancel</a></td>
     </tr>
    </table>
   </form>
  </p>
 </body>
</html>