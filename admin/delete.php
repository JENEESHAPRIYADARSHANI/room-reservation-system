<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_REQUEST['filename'];
    //echo $filename;
    $path="gallery";
    unlink("../gallery/".$filename);
    echo "<script>location.href='admingallery.php';</script>";
}

?>