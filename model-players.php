<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name FROM `teams`");
        $stmt->execute();
        $result = $stmt->get_result();
        $teams = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
        return $teams;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Insert player function
function insertPlayer($pName, $pPosition, $pDob, $pNationality, $teamName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `player` (`player_name`, `position`, `date_of_birth`, `nationality`, `team_id`) VALUES (?, ?, ?, ?, (SELECT team_id FROM `teams` WHERE `team_name` = ?))");
        $stmt->bind_param("sssss", $pName, $pPosition, $pDob, $pNationality, $teamName);
        $success = $stmt->execute();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function UpdatePlayer($pName, $pPosition, $pDob, $pNationality, $playerId, $teamId) {
    try {
        $conn = get_db_connection();
    $stmt = $conn->prepare("UPDATE `player` SET `player_name` = ?,  `position` = ?, `date_of_birth` = ?, `nationality` = ?, `team_id` = ? WHERE `player_id` = ?");
        $stmt->bind_param("ssssii", $pName, $pPosition, $pDob, $pNationality, $teamId, $playerId);
        $success = $stmt->execute();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
         $conn->close();
        throw $e;
    }
}

function deletePlayer($playerId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from player where player_id =? ");
        $stmt->bind_param("i", $playerId);
        $success = $stmt->execute();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
         $conn->close();
        throw $e;
    }
}

?>


