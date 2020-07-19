<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cloudence</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('images/form-v9.jpg')"> 
<!--		<div class="form-v9-content" style="background-image: url('https://cloudlearn01.s3.ap-south-1.amazonaws.com/images/innovation.jpg')"> -->
			<!-- <form class="form-detail" action="../home/index.html" method="post">  -->
			<form class="form-detail" method="post" action="register.php">
			<?php include('errors.php'); ?> 
				<h2>Cloudence Welcomes You :)</h2>
				<div class="form-row-total">
					<div class="form-row">
					<!--	<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>  -->
<label>Username</label>
<!--  	  <input type="text" name="username" id="full-name" class="input-text" placeholder="Your Name" value="<?php echo $username; ?>">	-->					
 <input type="text" name="username" id="full-name" class="input-text" placeholder="Your Name" value="<?php echo $username; ?>" required>
					</div>
					<div class="form-row">
				 <!--  <input type="text" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">   -->
<label>Email</label>
<!--  	  <input type="email" name="email" id="your-email" class="input-text" placeholder="Your Email" value="<?php echo $email; ?>">  -->
<input type="email" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="<?php echo $email; ?>">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password_1" id="password" class="input-text" placeholder="Your Password">
					</div>
					<div class="form-row">
						<input type="password" name="password_2" id="comfirm-password" class="input-text" placeholder="Comfirm Password">
					</div>
				</div>
				<div class="form-row-last"> 
<!--					<button type="submit" class="btn" name="reg_user">Register</button>   -->
	<input type="submit" name="reg_user" class="register" value="Register"> 
					<p> Already a member: <a href="login.php" style="color:Tomato";><em>Sign in</em></a> 
					</p>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
