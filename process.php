<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    // Process the data (Here, we'll simply display it for now)
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Full Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email Address:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($phone) . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($dob) . "</p>";
}
?>