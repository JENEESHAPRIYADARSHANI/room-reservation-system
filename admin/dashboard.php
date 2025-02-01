<?php
require_once "config.php";
require_once "validate.php";
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Ovinray</title>
    <link rel="stylesheet" href="../css/regveh.css">
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="sidebar"><br>
    <div class="logo-details">
        <span class="logo_name"><img src="../assets/img/logo.png" height="80" width="235"></span>
    </div>
    <ul class="nav-links">
        <li><a href="dashboard.php" class="active"><i class='bx bx-grid-alt'></i><span class="links_name">Dashboard</span></a></li>
        <li><a href="deluxroom.php"><i class='bx bx-car'></i><span class="links_name">Delux Rooms</span></a></li>
        <li><a href="normalroom.php"><i class='bx bx-user'></i><span class="links_name">Normal Rooms</span></a></li>
        <li><a href="standardroom.php"><i class='bx bx-user-plus'></i><span class="links_name">Standard Rooms</span></a></li>
        <li><a href="admingallery.php"><i class='bx bxs-car-mechanic'></i><span class="links_name">Gallery</span></a></li>
        <li><a href="siteconfig.php"><i class='bx bx-box'></i><span class="links_name">Site Configs</span></a></li>
        <li class="log_out"><a href="login.php"><i class='bx bx-log-out'></i><span class="links_name">Log Out</span></a></li>
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
            <i class='bx bx-search'></i>
        </div>
        <div class="profile-details">
            <img src="../assets/img/profile.jpeg" alt="">
            <span class="admin_name">Administrator</span>
        </div>
    </nav>

    <div class="home-content">
        <div class="overview-boxes">
            <?php
            $queries = [
                "Total Bookings" => "SELECT COUNT(*) AS count FROM guests",
                "Delux Room" => "SELECT COUNT(*) AS count FROM deluxroom",
                "Standard Room" => "SELECT COUNT(*) AS count FROM standardroom",
                "Normal Room" => "SELECT COUNT(*) AS count FROM normalroomm",
            ];

            foreach ($queries as $title => $query) {
                $result = $conn->query($query);
                $count = ($result && $result->num_rows > 0) ? $result->fetch_assoc()['count'] : 0;
                ?>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic"><?= $title ?></div>
                        <div class="number"><?= $count ?></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Updated Now</span>
                        </div>
                    </div>
                    <i class='bx bxs-user' style='font-size:50px'></i>
                </div>
            <?php } ?>
        </div>

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">User Bookings</div>
                <div class="limiter">
                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table>
                                    <thead>
                                    <tr class="table100-head">
                                        <th>Room Type</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No</th>
                                        <th>Check-In</th>
                                        <th>Check-Out</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql = "SELECT * FROM guests";
                                    $result = $conn->query($sql);

                                    if ($result && $result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                <td>{$row["roomtype"]}</td>
                                                <td>{$row["title"]}</td>
                                                <td>{$row["name"]}</td>
                                                <td>{$row["email"]}</td>
                                                <td>{$row["phone"]}</td>
                                                <td>{$row["checkin"]}</td>
                                                <td>{$row["checkout"]}</td>
                                                <td>
                                                    <form action='book.php' method='post'>
                                                        <input type='hidden' name='email' value='{$row["email"]}'>
                                                        <input type='hidden' name='id' value='{$row["id"]}'>
                                                        <input type='hidden' name='roomtype' value='{$row["roomtype"]}'>
                                                        <input type='hidden' name='title' value='{$row["title"]}'>
                                                        <input type='hidden' name='name' value='{$row["name"]}'>
                                                        <input type='hidden' name='phone' value='{$row["phone"]}'>
                                                        <input type='hidden' name='checkin' value='{$row["checkin"]}'>
                                                        <input type='hidden' name='checkout' value='{$row["checkout"]}'>
                                                        <input type='submit' value='Add to room'>
                                                    </form>
                                                </td>
                                            </tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='8'>No results found.</td></tr>";
                                    }
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
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    }
</script>

</body>
</html>
y.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar"><br>
    <div class="logo-details">
    
      <span class="logo_name"><img src="assets/img/logo.png" height="80" width="235"></span>
    </div>
      <ul class="nav-links">
      <li>
          <a href="dashboard.php"  class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="deluxroom.php">
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
      <img src="assets\img\profile.jpeg" alt="">
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
        
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">User Bookings</div>
          <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th>Room Type</th>
								<th>Title</th>
								<th>Name</th>
								<th>Email</th>
                <th>Phone No</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Action</th>

							</tr>
						</thead>
						<tbody>
              <?php
             

              $sql = "SELECT * from guests";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {


                while($row = $result->fetch_assoc()) {

                echo "<tr><td>".$row["roomtype"]."</td><td>".$row["title"]."</td> <td>".$row["name"]."</td><td> ".$row["email"]."</td><td> ".$row["phone"]."</td><td> ".$row["checkin"]."</td><td> ".$row["checkout"].
                "</td><td>
                <form action='book.php' method='post'>
                <input type='hidden' name='email' value=".$row["email"]."><input type='hidden' name='id' value=".$row["id"]."><input type='hidden' name='roomtype' value=".$row["roomtype"]."><input type='hidden' name='title' value=".$row["title"]."><input type='hidden' name='name' value=".$row["name"]."><input type='hidden' name='phone' value=".$row["phone"]."><input type='hidden' name='checkin' value=".$row["checkin"]."><input type='hidden' name='checkout' value=".$row["checkout"]."><input value='Add to room' type='submit'>
                </form>
                </td></tr>";

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
