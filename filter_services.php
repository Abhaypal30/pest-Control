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
// Handle AJAX booking submission
// if(isset($_POST['action']) && $_POST['action'] === 'book_now') {
//     print_r($_POST);exit;
//     // Get data from POST
//     $serviceId   = intval($_POST['service_id']);
//     $user_name   = $conn->real_escape_string($_POST['name']);
//     $phone_number = $conn->real_escape_string($_POST['phone']);

//     // Fetch the selected service details
//     $serviceRes = $conn->query("SELECT * FROM services WHERE id = $serviceId");
//     if($serviceRes->num_rows > 0){
//         $service = $serviceRes->fetch_assoc();

//         // Prepare data for new insert
//         $created_on = date("Y-m-d H:i:s");
//         $updated_on = $created_on;
//         $last_booking_date = $created_on;

//         // Insert new record (duplicate service + user details)
//         $insert = $conn->query("
//             INSERT INTO services (
//                 name, price, description, payment_mode, last_booking_date, 
//                 type, pest_control, home_cleaning, bhk, service_type, 
//                 created_by, created_on, updated_by, updated_on, user_name, phone_number
//             ) VALUES (
//                 '{$service['name']}',
//                 '{$service['price']}',
//                 '{$service['description']}',
//                 '{$service['payment_mode']}',
//                 '$last_booking_date',
//                 '{$service['type']}',
//                 '{$service['pest_control']}',
//                 '{$service['home_cleaning']}',
//                 '{$service['bhk']}',
//                 '{$service['service_type']}',
//                 '{$user_name}',
//                 '$created_on',
//                 '{$user_name}',
//                 '$updated_on',
//                 '{$user_name}',
//                 '{$phone_number}'
//             )
//         ");

//         // Success / error message
//         if($insert){
//             echo "<h3 style='color:green;'>✅ Thank you, $user_name! Your booking has been received.</h3>";
//             echo "<p><strong>Service:</strong> {$service['name']}</p>";
//             echo "<p><strong>Price:</strong> {$service['price']}</p>";
//             echo "<p><strong>Description:</strong> {$service['description']}</p>";
//             echo "<p><strong>Service Type:</strong> {$service['service_type']}</p>";
//             echo "<p><strong>Phone:</strong> {$phone_number}</p>";
//         } else {
//             echo "<p style='color:red;'>❌ Booking failed: " . $conn->error . "</p>";
//         }

//     } else {
//         echo "<p style='color:red;'>❌ Service not found.</p>";
//     }
//     exit;
// }


// Fetch posted data for listing services
$type = $_POST['type'] ?? '';
$serviceType = $_POST['serviceType'] ?? '';
$bhk = $_POST['bhk'] ?? '';
$service = $_POST['service'] ?? '';

$query = "SELECT * FROM services WHERE type = '$type'";
if ($type === 'pest-control' && !empty($serviceType)) $query .= " AND pest_control = '$serviceType'";
if ($type === 'home-cleaning' && !empty($serviceType)) $query .= " AND home_cleaning = '$serviceType'";
if (!empty($bhk)) $query .= " AND bhk = '$bhk'";
if (!empty($service)) $query .= " AND service_type = '$service'";
$query .= " ORDER BY id DESC LIMIT 2";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-lg-5">';
        echo '<div class="packagebox keypoints recommended">';
        echo '<div class="acc_header">';
        echo '<h2 class="name">' . $row['name'] . '</h2>';
        echo '<div class="headerprice">' . $row['price'] . '</div>';
        echo '</div>';
        echo '<div class="acc_body">';
        echo '<div class="row no-gutters justify-content-center">';
        echo '<div class="col-auto">' . $row['description'] . '</div>';
        echo '</div>';
        echo '<div class="differ_part">';
        echo '<div class="services">' . $row['service_type'] . '</div>';
        echo '<div class="row no-gutters pricerow align-items-center">';
        echo '<div class="col-12"><div class="price">' . $row['payment_mode'] . '</div></div>';
        echo '</div>';
        echo '<div class="row no-gutters btnsrow align-items-center">';
        echo '<div class="col-12">';
        echo '<a href="#" class="action primary book_now" 
                 data-service-id="'.$row['id'].'"
                 data-name="'.$row['name'].'"
                 data-price="'.$row['price'].'"
                 data-description="'.$row['description'].'"
                 data-servicetype="'.$row['service_type'].'"
                 style="color:black;">Book Now</a>';
        echo '</div>';
        echo '</div></div></div></div></div>';
    }
} else {
    echo '<p>No services found</p>';
}

mysqli_close($conn);
?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom Modal CSS -->
<style>
/* Modal overlay */
.custom-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0; top: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    overflow-y: auto;
    padding: 20px;
}

/* Modal content box */
.custom-modal-content {
    background: #fff;
    margin: 50px auto;
    padding: 25px 30px;
    border-radius: 12px;
    width: 400px;
    max-width: 95%;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    position: relative;
    text-align: center;
    font-family: Arial, sans-serif;
}

/* Close button */
.custom-modal .close-btn {
    position: absolute;
    right: 15px;
    top: 12px;
    font-size: 26px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
    transition: color 0.2s ease;
}
.custom-modal .close-btn:hover {
    color: red;
}

/* Modal headings */
.custom-modal h2 {
    margin-bottom: 20px;
    font-size: 22px;
    color: #333;
}

/* Service details section */
#serviceDetails p {
    margin: 8px 0;
    font-size: 16px;
    color: #555;
}

/* Booking form inputs */
#bookingForm input[type="text"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

/* Confirm button */
#submit-form {
    background-color: #FFDD00; /* yellow */
    color: #000;               /* black text */
    padding: 12px 25px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.2s ease;
}
#submit-form:hover {
    background-color: #e6c200; /* slightly darker on hover */
}

/* Optional: responsive modal */
@media (max-width: 480px) {
    .custom-modal-content {
        width: 95%;
        padding: 20px;
    }
    #submit-form {
        width: 100%;
        padding: 12px 0;
    }
}
</style>


<!-- Custom Modal HTML -->
<div id="bookingModal" class="custom-modal">
  <div class="custom-modal-content">
    <span class="close-btn">&times;</span>
    <h2>Booking Form</h2>
    <div id="serviceDetails"></div>
    <form id="bookingForm" method="post">
      <input type="hidden" name="action" value="book_now">
      <input type="hidden" name="service_id" value="">
      <div style="margin-bottom:10px;">
        <input type="text" name="name" placeholder="Enter your name" required style="width:100%;padding:8px;">
      </div>
      <div style="margin-bottom:10px;">
        <input type="text" name="phone" placeholder="Enter your phone" required style="width:100%;padding:8px;">
      </div>
      <button type="submit" id="submit-form" style="background:#fad604;color:black;padding:10px 20px;border:none;border-radius:5px;">Confirm Booking</button>
    </form>
  </div>
</div>

<!-- Custom Modal JS -->
<script>
$(document).ready(function(){
console.log("Booking JS loaded");

    // Open custom modal with service details
    $(document).on('click', '.book_now', function(e){
        e.preventDefault();
        var serviceId = $(this).data('service-id');
        var name = $(this).data('name');
        var price = $(this).data('price');
        var desc = $(this).data('description');
        var type = $(this).data('servicetype');

        $('#bookingForm input[name="service_id"]').val(serviceId);
        $("#serviceDetails").html(
            "<p><strong>Service:</strong> " + name + "</p>" +
            "<p><strong>Price:</strong> " + price + "</p>" +
            "<p><strong>Description:</strong> " + desc + "</p>" +
            "<p><strong>Service Type:</strong> " + type + "</p>"
        );

        $('#bookingModal').fadeIn();
    });

    // Close modal
    $(document).on('click', '.close-btn', function(){
        $('#bookingModal').fadeOut();
    });
    $(document).on('click', '#bookingModal', function(e){
        if($(e.target).is('#bookingModal')) {
            $('#bookingModal').fadeOut();
        }
    });

    // AJAX form submission
    
    // $(document).on('submit', '#bookingForm', function(e){
    //     e.preventDefault();
    //     console.log(1);
    //     $(this).find('button[type="submit"]').prop('disabled', true).css('pointer-events','none');

    //     // $("#submit-form").prop('disabled', true);
    //     // $.post('insert_db.php', $(this).serialize(), function(response){
    //     //    $("#submit-form").prop('disabled', false);
    //     //     $('.custom-modal-content').html(response);
    //     // });
    // });

      $(document).on('submit', '#bookingForm', function (e) {
        e.preventDefault();

        var $form = $(this);
        var $btn  = $('#submit-form');

        // guard: prevent duplicate submissions
        if ($form.data('submitting')) {
            // console.log("Duplicate submit blocked");
            return false;
        }
        $form.data('submitting', true);

        // disable button
        // $btn.prop('disabled', true).text('Booking...');

        // 🔥 actual submission here
        $.post('insert_db.php', $form.serialize(), function (response) {
            // console.log("Server response:", response);

            // re-enable after response
            $form.data('submitting', false);
            $btn.prop('disabled', false).text('Confirm Booking');
            $('.custom-modal-content').html(response);
            // show confirmation
            $('#serviceDetails').html("<p><strong>Booking Confirmed!</strong></p>");
        }).fail(function () {
            $form.data('submitting', false);
            $btn.prop('disabled', false).text('Confirm Booking');
            // alert("Something went wrong!");
        });
    });


});
</script>
