<?php

    /* Request responses */
    $msgProjectDeletionSuccess = "Project deleted successfully.";
    $msgProjectDeletionError = "An error occured while deleting the project.";
    $msgUserStoryUpdateSuccess = "User story updated successfully.";
    $msgUserStoryUpdateError = "An error occured while updating the user story.";

    /* Redirections */
    $locProjectList = "Location: projectList.php";
    $locUserStoryList = function($id){return "Location: userStoryList.php?id=" . $id;};

    /* SESSION items */
    $strSessionLogin = "login";
    $strSessionPassword = "password";

    /* Object field */
        /* Projects */
    $fldProjectId = "idProjet";
    $fldProjectName = "nom";
    $fldProjectDateEnd = "dateFin";
    $fldProjectSprint = "currentSprint";
    $fldProjectTaskDoneCount = "nbTachesDone";
    $fldProjectTaskCount = "nbTachesTotal";

        /* Sprints */
    $fldSprintId = "idSprint";
    $fldSprintName = "nom";
    $fldSprintTaskCount = "nbTasks";
    $fldSprintDifficulty = "difficulty";
    $fldSprintState = "state";
    $fldSprintDateEnd = "dateFin";
    $fldSprintDateStart = "dateDebut";

        /* Tasks */
    $fldTaskId = "idTache";
    $fldTaskName = "nom";
    $fldTaskCost = "cout";
    $fldTaskStatus = "statut";
    $fldTaskProjectId = "idProjet";
?>
