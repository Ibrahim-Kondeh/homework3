<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT player_id, player_name, date_of_birth, nationality, position
            FROM players");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayer($playerName, $dob, $nationality, $position) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO players (player_name, date_of_birth, nationality, position) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $playerName, $dob, $nationality, $position);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
        throw $e;
    }
}

function updatePlayer($playerName, $dob, $nationality, $position, $playerId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE players SET player_name = ?, date_of_birth = ?, nationality = ?, position = ? WHERE player_id = ?");
        $stmt->bind_param("ssssi", $playerName, $dob, $nationality, $position, $playerId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful update
    } catch (Exception $e) {
        throw $e;
    }
}

function deletePlayer($playerId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM players WHERE player_id = ?");
        $stmt->bind_param("i", $playerId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful deletion
    } catch (Exception $e) {
        throw $e;
    }
}
?>
