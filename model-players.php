<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
SELECT p.player_name, p.date_of_birth, p.nationality, t.team_name, p.position
FROM player AS p
JOIN teams AS t ON p.team_id = t.team_id;");
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
