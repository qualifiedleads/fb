<?php

    // Get request data submitted with contact form
    $name    = isset($_POST['name']) ? $_POST['name'] : ''; 
    $phone   = $_POST['phone']; 
    $email   = $_POST['email'];
    $details = $_POST['details'];

    // Validate the users input (No fields left empty)
    if (empty($name) || empty($phone) || empty($email) || empty($details)) {
        header('Location: /index.php?contactErr=1');
    } else {
        // Got here? Then user submitted data for each required field
        // Compose the email to send
        $subject = 'פנייה מדף נחיתה מכללת קונספט';
        $body    = sprintf('שם: %s נייד: %s דוא"ל:  %s פרטים: %s', $name, $phone, $email, $details);
        $from    = 'From:' . $email;

        // Send the email
        mail('info@concept-academy.co.il', $subject, $body, $from);
        mail('leadsbackup@conce.pt',       $subject, $body, $from);
        mail('test@nachon.co.il',          $subject, $body, $from);

        $contactMailSent = true;
        include 'success.php';
    }
