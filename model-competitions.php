<?php
require_once("util-db.php");

function getAllCompetitions() {
    global $mysqli;
    $query = "SELECT competition_name, satart_date, end_date FROM competition";
    $result = $mysqli->query($query);
    if (!$result) {
        die("Error: " . $mysqli->error);
    }
    return $result;
}
?>
