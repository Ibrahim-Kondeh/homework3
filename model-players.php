function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, date_of_birth, nationality, position FROM player");
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        error_log($e->getMessage()); // Log the error message
        return false; // Return false or handle the error as needed
    }
}

function insertPlayer($pName, $pDob, $pNationality, $pPosition) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `player` (`player_name`, `date_of_birth`, `nationality`, `position`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $pName, $pDob, $pNationality, $pPosition);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
        throw $e;
    }
}

function updatePlayer($pName, $pDob, $pNationality, $pPosition, $playerId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `player` SET `player_name` = ?, `date_of_birth` = ?, `nationality` = ?, `position` = ? WHERE `player_id` = ?");
        $stmt->bind_param("ssssi", $pName, $pDob, $pNationality, $pPosition, $playerId);
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
        $stmt = $conn->prepare("DELETE FROM `player` WHERE `player_id` = ?");
        $stmt->bind_param("i", $playerId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful deletion
    } catch (Exception $e) {
        throw $e;
    }
}
