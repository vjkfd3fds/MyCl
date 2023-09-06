<?php 
    include('backend-php/connect.php');

    if (isset($_GET['institution'])) {
        $institution = $_GET['institution'];
        $institution = $conn->real_escape_string($institution);
    

        $sql = "SELECT * FROM college_details WHERE institution = '$institution'";

        $result = $conn->query($sql);

        if ($row = $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row['university'];
            }
        } else {
            echo "cannot found";
        }
    }

?>