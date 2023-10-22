<?php
require_once("util-db.php");
require_once("model-player-by-team.php");
$pageTitle = "Team Rooster";
include "view-header.php";
$teams = selectPlayersByTeam($_GET['id']);
include "view-players-by-team.php";
include "view-footer.php";
?>
