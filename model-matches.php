<?php
// model-matches.php

require_once("util-db.php");

function getAllMatchesGroupedByCompetition() {
    try {
        $conn = get_db_connection();
        // Retrieve matches data from the database and structure it accordingly
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

function getAllCompetitions() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT competition_id, competition_name, satart_date, end_date FROM competition");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectTeamsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name FROM `teams` order by team_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMatches($competitionId, $team1Id, $team2Id, $matchDate, $score1, $score2) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO matches (competition_id, team1_id, team2_id, match_date, score_team1, score_team2) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiissi", $competitionId, $team1Id, $team2Id, $matchDate, $score1, $score2);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful insertion
    } catch (Exception $e) {
        throw $e;
    }
}
function updateMatches($matchId, $team1Id, $team2Id, $matchDate, $score1, $score2) {
    try {
        $conn = get_db_connection();
        // Implement the database update logic here
        $stmt = $conn->prepare("UPDATE matches SET team1_id=?, team2_id=?, match_date=?, score_team1=?, score_team2=? WHERE match_id=?");
        $stmt->bind_param("iissii", $team1Id, $team2Id, $matchDate, $score1, $score2, $matchId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful update
    } catch (Exception $e) {
        throw $e;
    }
}

function deleteMatches($matchId) {
    try {
        $conn = get_db_connection();
        // Implement the database deletion logic here
        $stmt = $conn->prepare("DELETE FROM matches WHERE match_id=?");
        $stmt->bind_param("i", $matchId);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success; // Return success to indicate successful deletion
    } catch (Exception $e) {
        throw $e;
    }
}


?>
