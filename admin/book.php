<?php
require_once "config.php";
require_once "validate.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $roomtype = $_POST['roomtype'];

    $tableName = "";

    // Determine the target table based on room type
    if ($roomtype == 'Deluxe') {
        $tableName = "deluxroom";
    } elseif ($roomtype == 'Normal') {
        $tableName = "normalroomm";
    } elseif ($roomtype == 'Standard') {
        $tableName = "standardroom";
    } else {
        echo "Invalid room type!";
        exit();
    }

    // Insert the booking into the relevant table
    $sqlInsert = "INSERT INTO $tableName (title, name, email, phone, checkin, checkout)
                  VALUES ('$title', '$name', '$email', '$phone', '$checkin', '$checkout')";
    
    if ($conn->query($sqlInsert) === TRUE) {
        // Delete the entry from the guests table
        $sqlDelete = "DELETE FROM guests WHERE id='$id'";
        if ($conn->query($sqlDelete) === TRUE) {
            echo "Booking added to $tableName and removed from guests successfully!";
            header("Location: dashboard.php"); // Redirect to the dashboard
            exit();
        } else {
            echo "Error deleting guest record: " . $conn->error;
        }
    } else {
        echo "Error adding booking: " . $conn->error;
    }
}

$conn->close();
?>
