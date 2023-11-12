<?php
// model-players-stats.php

function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT nationality FROM player");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();

        $countryCounts = array();
        while ($row = $result->fetch_assoc()) {
            $nationality = $row['nationality'];
            if (isset($countryCounts[$nationality])) {
                $countryCounts[$nationality]++;
            } else {
                $countryCounts[$nationality] = 1;
            }
        }

        return $countryCounts;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
