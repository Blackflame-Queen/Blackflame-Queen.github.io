<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
    }
    
    $to = 'blackflameit@gmail.com'; 
    $subject = 'New Feedback Submission';
    
    $message = "Rating: $rating\n";
    $message .= "Feedback: $feedback\n";
    
    $headers = 'From: noreply@example.com' . "\r\n" . 
               'Reply-To: noreply@example.com' . "\r\n"; 
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback submitted!";
    } else {
        echo "There was a problem submitting your feedback.";
    }
 
else {
    echo "Invalid request.";
}
?>