<?php 

    include('connect.php');


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $selectedCourses = '';
        if (isset($_POST['course']) && is_array($_POST['course'])) {
            $selectedCourses = implode(', ', array_map('trim', $_POST['course']));
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
        

        if (isset($_POST['ug'])) {
            $programs .= $_POST['ug'] . ' , ';
        } 

        if (isset($_POST['pg'])) {
            $programs .= $_POST['pg'] . ' , ';
        }
        
        if (isset($_POST['diploma'])) {
            $programs .= $_POST['diploma'] . ' , ';
        } 
        
        if (isset($_POST['engineering'])) {
            $programs .= $_POST['engineering'] . ' , ';
        } 
        
        if (isset($_POST['phd'])) {
            $programs .= $_POST['phd'] . ' , ';
        }  
        
        if (isset($_POST['nursing'])) {
            $programs .= $_POST['nursing'] . ' , ';
        } 
        
        if (isset($_POST['doctorate'])) {
            $programs .= $_POST['doctorate'] . ' , ';
        }

        if (isset($_POST['ds'])) {
            $programs .= $_POST['ds'] . ' , ';
        }

        if(isset( $_POST['moa'])) {
            $programs .= $_POST['moa'] . ' , ';
        } 
        
        if (isset($_POST['doe'])) {
            $programs .= $_POST['doe'] . ' , ';
        }  
        
        if (isset($_POST['ba-1'])) {
            $programs .= $_POST['da-1'] . ' , ';
        } 
        if (isset($_POST['bfa'])) {
            $programs .= $_POST['bfa'] . ' , ';
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