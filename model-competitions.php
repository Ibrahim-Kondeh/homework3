<?php
require_once("util-db.php");

function getAllCompetitions() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT competition_id, competition_name, satart_date, end_date FROM competition");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCompetition($cName, $cStartDate, $cEndDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `competitions` (`competition_name`, `start_date`, `end_date`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName, $cStartDate, $cEndDate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCompetition($cName, $cStartDate, $cEndDate, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `competitions` set `competition_name` = ?, `start_date` = ?, `end_date` = ? where competition_id = ?");
        $stmt->bind_param("sssi", $cName, $cStartDate, $cEndDate, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCompetition($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from competitions where competition_id=?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
