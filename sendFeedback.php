<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Receiver email
    $to = "helpnow916@gmail.com";
    $subject = "User Feedback from $name";

    // Email content
    $message = "Name: $name\nEmail: $email\nFeedback: $feedback";
    $headers = "From: no-reply@helpnow.com\r\n";
    
    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
