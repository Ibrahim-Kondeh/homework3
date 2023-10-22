<?php
require_once("util-db.php");

function getMatchesByCompetition($competitionId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.match_id, t1.team_name AS team1_name, t2.team_name AS team2_name, m.match_date, m.score_team1, m.score_team2 
                               FROM matches m 
                               JOIN teams t1 ON m.team1_id = t1.team_id 
                               JOIN teams t2 ON m.team2_id = t2.team_id 
                               WHERE m.competition_id = 1");
        $stmt->bind_param("i", $competitionId);
        $stmt->execute();
        $result = $stmt->get_result();

        $matchesData = array();
        while ($row = $result->fetch_assoc()) {
            $matchesData[] = $row;
        }

        $stmt->close();
        $conn->close();
        return $matchesData;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
