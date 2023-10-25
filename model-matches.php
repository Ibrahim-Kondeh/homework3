function getAllMatchesGroupedByCompetition() {
    try {
        $conn = get_db_connection();
        $query = "SELECT c.competition_name, m.match_id, t1.team_name AS team1_name, t2.team_name AS team2_name, m.match_date, m.score_team1, m.score_team2 
                  FROM matches m 
                  JOIN competition c ON m.competition_id = c.competition_id
                  JOIN teams t1 ON m.team1_id = t1.team_id 
                  JOIN teams t2 ON m.team2_id = t2.team_id 
                  ORDER BY c.competition_name, m.match_date";
        $result = $conn->query($query);
        $matchesData = array();

        while ($row = $result->fetch_assoc()) {
            $matchesData[$row['competition_name']][] = $row;
        }

        $conn->close();
        return $matchesData;
    } catch (Exception $e) {
        // Handle the exception or log the error if needed
        throw $e;
    }
}
