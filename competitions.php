<?php
require_once("util-db.php");
require_once("model-competitions.php");

$pageTitle = "Competitions";
include "view-header.php";

$competitions = getAllCompetitions();

include "view-competitions.php";

include "view-footer.php";
?>
