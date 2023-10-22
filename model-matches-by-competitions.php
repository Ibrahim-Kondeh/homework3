<?php
require_once("util-db.php");

function getAllMatchesGroupedByCompetition() {
    try {
        $conn = get_db_connection();
        $query = "SELECT c.competition_name, t1.team_name AS team1_name, t2.team_name AS team2_name, m.match_date
                  FROM matches m
                  JOIN teams t1 ON m.team1_id = t1.team_id
                  JOIN teams t2 ON m.team2_id = t2.team_id
                  JOIN competition c ON m.competition_id = c.competition_id
                  ORDER BY c.competition_name, m.match_date";
        $result = $conn->query($query);

        $matchesData = array();
        while ($row = $result->fetch_assoc()) {
            $competitionName = $row['competition_name'];
            $match = array(
                'team1_name' => $row['team1_name'],
                'team2_name' => $row['team2_name'],
                'match_date' => $row['match_date']
            );

            if (!isset($matchesData[$competitionName])) {
                $matchesData[$competitionName] = array();
            }

            $matchesData[$competitionName][] = $match;
        }

        $result->close();
        $conn->close();
        return $matchesData;
    } catch (Exception $e) {
        // Handle the exception or log the error if needed
        throw $e;
    }
}
?>
