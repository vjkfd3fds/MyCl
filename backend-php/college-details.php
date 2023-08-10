<?php 

    include('connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $university = $_POST['university'];
        $institution = $_POST['institution'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $address = $_POST['address'];
        $programs = $_POST['programs'];
        $courses = $_POST['course'];
        $totalSeats = intval($_POST['totalseats']);
        $reserved = intval($_POST['reserved']);
        $management = intval($_POST['management']);
        $email = $_POST['email'];
        $number = $_POST['phone-number'];


        $sql = "INSERT INTO college_details (university, institution, state, district, address, programs, course, email, number, total_seats, reserved_seats, management_seats)
        VALUES ('$university', '$institution', '$state', '$district', '$address', '$programs', '$courses', '$email', '$number', '$totalSeats', '$reserved', '$management')";

                
                if ($conn->query($sql) === TRUE) {
                    header('Location: ../../php-project/college-dashboard.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
    }
?>