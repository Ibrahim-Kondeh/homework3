<?php
require_once("util-db.php");
require_once("model-competitions.php");

$pageTitle = "Competitions";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCompetition($_POST['cName'], $_POST['cStartDate'], $_POST['cEndDate'])) {
        echo '<div class="alert alert-success" role="alert">Competition added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateCompetition($_POST['cName'], $_POST['cStartDate'], $_POST['cEndDate'], $_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Competition edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteCompetition($_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Course deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}




$competitions = getAllCompetitions();

include "view-competitions.php";

include "view-footer.php";
?>
