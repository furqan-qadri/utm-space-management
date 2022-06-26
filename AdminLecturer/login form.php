<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log In</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #8b0000;}

.header {
  padding: 80px;
  text-align: center;
  background: #8b0000;
  color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #8b0000;
  box-sizing: border-box;
  background-color: #ddd;
}

button {
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.signup {
	width: auto;
	padding: 10px 18px;
	background-color: white;
}

.return {
	width: 5%;
	height: 7%;
	background-color: white;
	position: absolute;
  top: 8px;
  left: 16px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="login.php" method="post">

  <div class="header">
  <button type="button" class="return" style="padding: 0px 0px"><a href="Homepage.html"><img src="home.jpg"
     alt="home"
	 style="width:100%;height:100%;"/></a></button>
  <h1>WELCOME</h1>
  <h2>UTM SPACE BOOKING SYSTEM</h2>
</div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#8b0000">
    <button type="button" class="cancelbtn"><a href="Homepage.html">Cancel</a></button>
	<button type="button" class="signup"><a href="signupform.phP">Sign Up</a></button>
    <span class="psw" style="color: white">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>