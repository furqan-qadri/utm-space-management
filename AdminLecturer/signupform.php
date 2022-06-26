<!DOCTYPE html>
<html>
<head>
<title>Signing Up</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.header {
  padding: 10px;
  text-align: center;
  background: #8b0000;
  color: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #8b0000;
  margin-bottom: 25px;
}


button {
  background-color: #8b0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.return {
	width: 4%;
	height: 6%;
	background-color: white;
	position: absolute;
  top: 25px;
  left: 35px;
}


.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.login {
	width: auto;
	padding: 10px 18px;
	background-color: white;
	position: absolute;
  top: 25px;
  right: 35px;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="signup.php" style="border:1px solid #8b0000" method="post">
  <div class="container">
	<div class="header">
	<button type="button" class="return" style="padding: 0px 0px"><a href="Homepage.html"><img src="home.jpg"
     alt="home"
	 style="width:100%;height:100%;"/></a></button>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
	<button type="button" class="login"><a href="login form.html">Log In</a></button>
	</div>
    <hr>
	
	<label for="id"><b>id</b></label>
    <input type="text" placeholder="Enter ID" name="id" required>
	
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	
	<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	
	<label for="department"><b>Department</b></label>
    <input type="text" placeholder="Enter Department" name="department" required>
	
	<label for="course"><b>Course</b></label>
    <input type="text" placeholder="Enter Course" name="course" required>
	
	<label for="mobile"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobile" required>
	
	<label for="officeNo"><b>Office No</b></label>
    <input type="text" placeholder="Enter Office Number" name="officeNo" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="Homepage.html">Cancel</a></button>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>