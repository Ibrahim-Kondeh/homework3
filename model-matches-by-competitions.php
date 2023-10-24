<?php
require_once("util-db.php");

function getMatchesByCompetition($competitionName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT m.match_id, m.match_date, m.score_team1, m.score_team2,
                   t1.team_name AS team1_name, t2.team_name AS team2_name
            FROM matches m
            JOIN competition c ON m.competition_id = c.competition_id
            JOIN teams t1 ON m.team1_id = t1.team_id
            JOIN teams t2 ON m.team2_id = t2.team_id
            WHERE c.competition_name = ?
        ");
        $stmt->bind_param("s", $competitionName);
        $stmt->execute();
        $result = $stmt->get_result();

        // Process the result and return it
        return $result;
    } catch (Exception $e) {
        // Handle exceptions
        return null;
    }
}
?>
