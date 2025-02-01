<?php
 require_once "config.php";
 require_once "validate.php";
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "truncate table diving";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

    $sec1 = $_REQUEST['sec1'];
    $sec1para = $_REQUEST['sec1para'];

    $sec2 = $_REQUEST['sec2'];
    $sec2para = $_REQUEST['sec2para'];
    

    $sec3 = $_REQUEST['sec3'];
    $sec3para = $_REQUEST['sec3para'];
    

    $sec4 = $_REQUEST['sec4'];
    $sec4para = $_REQUEST['sec4para'];
    

    $sec5 = $_REQUEST['sec5'];
    $sec5para = $_REQUEST['sec5para'];
    

   





    $sql = "INSERT INTO diving (topic, para)
VALUES ('$sec1', '$sec1para'),('$sec2', '$sec2para'),('$sec3', '$sec3para'),('$sec4', '$sec4para'),('$sec5', '$sec5para')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    

    //echo "<script>location.href='siteconfig.php';</script>";
}

?>