<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
			 //login type starts
              <td style="padding-top:12px;"><select name="who"  title="MY CATEGORY" id='in' required>
                  <option ></option>
                  <option value='1'>Admin</option>
                  <option value='3' >client</option>
                  <option value='2' >seller</option>
                  
                </select></td>
			// login type end
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Enter Name</label>
			<input type="text" name="name" >
		</div>
				<div class="input-group">
			<label>Enter contact number</label>
			<input type="text" name="contact" >
		</div>
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>