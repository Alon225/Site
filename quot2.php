<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AddictedSoftwares</title>
	<link rel="stylesheet" type="text/css" href="quotall.css">
 	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300&family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Odibee+Sans&family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>

	<div class="navbar">

	<ul>
		<h1>Addicted</h1>
  <a style="font-size: 26px;" href="index.php">Home</a>
  <a style="font-size: 26px;"href="contactus.php">Contact Us</a>
  <a style="font-size: 26px;"href="aboutus.php">About Us</a>
  <div class="dropdown">
    <button style="font-size: 26px;"class="dropbtn"><b>Videos</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sad.php">Sad Videos</a>
      <a href="motivation.php">Motivation Videos</a>
      <a href="quot.php"><b>Sad Quotes</b></a>
      
    </div>
  </div>
  <a style="font-size: 26px;"href="login.php">Login</a>
  </ul>
</div>
	<div class="slideshow-container">

      <!-- Full-width slides/quotes -->
      <div class="mySlides">
        <q>Death is not the greatest loss in life. The greatest loss is what dies inside us while we live.</q>
        <p class="author">- Norman Cousins</p>
      </div>

      <div class="mySlides">
        <q>Things change. And friends leave. Life doesn't stop for anybody.</q>
        <p class="author">- Stephen Chbosky</p>
      </div>

      <div class="mySlides">
        <q>To have felt too much is to end in feeling nothing.</q>
        <p class="author">- Dorothy Thompson</p>
      </div>

      <div class="mySlides">
        <q>One thing you can't hide — is when you're crippled inside.</q>
        <p class="author">- John Lennon</p>
      </div>
      <div class="mySlides">
        <q>Everyone in life is going to hurt you, you just have to figure out which people are worth the pain.</q>
        <p class="author">- Bob Marley</p>
      </div>


      <!-- Next/prev buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Dots/bullets/indicators -->
    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div>
  </div>

	<div class="pageselect-container">
    <a href="sad.php">&laquo;</a>
    <a href="quot.php">1</a>
    <a class="active" href="quot2.php">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="quot2.php">&raquo;</a> 
  </div>
	</body>
	</html>
