<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
         $stmt = $conn->prepare("SELECT player_id, player_name, date_of_birth, nationality, position, team_id FROM `player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
         $conn->close();
        throw $e;
    }
}


function insertPlayer($pName, $pPosition, $pDob, $pNationality, $teamId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `player` (`player_name`, `position`, `date_of_birth`, `nationality`, `team_id`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $pName, $pPosition, $pDob, $pNationality, $teamId);
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
