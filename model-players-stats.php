<?php
// model-players-stats.php

function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT nationality FROM player");
        $stmt->execute();
        $result = $stmt->get_result();
        
        $countriesData = array();
        while ($row = $result->fetch_assoc()) {
            $countriesData[] = $row['nationality'];
        }

        $conn->close();

        return $countriesData;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
