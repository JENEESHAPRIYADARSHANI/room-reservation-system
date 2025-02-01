<!DOCTYPE html>
<html lang="en">
  <head>
	  <title>Ovinray Beach Resort & Spa</title>
	  
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/Untitled-4.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	  

	   <style>
		  p.ex1 {
	margin-right: 180px;
	margin-left: 180px;
		  }
	  td {
 	vertical-align: top;
		}
		  .button {
  border: none;
  color: gray;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
	.button1 {background-color: #F8F7F7;}
		   
		   
/* carousel bar */  
		    {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  animation-name: fade;
  animation-duration: 5.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
		   
/* Gallery */		   
		   
		   
	div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
	  </style>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
   
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	  
	  
	  
	  
	
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt="" width="240" height="160" class="img-fluid"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
		 <li class="nav-item">
          <a class="nav-link" href="spa.html">SPA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Dining.html">DINING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Wedding & conferences.html">WEDDING & CONFERENCES</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Gallery.html">GALLERY</a>
        </li>
		  <a href="Booknow.html"><button type="button" class="btn btn-info">BOOK NOW</button></a>
      </ul>
    </div>
  </div>
</nav>
	  
	 
	
	  


	  
	  <br>

<?php
 $allFiles = scandir('gallery'); // Or any other directory
 $files = array_diff($allFiles, array('.', '..'));
  
 foreach ($files as $value):?> 
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="gallery/<?php echo $value?>">
      <img src="gallery/<?php echo $value?>" alt="Forest" width="1280" height="849">
    </a>
    
  </div>
</div>
<?php
endforeach;

?>




<section class="home"> 
            <video class="video-slide" src="images/videoplayback (3).mp4" autoplay muted loop width="100%" height="100%"></video> 
        </section>s
<div class="clearfix"></div>
	  
	  

  
	  
	  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/420343684.jpg">
      <img src="images/420347696.jpg" alt="Cinque Terre" width="1280" height="802" class="img-fluid">
    </a>
 
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/420343599.jpg">
      <img src="images/420348674.jpg" alt="Forest" width="1147" height="768">
    </a>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/420343613.jpg">
      <img src="images/420348375.jpg" alt="Northern Lights" width="1280" height="854">
    </a>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="images/420349137.jpg" alt="Mountains" width="1280" height="854">
    </a>
   
	  <br><br>
	  
  </div>
</div>
	  
	  
	  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="images/420812443.jpg" alt="Cinque Terre" width="1280" height="853">
    </a>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="images/420813306.jpg" alt="Forest" width="1280" height="853">
    </a>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="images/420931708.jpg" alt="Northern Lights" width="1278" height="852">
    </a>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="images/7a1750aa.jpg" alt="Mountains" width="1203" height="802">
    </a>
 
  </div>
</div>

<div class="clearfix"></div>
	  
	  

<div class="clearfix"></div>  
	  
	  
	  
	  
	  
	  
<footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          
          <ul><br><br><br>
            <li><a href="https://maps.app.goo.gl/PAVYUwiJBuWot9pY6?g_st=ic">Ovinray Beach Resort & Spa, <br> 87 Beach Road Madiha, <br>Matara,  <br>Southern Province, <br> Sri Lanka.</a></li>
            <li><a href="tel:+94112544566">GENERAL: +9411 254 4566</a></li>
            <li><a href="tel:+94742544562">RESERVATION: +9474 254 4562</a></li>
          </ul>
        </div>
        <div class="footer-col">
          
          <ul><br><br><br>
            <li><a href="Dining.html">DINING</a></li>
            <li><a href="spa.html">SPA</a></li>
            <li><a href="Wedding & conferences.html">WEDDING & CONFERENCES</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          
          <ul><br><br><br>
            <li><a href="home.html">HOME</a></li>
            <li><a href="Gallery.html">GALLERY</a></li>
          </ul>
        </div>
        <div class="footer-col"><br><br><br>
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div><br><br><center><p style="color: darkgray">© 2023 Ovinray Resorts & Spa. All Rights Reserved</p></center>
     </div>
  </footer>
	  
	  	
		  

	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script><!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="file:///C|/Users/Dinuka Gamage/OneDrive - NSBM/Desktop/Ovinray new/js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="file:///C|/Users/Dinuka Gamage/OneDrive - NSBM/Desktop/Ovinray new/js/popper.min.js"></script> 
	<script src="file:///C|/Users/Dinuka Gamage/OneDrive - NSBM/Desktop/Ovinray new/js/bootstrap-4.3.1.js"></script>
  </body>
</html>