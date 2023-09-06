<?php 
include('backend-php/connect.php');

if (isset($_GET['institution'])) {
    $institution = $conn->real_escape_string($_GET['institution']);
    $sql = "SELECT * FROM college_details WHERE institution = '$institution'";
    
    if (isset($_GET['university'])) {
        $university = $conn->real_escape_string($_GET['university']);
        $sql .= " AND university = '$university'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="result-box">';
        echo '<h2 class="result-heading">College Details:</h2>';
        while ($row = $result->fetch_assoc()) { 
            echo '<div class="feedback-card">';
            echo '<h3>' . $row["institution"] . '</h3>';
            echo '</div>';
        }
        echo "</div>";
    } else {
        echo "No results found.";
    }
} else {
    echo "Institution parameter is required.";
}
?>
