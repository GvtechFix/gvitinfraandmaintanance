<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace this email address with your own receiving email address
    $to = "gvtechfix@gmail.com";
    $subject = "New Appointment Booking";

    // Gather form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $brandname = $_POST['brandname'];
    $model = $_POST['model'];
    $serialno = $_POST['serialno'];
    $warranty = $_POST['warranty'];
    $description = $_POST['message'];

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Brand Name: $brandname\n";
    $message .= "Model: $model\n";
    $message .= "Serial No: $serialno\n";
    $message .= "Warranty: $warranty\n";
    $message .= "Description:\n$description";

    // Set additional headers
    $headers = "From: $name <$email>";

    // Send email
    $mail_success = mail($to, $subject, $message, $headers);

    if ($mail_success) {
        echo "SUCCESS";
    } else {
        echo "FAILED";
    }
} else {
    echo "Method not allowed";
}
?>
