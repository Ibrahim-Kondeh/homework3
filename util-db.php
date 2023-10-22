<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'ikonoucr_homeW3user', '9XLRhtvr!!!!!!', 'ikonoucr_homework3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
