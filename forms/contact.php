<?php
// Replace gvtechfix@gmail.com with your real receiving email address
$receiving_email_address = 'gvtechfix@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "New Appointment Booking";
    $mobile = $_POST['mobile'];
    $brandname = $_POST['brandname'];
    $model = $_POST['model'];
    $serialno = $_POST['serialno'];
    $warranty = $_POST['warranty'];
    $description = $_POST['message'];

    // Construct message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Brand Name: $brandname\n";
    $message .= "Model: $model\n";
    $message .= "Serial No: $serialno\n";
    $message .= "Warranty: $warranty\n";
    $message .= "Description:\n$description";

    // Send email
    $mail_success = mail($receiving_email_address, $subject, $message);

    if ($mail_success) {
        echo "SUCCESS";
    } else {
        echo "FAILED";
    }
} else {
    echo "Method not allowed";
}
?>
