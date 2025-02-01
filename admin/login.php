<?php
session_start();
require_once "config.php";
?>

  <?php
if(isset($_POST['submit'])){
	$uname = trim($_POST['uname']);
	$password = trim($_POST['pwd']);
	
    
	$sql = "SELECT * from login where uname='" . $uname . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
  $newpwd=$row['password'];  
  
  if($newpwd==$password)
	{
	
		$_SESSION["username"] = $uname;
		$_SESSION["password"] = $password;
		$_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (720 * 60);  // 12 hour session window
		
		echo '<script>window.location.replace("dashboard.php")</script>';
	}
  
  }
} else {
  echo "Account Not Found";
}
$conn->close();	 
	
	
}	
  ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ovinray</title>
        <link rel="shortcut icon" href="assets/img/1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Ovinray" name="description" />


        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body background ="assets/img/4.jpg">

    
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-body">
                    <h3 class="text-center m-t-0 m-b-30">
                        <span class="">Ovinray Beach Resort </span>
                    </h3>
                    <h4 class="text-muted text-center m-t-0"><b>Login</b></h4>

                    <form class="form-horizontal m-t-20" method="POST">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="uname" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="pwd" required="" placeholder="Password">
                            </div>
                        </div>

                        

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary w-md waves-effect waves-light" name="submit" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">

                        </div>
                    </form>
                </div>

            </div>
        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>