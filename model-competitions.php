<?php
require_once("util-db.php");

function getAllCompetitions() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT competition_name, satart_date, end_date FROM competition");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
