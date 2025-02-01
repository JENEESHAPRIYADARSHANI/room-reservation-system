<?php

session_start();

require_once "config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer

// Set response header to JSON
header('Content-Type: application/json');

$response = [];

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve input data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $cpass = trim($_POST['cpass']);

    // Validate all fields are filled
    if (empty($name) || empty($email) || empty($pass) || empty($cpass)) {
        echo json_encode(["success" => false, "message" => "All fields are required!"]);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email format"]);
        exit;
    }

    // Check if passwords match
    if ($pass !== $cpass) {
        echo json_encode(["success" => false, "message" => "Passwords do not match"]);
        exit;
    }

    // Check if email already exists
    $sqlCheck = "SELECT id FROM users WHERE email = ?";
    if ($stmtCheck = $conn->prepare($sqlCheck)) {
        $stmtCheck->bind_param("s", $email);
        $stmtCheck->execute();
        $stmtCheck->store_result();

        if ($stmtCheck->num_rows > 0) {
            echo json_encode(["success" => false, "message" => "This email is already registered!", "exists" => true]);
            $stmtCheck->close();
            exit;
        }
        $stmtCheck->close();
    } else {
        echo json_encode(["success" => false, "message" => "Database error: Unable to check email"]);
        exit;
    }

    // Hash the password
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Insert the new user
    $sqlInsert = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    if ($stmtInsert = $conn->prepare($sqlInsert)) {
        $stmtInsert->bind_param("sss", $name, $email, $hashed_pass);

        if ($stmtInsert->execute()) {
            // Send welcome email
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ovinraybeachhotel@gmail.com'; // Replace with your Gmail
                $mail->Password = 'degr xbds qpcy bhsn '; // Use an App Password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('ovinraybeachhotel@gmail.com', 'Ovinray'); // Set sender
                $mail->addAddress($email, $name); // Send email to user
                $mail->isHTML(true);
                $mail->Subject = "Welcome to Our Platform!";
                $mail->Body = "<h2>Hello $name,</h2><p>Thank you for signing up! We are excited to have you on board.</p>";

                $mail->send();
            } catch (Exception $e) {
                error_log("Email sending failed: " . $mail->ErrorInfo);
            }

            echo json_encode(["success" => true, "message" => "Signup successful!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Error inserting user data"]);
        }

        $stmtInsert->close();
    } else {
        echo json_encode(["success" => false, "message" => "Database error: Unable to insert user"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}

// Close database connection
$conn->close();

?>
