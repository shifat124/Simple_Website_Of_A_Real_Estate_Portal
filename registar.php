<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
       <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Registration</h2>
</div>
<form action="registar in.php" class="form_design" method="post">
        <div class="input-group">
		<label>Full Name</label>
		<input type="text" name="fullname" value="">
        </div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
        </div>	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
        
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
        <div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value"">
	</div>
        <div class="input-group">
		<label>Country</label>
		<input type="text" name="country" value="">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn" >Register</button>
	</div>
	
</form>
</body>
</html>


