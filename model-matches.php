<?php
function getMatchesByCompetition($competitionId) {
    global $mysqli;
    $query = "SELECT c.competition_name, t1.team_name AS team1_name, t2.team_name AS team2_name, m.match_date, m.score_team1, m.score_team2
              FROM competition c
              JOIN matches m ON c.competition_id = m.competition_id
              JOIN teams t1 ON m.team1_id = t1.team_id
              JOIN teams t2 ON m.team2_id = t2.team_id
              WHERE c.competition_id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $competitionId);
    $stmt->execute();
    $result = $stmt->get_result();
    $matchesData = array();
    while ($row = $result->fetch_assoc()) {
        $matchesData[] = $row;
    }
    return $matchesData;
}
?>
