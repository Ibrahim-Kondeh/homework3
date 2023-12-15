<?php
require_once("util-db.php");
require_once("model-matches.php");

$pageTitle = "Matches";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMatches($_POST['competitionId'],$_POST['team1Id'], $_POST['team2Id'], $_POST['matchDate'],  $_POST['score1'],  $_POST['score2'] )) {
        echo '<div class="alert alert-success" role="alert">Match added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateMatches( $_POST['team1Id'], $_POST['team2Id'], $_POST['matchDate'], $_POST['score1'], $_POST['score2'])) {
        echo '<div class="alert alert-success" role="alert">Match edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteMatches($_POST['matchId'])) {
        echo '<div class="alert alert-success" role="alert">Match deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$matchesData = getAllMatchesGroupedByCompetition();
include "view-matches.php";

include "view-footer.php";
?>
