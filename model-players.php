function selectPlayers() {
    try {
        $conn = get_db_connection();
        if (!$conn) {
            throw new Exception("Failed to connect to the database.");
        }
        
        $stmt = $conn->prepare("SELECT player_id, player_name, date_of_birth, nationality, position FROM player");
        if (!$stmt) {
            throw new Exception("Failed to prepare the query.");
        }

        $success = $stmt->execute();
        if (!$success) {
            throw new Exception("Failed to execute the query.");
        }

        $result = $stmt->get_result();
        $conn->close();

        return $result;
    } catch (Exception $e) {
        error_log($e->getMessage()); // Log the error message
        return false; // Return false or handle the error as needed
    }
}
