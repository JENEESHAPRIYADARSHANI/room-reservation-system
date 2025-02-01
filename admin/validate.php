<?php
session_start();
require_once "config.php";
$now = time();

if (!isset($_SESSION["username"]) && $now > $_SESSION['password']) 
	{
	
    echo '<script>alert("Your session has expired, login again.")</script>';
    echo '<script>window.location.replace("login.php")</script>';
	}

else if(isset($_SESSION["username"]) && $now > $_SESSION['password']) {
	$uname = ($_SESSION["username"]);
    $sql = "SELECT * from login where uname='" . $uname . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
  }
} else {
  echo "Account Not Found";
}
 
}

?>


