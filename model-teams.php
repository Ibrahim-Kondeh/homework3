<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, coach_name, founded_year, home_stadium FROM teams");
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        throw $e;
    } 
}

function insertTeams($tName, $tcName, $tFyear, $tStadium) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `teams` (`team_name`, `coach_name`, `founded_year`, `home_stadium`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $tName, $tcName, $tFyear, $tStadium);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
        throw $e;
    }
}

function updateTeams($teamId, $tName, $tcName, $tFyear, $tStadium) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `teams` SET `team_name` = ?, `coach_name` = ?, `founded_year` = ?, `home_stadium` = ? WHERE `team_id` = ?");
        $stmt->bind_param("ssisi", $tName, $tcName, $tFyear, $tStadium, $teamId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful update
    } catch (Exception $e) {
        throw $e;
    }
}

function deleteTeams($teamId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `teams` WHERE `team_id` = ?");
        $stmt->bind_param("i", $teamId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful deletion
    } catch (Exception $e) {
        throw $e;
    }
}

?>
