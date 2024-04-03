<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $mc_number = $_POST['mc_number'];
    $truck_trailer_type = $_POST['truck_trailer_type'];
    $truck_trailer_size = $_POST['truck_trailer_size'];
    $max_weight = $_POST['max_weight'];
    $instructions = $_POST['instructions'];

    // Email content
    $to = "danielalaishal@gmai.com"; // Change this to your email address
    $subject = "New Signup Form Submission";
    $message = "First Name: $first_name\n" .
               "Last Name: $last_name\n" .
               "Company Name: $company_name\n" .
               "Phone Number: $phone_number\n" .
               "Email: $email\n" .
               "MC (Motor Carrier) No.: $mc_number\n" .
               "Truck/Trailer Type: $truck_trailer_type\n" .
               "Truck/Trailer Size: $truck_trailer_size\n" .
               "Max Weight: $max_weight\n" .
               "Instructions: $instructions";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to the form with a success message
    header("Location: your-form-page.html?success=true");
    exit;
}
?>
