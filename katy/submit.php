
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if message is set and not empty
    if (isset($_POST["message"]) && !empty($_POST["message"])) {
        $message = $_POST["message"];
        
        // Email configuration
        $to = "your_email@example.com"; // Change this to your email address
        $subject = "New Message Submitted";
        $body = "Message: $message";
        $headers = "From: webmaster@example.com"; // Change this to your email address
        
        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "<h2>Message submitted successfully!</h2>";
            echo "<p>Thank you for your message.</p>";
        } else {
            echo "<h2>Error: Unable to send message.</h2>";
        }
    } else {
        echo "<h2>Error: Message not submitted.</h2>";
    }
} else {
    echo "<h2>Error: Method not allowed.</h2>";
}
?>
