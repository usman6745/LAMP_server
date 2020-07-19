<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Cloudence</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
body {
background: url('https://cloudlearn01.s3.ap-south-1.amazonaws.com/images/blur.jpg') no-repeat;
background-size: cover;
}
</style>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5"><q><em>The cloud is all about how you do computing, not where you do computing</q></em></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                	<form id="login-form" class="form" action="login.php" method="post"> 
		<!--        <form id="login-form" class="form" action="./home/index.html" method="post">  -->
						<?php include('errors.php'); ?>
                            <h3 class="text-center text-info";><font color="orange">Login</h3>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required> 
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> 
                           <!--      <input type="submit" name="submit" class="btn btn-info btn-md"  value="Login">  -->
		<button type="submit" class="btn btn-info btn-md" name="login_user">Login</button>
								<!-- <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"> -->
								                            </div>
                            <div id="register-link" class="text-right">
                                <a href="./register.php" class="text-info"><font color="lightblue"><em><h4><b>Sign up</b></h5></em></a>
								<!-- <a href="./registration/reg.html" class="text-info"><font color="lightblue"><em><h4><b>Register here</b></h5></em></a>	-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

