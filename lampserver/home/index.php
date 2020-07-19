<?php 
  session_start(); 
      if (!isset($_SESSION['username'])) {
          $_SESSION['msg'] = "You must log in first";
	  header('location: login.php');
	  }
      if (isset($_GET['logout'])) {
          session_destroy();
        unset($_SESSION['username']);					
	header("location: login.php");							 }										 ?>
<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>cloudence.io</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	</head>
	<style>
.welcome {
	color: blue;
	text-align: left;
	font-family: Lobster, monospace;
}

.circular--square {
  border-radius: 50%;
}
	</style>
	<body>
	 <!--   <div class="welcome">  -->
		<!-- notification message -->
<!--		<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success" >
		<h3>
		  <?php
        		echo $_SESSION['success'];
       			unset($_SESSION['success']);
       		  ?>
 		</h3>
		</div>
		<?php endif ?>   -->
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo">Projection by <strong>Cloudence</strong></a>

					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="#">About</a>
						<a href="#contact">Contact</a>
						<a href="../login.php">Logout</a>
						
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Cloudence</h1>
					</header>
					
					<div class="flex ">

						<div>
							<!-- <span class="icon fa-car"></span>  -->
							<!-- <i class="fa fa-amazon" style="font-size:48px;color:orange"></i> -->
							<i class='fab fa-aws' style='font-size:48px;color:TOMATO'></i>
							<h3>Amazon Web Services</h3>
							<p>AWS-Cloud Computing</p>
							<video src="https://cloudlearn01.s3.ap-south-1.amazonaws.com/AWS/What+is+Cloud+Computing_.mp4" height="220" width="220" controls> Video not supported</video> <br />
							<ul>
							<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/AWS/AWS+-+VPC+Demo%2C+Public+%26+Private+Subnets%2C+Route+Tables%2C+Internet+%26+NAT+Gateways.mp4" target="_blank">VPC Networking</a></button></p></li>
						   
							<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/AWS/Introduction+to+Amazon+Simple+Storage+Service+(S3)+-+Cloud+Storage+on+AWS.mp4"target="_blank">Simple Storge Service</a></li></button></p></li>
							<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/AWS/AWS+-+VPC+Demo%2C+Public+%26+Private+Subnets%2C+Route+Tables%2C+Internet+%26+NAT+Gateways.mp4"target="_blank">Elastic Compute Cloud</a></button></p></li>
							</ul>
						</div>

						<div>
							<!-- <span class="icon fa-camera"></span> -->
							<i class='fas fa-cloud' style='font-size:48px;color:cyan'></i>
							<h3>Azure Cloud</h3>
							<p>Azure-Cloud Computing</p>
							<video id="azurevideo" src="https://cloudlearn01.s3.ap-south-1.amazonaws.com/Azure/Microsoft+Azure+Overview+_+Cloud+Computing+Tutorial+with+Azure+_+Azure+Training+_+Edureka.mp4" height="220" width="220" controls> Video not supported</video> <br />
							
							<ul>
								<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/Azure/Understanding+Azure+Network+Connectivity_TbW8I7r1Jlw_360p.mp4" target="k">VPC Networking</a></button></p></li>
								<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/Azure/Azure+Virtual+Machine+Tutorial+_+Creating+A+Virtual+Machine+In+Azure+_+Azure+Training+_+Simplilearn_QOv_-xBXkpo_360p.mp4"target="_blank">Launching a VirtualM/C</a></button></p></li>
								<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/Azure/Create+Azure+SQL+Database+In+Azure+Portal.mp4" target="_blank">Azure SQL DB</a></button></p></li>
							</ul>
						</div>

						<div>
							<!-- <span class="icon fa-bug"></span> -->
							<i class="fab fa-google" style='font-size:48px;color:#4285F4'></i>


							<h3>Google Cloud</h3>
							<p>Google-Cloud Computing</p>
							<video src="https://cloudlearn01.s3.ap-south-1.amazonaws.com/GoogleCloud/Google+Cloud+Platform+Tutorial+_+Google+Cloud+Platform+Fundamentals+_+GCP+Training+_+Edureka.mp4" height="220" width="220" controls> Video not supported</video> <br />
							<ul>
							<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/GoogleCloud/How+to+Create+a+Virtual+Machine+in+the+Google+Cloud+Platform_1FpMe8na64A_360p.mp4"target="_blank">Google-Vm Launch</a></button></p></li>
							<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/GoogleCloud/Creating+Bucket+on+GCP+_+Cloud+Storage+_+Google+Cloud+_+MLAIT.mp4"target="_blank">Storage classes</a></button></p></li>
							<li><p><button style="font-size:10px"><a href="https://cloudlearn01.s3.ap-south-1.amazonaws.com/GoogleCloud/The+Quick+Start+of+Google+Cloud+SQL+for+MySQL.mp4" target="_blank">Google Cloud SQL</a></button></p></li>
							
							</ul>
						</div>
						

					</div>

					<footer>
						<a href="#" class="button">Get Started</a>
					</footer>
				</div>
			</section>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div id="contact" class="inner">
					<div class="flex flex-2">
						<article>
							<div class="image round">
								<img src="images/pic1.jpg" alt="Pic 01" />
							</div>
							<header>
								<h3>Rafique Syed<br /> Director Platform Engineering <h5>at Lifion by ADP</h5></h3>
							</header>
							<p>A high-energy technocrat with over 17 years of rich combines expertise in Cloud Computing, DevOps, Software Configuration Management, Change Management, Application Lifecycle Management, Agile Scrum Master, Build and Release Management across online corporate banking, gaming, telecommunication and SaaS application</p>
							<footer>
								<a href="https://in.linkedin.com/in/rafiquesyed" target="_blank" class="button">LinkedIn</a>
								
							</footer>
						</article>

						<!--
						<article>
							<div class="image round">
								<img src="images/pic2.jpg" alt="Pic 02"  />
							</div>
							<header>
								<h3>Mohammed Usman Shariff<br /> DevOps Specialist</h3>
							</header>
							<p>Having 2.8_Years of experience in AWS Cloud Computing_Linux- Administration & Hadoop Administration - Big Data• AWS Certified Solutions Architect - Associate• Involved in designing and deploying multitude applications utilizing almost all of the AWS Stack (Including EC2, Route 53, S3, RDS, Dynamo DB, SNS, SQS, IAM) focusing on high-availability, fault tolerance, and auto-scaling.</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
							
						</article> 
						-->
						
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer"> 
			<!-- <section id="banner">  -->
				<!-- <div class="inner"  style="background-color:tomato; opacity:0.6;">  -->
				<div class="inner">
					<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<!--
					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>
					-->

				</div>
			</footer>
			<!-- </section>  -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
