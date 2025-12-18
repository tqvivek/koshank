<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['companyname']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "shankardange@yahoo.com"; // Replace with your email
    $subject = "New Enquiry From Koshank Website $name";
    $body = "Name: $name\nEmail: $email\n\nPhone:\n$phone\n\nCompanyName: $companyname\n\nMessage: $message";
    $headers = "From: admin@koshank.com"; // Replace with a valid email

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to thank you page after successful submission
        header("Location: thank-you.php");
        exit;
    } else {
        echo "There was an error sending your feedback. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>