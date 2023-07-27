<?php 
    include('connect.php');
    $email = $password = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get user input and perform basic validation/sanitization
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare the SQL statement using placeholders
        $sql = "SELECT * FROM registered_users WHERE email = '$email' AND password = '$password'";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            // Check if the statement preparation failed
            echo "Error: " . $conn->error;
            exit();
        }

        // Bind the parameters
        $stmt->bind_param("ss", $email, $password);

        // Execute the query
        $stmt->execute();

        // Store the result
        $result = $stmt->get_result();

        // Check if a row was returned (successful login)
        if ($result->num_rows === 1) {
            // User exists, redirect to home.html
            header('test.html');
            exit(); // Make sure to exit after a redirect
        } else {
            // User does not exist or wrong credentials
            echo "Invalid email or password.";
        }

        // Close the statement and result set
        $stmt->close();
        $result->close();
    } 
?>
