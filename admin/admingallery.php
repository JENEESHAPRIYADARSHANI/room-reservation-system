<?php
require_once "config.php";
require_once "validate.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="UTF-8">
    <title> Ovinray </title>
    <link rel="stylesheet" href="../css/regveh.css">
    
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

  <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar"><br>
    <div class="logo-details">
    
      <span class="logo_name"><img src="../assets/img/logo.png" height="100" width="235"></span>
    </div>
      <ul class="nav-links">
      <li>
          <a href="dashboard.php"  >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
          <a href="deluxroom.php" >
            <i class='bx bx-car' ></i>
            <span class="links_name">Delux Rooms</span>
          </a>
        </li>
<li>
          <a href="normalroom.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Normal Rooms</span>
          </a>
        </li>
        <li>
          <a href="standardroom.php">
            <i class='bx bx-user-plus' ></i>
            <span class="links_name">Standard Rooms</span>
          </a>
        </li>
       
        <li>
          <a href="admingallery.php" class="active">
            <i class='bx bxs-car-mechanic' ></i>
            <span class="links_name">Gallery</span>
          </a>
        </li>
		<li>
          <a href="siteconfig.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Site Configs</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
      <img src="../assets\img\profile.jpeg" alt="">
        <span class="admin_name">Administrator</span>
      </div>
    </nav>

   
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Bookings</div>
            <div class="number">
			 <?php
             

              $sql = "SELECT count(*) from guests";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {


                while($row = $result->fetch_assoc()) {

                echo "<tr><td> ".$row["count(*)"]."</td></tr>";

                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              
              ?>
			</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated Now</span>
            </div>
          </div>
          <i class='bx bxs-user' style='font-size:50px'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Delux Room</div>
            <div class="number">
			<?php
             

              $sql = "SELECT count(*) from deluxroom";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {


                while($row = $result->fetch_assoc()) {

                echo "<tr><td> ".$row["count(*)"]."</td></tr>";

                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              
              ?>
			</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated Now</span>
            </div>
          </div>
          <i class='bx bxs-door-open' style='font-size:50px'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Standard Room</div>
            <div class="number">
			<?php
             

              $sql = "SELECT count(*) from login";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {


                while($row = $result->fetch_assoc()) {

                echo "<tr><td> ".$row["count(*)"]."</td></tr>";

                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              
              ?>
			</div>
      <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated Now</span>
            </div>
          </div>
          <i class='bx bxs-door-open' style='font-size:50px'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Normal Room</div>
            <div class="number">
			<?php
             

              $sql = "SELECT count(*) from normalroomm";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {


                while($row = $result->fetch_assoc()) {

                echo "<tr><td> ".$row["count(*)"]."</td></tr>";

                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              
              ?>
			</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated Now</span>
            </div>
          </div>
          <i class='bx bxs-door-open' style='font-size:50px'></i>
        </div>
        
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Gallery - Add Photos</div>
          <div style=" align-content: center;" class="limiter">
         <br>
   

<div class="h-screen">
            <div class="grid grid-cols-3 md:grid-cols-3 grid-rows-4 md:grid-rows-4 gap-4  mx-auto">
            <div class="bg-transparent border-2 border-indigo-500/50 rounded row-span-1 col-span-1">
            <form action="upload.php" method="post" enctype="multipart/form-data">
           <br><br> <center><span>Select image to upload:</span></center>
 &nbsp <center><input type="file" name="fileToUpload" id="fileToUpload"></center><br><br>
  <center><input type="submit" value="Upload" class="bg-red-600 hover:bg-red-500 text-white font-semibold hover:text-black py-2 px-4 border border-blue-500 hover:border-transparent rounded"></input> </center>
</form>
<br>
                </div>
          <?php
 $allFiles = scandir('../gallery'); // Or any other directory
 $files = array_diff($allFiles, array('.', '..'));
  
 foreach ($files as $value):?>   
            <div class="bg-transparent border-2 border-indigo-500/50 rounded row-span-1 col-span-1">
              <center>  <img style="margin-top:25px;" src="../gallery/<?php echo $value?>" width='200'></center>
<form action="delete.php" method="post">
<input name="filename" type="hidden" value="<?php echo $value?>">
<br>
<center><input type="submit" value="Delete" class="bg-red-600 hover:bg-red-500 text-white font-semibold hover:text-black py-2 px-4 border border-blue-500 hover:border-transparent rounded"></input> </center>
</form>
                </div>
                <?php
endforeach;

?>

               
                
            </div>
        </div> 



         

	</div>
        </div>

      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
