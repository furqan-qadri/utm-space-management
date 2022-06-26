<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


.header {
  padding: 80px;
  text-align: center;
  background: #8b0000;
  color: white;
}


.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}


.navbar a:hover {
  background-color: #ddd;
  color: black;
}


.row {  
  display: flex;
  flex-wrap: wrap;
}


.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}


.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.return {
	width: 5%;
	height: 7%;
	background-color: white;
	position: absolute;
  top: 8px;
  left: 16px;
}


.image {
  width: 100%;
  padding: 20px;
}
</style>
</head>
<body>

<div class="header">
  <h1>WELCOME</h1>
  <h2>UTM SPACE BOOKING SYSTEM</h2>
</div>

<div class="navbar">
  <a href="login form.php" class="right">LOGIN</a>
</div>

<div class="row">
  <div class="side">
    <h2>About Us</h2>
    <h5>Our Photo</h5>
    <div class="Khaleeda" style="height:200px;">
	<img src="khaleeda.jpg"
     alt="khaleeda"
	 style="width:150px;height:200px;"/>
	 <img src="Furqan.jpeg"
     alt="furqan"
	 style="width:150px;height:200px;"/>
	 <img src="Lisan.jpeg"
     alt="lisan"
	 style="width:150px;height:200px;"/></div>
    <p>We are students of UTM</p>
    <h3>Our Space</h3>
    <p>We serve the only good spaces for everyone</p>
    <div class="room1" style="height:60px;">
	<img src="room1.jpg"
     alt="room1"
	 style="width:500px;height:300px;"/></div><br>
	 
  </div>
  <div class="main">
    <h2>University Technology of Malaysia</h2>
    <h5>Since 1975</h5>
    <div class="image" style="height:200px;"><img src="UTM-MJIIT-TC.png"
     alt="UTMLOGO"
	 style="width:80%;height:180px;"/></div>
    <p>20 MAY 2022</p>
    <p>To Develop Holistic Talents and Prosper Lives Through Knowledge and Innovative Technologies.</p>
    <br>
    <h2>UTM SPACES</h2>
    <h5>Spaces for meetings, classes, and, conferences, Sep 2, 2017</h5>
    <div class="image" style="height:200px;"><img src="Fullhall.jpg"
     alt="fullhall"
	 style="width:25%;height:200px;"/>
	 <img src="Smallroom.jpg"
     alt="small room"
	 style="width:25%;height:200px;"/>
	 <img src="convenctionhall.jpg"
     alt="chall"
	 style="width:25%;height:200px;"/>
	 <img src="galleryhall.jpg"
     alt="gallery"
	 style="width:20%;height:200px;"/></div>
    <br>
    <p>We have more spaces that can be booked. Please Log in or Sign up to continue the space booking.</p>
  </div>
</div>

</body>
</html>
