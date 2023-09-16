<?php 
    ini_set("SMTP", "localhost");
    ini_set("smtp_port", "1025");

    if (isset($_POST['contact'])) {
        $from = $_POST['email'];
        $msg = $_POST['message'];
        $to = "thushar17223@gmail.com";

        $headers = "From: $from";
                  
        if (mail($to, $headers, $msg)) {
            echo "Email sent successfully!";
            exit(); 
        } else {
            echo "Email delivery failed.";
        }
    }
?>