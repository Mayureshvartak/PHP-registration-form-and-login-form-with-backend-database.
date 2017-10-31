<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPSC FEVER </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
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
			<label>Date of Birth</label>
			<input type="Date" name="bday" placeholder="Date OF Birth">
		</div>
		
		<div class="input-group">
             <label>State</label>
			 <input list="State" name="browser">
  <datalist id="State">
    <option value="Maharashtra">
    <option value="Gujarat">
    <option value="Madhya Pradesh">
    <option value="Kerala">
    <option value="Tamil-Nadu">
  </datalist>
		</div>
		
		<div class="input-group">
             <label>City/Town</label>
			 <input list="City" name="browser">
  <datalist id="City">
    <option value="Mumbai">
    <option value="Ahmedabad">
    <option value="Bhopal">
    <option value="Thiruvananthapuram">
    <option value="Chennai">
  </datalist>
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
