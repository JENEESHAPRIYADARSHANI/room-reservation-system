<?php
require_once "config.php";
require_once "validate.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $roomtype = $_POST['roomtype'];

    // Debugging: Check if the POST data is being received
    var_dump($_POST); // Remove this after debugging

    // Handle deletion based on room type
    if($roomtype == 'delux'){
        $sql = "DELETE FROM deluxroom WHERE id='$id'";
        echo $sql; // Debugging: Check the SQL query

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    if($roomtype == 'normal'){
        $sql = "DELETE FROM normalroomm WHERE id='$id'";
        echo $sql; // Debugging: Check the SQL query

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    if($roomtype == 'standard'){
        $sql = "DELETE FROM standardroom WHERE id='$id'";
        echo $sql; // Debugging: Check the SQL query

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // Redirect after deletion
    echo "<script>location.href='dashboard.php';</script>";
}
?>
