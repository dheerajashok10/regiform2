<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);

    echo "
    <div style='font-family: Arial, sans-serif; margin: 20px auto; max-width: 600px; padding: 20px; border: 1px solid #ccc; border-radius: 5px;'>
        <h1>Submission Successful</h1>
        <h2>Submitted Data:</h2>
        <p><strong>Full Name:</strong> $name</p>
        <p><strong>Email Address:</strong> $email</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>Date of Birth:</strong> $dob</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Address:</strong> $address</p>
        <a href='index.html' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Back to Form</a>
    </div>";
}
?>
