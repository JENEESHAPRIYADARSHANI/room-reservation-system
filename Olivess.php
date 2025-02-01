<?php
require_once "config.php";
require_once "validate.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="UTF-8">
    <title> Ovinray </title>
    <link rel="stylesheet" href="regveh.css">
    
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i class='bx bxs-traffic'></i>
      <span class="logo_name">Ovinray</span>
    </div>
      <ul class="nav-links">
      <li>
          <a href="dashboard.php"  >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
          <a href="deluxroom.php" class="active">
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
          <a href="olives.php">
            <i class='bx bx-user-plus' ></i>
            <span class="links_name">Olives booking</span>
          </a>
        </li>
        <li>
          <a href="admingallery.php">
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
      <img src="assets\img\2.jpg" alt="">
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
          <i class='bx bxs-user' style='font-size:50px'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Olives booking</div>
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
          <div class="title">Olives Booking</div>
          <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
							
								<th>Title</th>
								<th>First Name/th>
								<th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Number of Guests</th>
                <th>Date</th>
                <th>NIC</th>



							</tr>
						</thead>
						<tbody>
              <?php
             

              $sql = "SELECT * from olives";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {


                while($row = $result->fetch_assoc()) {

                echo "<tr><td>".$row["title"]."</td> <td>".$row["First Name"]."</td><td> ".$row["Last Name"]."</td><td> ".$row["email"]."</td><td> ".$row["Phone Number"]."</td><td> ".$row["Number of Guests"]."</td><td> ".$row["Nationality"].$row["NIC"]."</td><td> <form action='checkout.php' method='post'><input type='hidden' name='email' value=".$row["email"]."><input type='hidden' name='id' value=".$row["id"]."><input type='hidden' name='roomtype' value='delux'><input value='Checkout' type='submit'></form></td></tr>";

                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              $conn->close();
              ?>

						</tbody>
					</table>
				</div>
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
