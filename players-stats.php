<?php
require_once("util-db.php");
require_once("model-players-stats.php");

$pageTitle = "Players Stats";
include "view-header.php";
$players = selectPlayers();
$player = selectPlayers();
include "view-players-stats.php";
include "view-footer.php";
?>
