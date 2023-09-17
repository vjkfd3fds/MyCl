<?php 
include('../backend-php/connect.php');

if (isset($_GET['institution'])) {
    $institution = $conn->real_escape_string($_GET['institution']);
    $sql = "SELECT * FROM college_details WHERE institution = '$institution'";
    
    if (isset($_GET['university'])) {
        $university = $conn->real_escape_string($_GET['university']);
        $sql .= " AND university = '$university'";
    }

    if (isset($_GET['state'])) {
        $state = $conn->real_escape_string($_GET['state']);
        $sql .= " AND state = '$state'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="result-box">';
        echo '<h2 class="result-heading">College Details:</h2>';
        while ($row = $result->fetch_assoc()) { 
            echo '<div class="feedback-card">';
            echo '<p style="font-size: 15px; font-family: monospace;"> college name: ' . $row["institution"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> university: ' . $row["university"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> state: ' . $row["state"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> district: ' . $row["district"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> address: ' . $row["address"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> programs: ' . $row["programs"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> course: ' . $row["course"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> phone number: ' . $row["number"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> email: ' . $row["email"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> total seats: ' . $row["total_seats"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> reserved seats: ' . $row["reserved_seats"] . '</p>';
            echo '<p style="font-size: 15px; font-family: monospace;"> management_seats seats: ' . $row["management_seats"] . '</p>';
            echo '</div>';
        }
        echo "</div>";
    } else {
        echo "No results found.";
    }
} else {
    echo "Search parameters are required.";
}
?>
