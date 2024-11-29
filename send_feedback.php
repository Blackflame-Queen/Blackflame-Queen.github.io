<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        exit('Method Not Allowed');
    }
    
    $to = 'blackflameit@gmail.com'; // Replace with your email address
    $subject = 'New Feedback Submission';
    
    $message = "Rating: $rating\n";
    $message .= "Feedback: $feedback\n";
    
    $headers = 'From: noreply@example.com' . "\r\n" . // Replace with a valid sender email
               'Reply-To: noreply@example.com' . "\r\n"; // Replace with a valid sender email
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback submitted!";
    } else {
        echo "There was a problem submitting your feedback.";
    }
} else {
    echo "Invalid request.";
}
?>