<?php

// $servername = "localhost";
// $username = "civicpes_pest_control";
// $password = 'pest_control@123';
// $dbname = "civicpes_pest_control";


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "pest_control";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle AJAX booking submission
if (isset($_POST['action']) && $_POST['action'] === 'book_now') {

    // Get data from POST
    $serviceId    = intval($_POST['service_id']);
    $user_name    = $conn->real_escape_string($_POST['name']);
    $phone_number = $conn->real_escape_string($_POST['phone']);

    // Fetch the selected service details
    $serviceRes = $conn->query("SELECT * FROM services WHERE id = $serviceId");

    if ($serviceRes->num_rows > 0) {
        $service = $serviceRes->fetch_assoc();

        // Prepare timestamps
        $created_on        = date("Y-m-d H:i:s");
        $updated_on        = $created_on;
        $last_booking_date = $created_on;

        // Insert new record (duplicate service + user details)
        $insert = $conn->query("
            INSERT INTO services (
                name, price, description, payment_mode, last_booking_date, 
                type, pest_control, home_cleaning, bhk, service_type, 
                created_by, created_on, updated_by, updated_on, user_name, phone_number
            ) VALUES (
                '{$service['name']}',
                '{$service['price']}',
                '{$service['description']}',
                '{$service['payment_mode']}',
                '$last_booking_date',
                '{$service['type']}',
                '{$service['pest_control']}',
                '{$service['home_cleaning']}',
                '{$service['bhk']}',
                '{$service['service_type']}',
                '{$user_name}',
                '$created_on',
                '{$user_name}',
                '$updated_on',
                '{$user_name}',
                '{$phone_number}'
            )
        ");

        // Success / error message
        if ($insert) {
            echo "<h3 style='color:green;'>✅ Thank you, $user_name! Your booking has been received.</h3>";
            echo "<p><strong>Service:</strong> {$service['name']}</p>";
            echo "<p><strong>Price:</strong> {$service['price']}</p>";
            echo "<p><strong>Description:</strong> {$service['description']}</p>";
            echo "<p><strong>Service Type:</strong> {$service['service_type']}</p>";
            echo "<p><strong>Phone:</strong> {$phone_number}</p>";
        } else {
            echo "<p style='color:red;'>❌ Booking failed: " . $conn->error . "</p>";
        }

    } else {
        echo "<p style='color:red;'>❌ Service not found.</p>";
    }

    exit; // Ensure AJAX stops here
}
?>
