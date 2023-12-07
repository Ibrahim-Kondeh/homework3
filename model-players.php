function selectPlayers() {
    try {
        $conn = get_db_connection();
        if (!$conn) {
            throw new Exception("Failed to connect to the database.");
        }

        $stmt = $conn->prepare("
            SELECT player_id, player_name, date_of_birth, nationality, position
            FROM players");

        if (!$stmt) {
            throw new Exception("Failed to prepare the query.");
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        // Handle the exception, log it, or display an error message
        error_log($e->getMessage());
        return false; // Return false or handle the error as needed
    }
}
