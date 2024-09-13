<?php

    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $subject = trim($_POST["subject"]);
        $message= trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if (empty($name) OR empty($phone) OR empty($subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "suresh@smartwayservices.co.in";  // Changed to your desired email

        // Set the email subject.
        $email_subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Subject: $subject\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $email_subject, $email_content, $email_headers)) {
            // Redirect to the contact page with a success query parameter.
            header("Location: contact.php?success=1");
            exit;
        } else {
            // Redirect to the contact page with a failure query parameter.
            header("Location: contact.php?success=0");
            exit;
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
