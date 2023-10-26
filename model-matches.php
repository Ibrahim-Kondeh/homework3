<?php
require_once("util-db.php");

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
        throw $e;
    }
}

function addMatch($team1Id, $team2Id, $matchDate, $scoreTeam1, $scoreTeam2, $competitionId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO matches (team1_id, team2_id, match_date, score_team1, score_team2, competition_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iissii", $team1Id, $team2Id, $matchDate, $scoreTeam1, $scoreTeam2, $competitionId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        throw $e;
    }
}

function editMatch($matchId, $team1Id, $team2Id, $matchDate, $scoreTeam1, $scoreTeam2, $competitionId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE matches SET team1_id = ?, team2_id = ?, match_date = ?, score_team1 = ?, score_team2 = ?, competition_id = ? WHERE match_id = ?");
        $stmt->bind_param("iissiii", $team1Id, $team2Id, $matchDate, $scoreTeam1, $scoreTeam2, $competitionId, $matchId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        throw $e;
    }
}

function deleteMatch($matchId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM matches WHERE match_id = ?");
        $stmt->bind_param("i", $matchId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        throw $e;
    }
}
?>
