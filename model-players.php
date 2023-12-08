<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, date_of_birth, nationality, position FROM player");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
         $conn->close();
        throw $e;
    }
}


function insertPlayer($pName, $pPosition, $pDob, $pNationality,) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `player` (`player_name`, `position`, `date_of_birth`, `nationality`) VALUES (?, ?, ?, ?,)");
        $stmt->bind_param("ssss", $pName, $pPosition, $pDob, $pNationality);
        $success = $stmt->execute();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
         $conn->close();
        throw $e;
    }
}

function UpdatePlayer($pName, $pPosition, $pDob, $pNationality, $playerId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `player` set `player_name` = ?,  `position` = ?, `date_of_birth` = ?, `nationality` = ?, WHERE `player_id` = ?");
        $stmt->bind_param("ssssi", $pName, $pPosition, $pDob, $pNationality, $playerId);
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
        $stmt = $conn->prepare("delete from player where course_id=? ");
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


