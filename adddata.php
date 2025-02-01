<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];
    $roomtype = $_POST['roomtype'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ovinray";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Database connection failed.");
    }

    // Check if a room is available
    $sql_check = "SELECT available_rooms FROM room_inventory WHERE roomtype = '$roomtype'";
    $result = $conn->query($sql_check);
    $row = $result->fetch_assoc();

    if ($row['available_rooms'] > 0) {
        // Insert new booking
        $sql = "INSERT INTO guests (roomtype, title, name, email, phone, checkin, checkout)
                VALUES ('$roomtype', '$title', '$name', '$email', '$phone', '$checkin', '$checkout')";

        if ($conn->query($sql) === TRUE) {
            // Decrease the available rooms count
            $sql_update = "UPDATE room_inventory SET available_rooms = available_rooms - 1 WHERE roomtype = '$roomtype'";
            $conn->query($sql_update);

            // Send Confirmation Email
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ovinraybeachhotel@gmail.com'; // Replace with your email
                $mail->Password = 'degr xbds qpcy bhsn'; // Use an App Password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('ovinraybeachhotel@gmail.com', 'Ovinray Hotel');
                $mail->addAddress($email, $name);
                $mail->isHTML(true);
                $mail->Subject = "Booking Confirmation - Ovinray Beach Hotel";
                $mail->Body = "
                    <h2>Dear $title $name,</h2>
                    <p>Thank you for booking with Ovinray Beach Hotel. Below are your booking details:</p>
                    <p><strong>Room Type:</strong> $roomtype</p>
                    <p><strong>Check-in Date:</strong> $checkin</p>
                    <p><strong>Check-out Date:</strong> $checkout</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Email:</strong> $email</p>
                    <p>We look forward to welcoming you!</p>
                    <p>Best regards,</p>
                    <p><strong>Ovinray Beach Hotel</strong></p>
                ";

                $mail->send();
                echo "Your booking was successful! A confirmation email has been sent.";
            } catch (Exception $e) {
                echo "Booking successful, but email could not be sent.";
                error_log("Email sending failed: " . $mail->ErrorInfo);
            }
        } else {
            echo "Error in booking.";
        }
    } else {
        echo "Sorry, no rooms are available for this type.";
    }

    $conn->close();
}
?>
