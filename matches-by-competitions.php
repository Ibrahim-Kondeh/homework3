<?php
require_once("util-db.php");
require_once("model-matches-by-competitions.php");

$pageTitle = "Matches by Competition";

if(isset($_GET['competition_name'])) {
    $competitionName = $_GET['competition_name'];
    $matches = getMatchesByCompetition($competitionName);
    
    include "view-header.php";
    include "view-matches-by-competition.php";
    include "view-footer.php";
} else {
    echo "Competition name not provided.";
}
?>
