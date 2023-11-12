<?php
// model-players-stats.php

function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT distinct nationality FROM player");
        $stmt->execute();
        $result = $stmt->get_result();

        $countriesData = array();
        while ($row = $result->fetch_assoc()) {
            $countriesData[] = $row['nationality'];
        }

        $conn->close();

        return $countriesData;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to get flag icon based on nationality using country-flag-icons
function getFlagIcon($nationality) {
    // Implement your logic to map nationality to ISO 3166-1 alpha-2 country code
    // For demonstration purposes, assuming a simple mapping (replace with your logic)
    $countryCodeMapping = [
        'France' => 'fr',
        'Brazil' => 'br',
        'Ukraine' => 'ua',
        'Japan' => 'jp',
        'Ghana' => 'gh',
        'Norway' => 'no',
        'England' => 'gb', // Use 'gb' for England instead of 'uk'
        'Portugal' => 'pt',
        'Belgium' => 'be',
        'Cameroon' => 'cm',
        'Denmark' => 'dk',
        'Germany' => 'de',
        'Argentina' => 'ar',
        'Switzerland' => 'ch',
        'Spain' => 'es',
        'Ecuador' => 'ec',
        'Senegal' => 'sn',
        'Albania' => 'al',
        
    ];

    $countryCode = $countryCodeMapping[$nationality] ?? ''; // Get the country code or empty string if not found

    // Return the flag icon class based on the country code
    return $countryCode ? 'flag-icon flag-icon-' . $countryCode : '';
}
?>
