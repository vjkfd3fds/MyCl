<?php 
    include('backend-php/connect.php');

    $sql = "SELECT * FROM college_details";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $p = '<p>' . $row["programs"] . '</p>';
        echo $p;
    }

?>