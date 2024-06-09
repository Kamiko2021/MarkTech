<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
        <title>About Us Page</title>       
</head>
<body>
	
	<div class="header">
		<div class="nav-bar">
			<div class="logo">
				<a href="/home.php">MarkTech</a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="/home.php" >Home</a></li>
					<li><a href="/products.php">Products</a></li>
					<li><a href="/MARKTECH ABOUT US PAGE/about.html" class="active">About</a></li>
					<li><a href="/contact.html">Contact Us</a></li>

				</ul>
			</div>
			<div class="icons">
				<u>
				<?php
				$Email=$_SESSION['SignIn_email'];

				if ($Email=="Guess"){
					echo "<li><a href='/signlog.php'><i class='fa fa-sign-in'>Sign In</i></a></li>";
					echo "<li><a href='/cart.php'><i class='fa fa-shopping-cart'>Cart</i></a></li>";	
					echo "<li><a><i>User Email: $Email</i></a></li>";
				}else if ($_SESSION['check_signIn']==1){
					echo "<li><a href='/signlog.php'><i class='fa fa-sign-in'>Sign Out</i></a></li>";
					echo "<li><a href='/cart.php'><i class='fa fa-shopping-cart'>Cart</i></a></li>";
					echo "<li><i>User Email: <a href='/profile_details.php'>$Email</i></a></li>";
				}else if (empty($_SESSION['check_signIn'])){
					$_SESSION['SignIn_email']="Guess";
				}
			
				?>

				</u>
				
			</div>
		</div>
	</div>

	<section>
		<div class="content">
			<h2>About Us</h2>
			<h4>Getting to know MARKTECH</h4>
			<div class="artical">
				<p>Established in 2021, it is a platform tailored for every places in the country, providing customers with an easy, secure and fast online shopping experience through trusted payment method and fulfillment support.</p>
			</div>
			<div class="button">
				<a href="https://www.facebook.com/Marktech-109507328003416">Read More</a>
			</div>
			<div class="social">
				<a href="https://www.facebook.com/Marktech-109507328003416"><i class="fab fa-facebook-f"></i></a>
				<a href=""><i class="fab fa-twitter"></i></a>
				<a href=""><i class="fab fa-instagram"></i></a>
			</div>
		</div>
		<div class="image-section">
			<img src="image/img-one.jpg">
		</div>
	</section>
</body>
</html>