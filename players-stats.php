<?php
require_once("util-db.php");
require_once("model-players-stats.php");

$pageTitle = "Players";
include "view-header.php";
$players = selectPlayers();
$player = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
