<?php 

    include('connect.php');


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $selectedCourses = '';
        if (isset($_POST['course']) && is_array($_POST['course'])) {
            $selectedCourses = implode(',', array_map('trim', $_POST['course']));
        }
        
        $university = $_POST['university'];
        $institution = $_POST['institution'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $address = $_POST['address'];
        $totalSeats = intval($_POST['totalseats']);
        $reserved = intval($_POST['reserved']);
        $management = intval($_POST['management']);
        $email = $_POST['email'];
        $number = $_POST['phone-number'];
        $programs = '';
        if (isset($_POST['programs']) && is_array($_POST['programs'])) {
            $programs = implode(', ', array_map('trim', $_POST['programs']));
        }
    
        $sql = "INSERT INTO college_details (university, institution, state, district, address, programs, course, email, number, total_seats, reserved_seats, management_seats)
        VALUES ('$university', '$institution', '$state', '$district', '$address', '$programs', '$selectedCourses', '$email', '$number', '$totalSeats', '$reserved', '$management')";

                
                if ($conn->query($sql) === TRUE) {
                    header('Location: ../../php-project/success.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
    }
?>