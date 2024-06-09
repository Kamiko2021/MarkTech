<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ECOMMERCE WEBSITE</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<section class="header">
		<div class="nav-bar">
			<div class="logo">
				<a href="home.php">MarkTech</a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="home.php" class="active">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="MARKTECH ABOUT US PAGE/about.php">About</a></li>
					<li><a href="contact.html">Contact Us</a></li>

				</ul>
			</div>
			<div class="icons">
				<u>
				<?php
				$Email=$_SESSION['SignIn_email'];

				if ($Email=="Guess"){
					echo "<li><a href='signlog.php'><i class='fa fa-sign-in'>Sign In</i></a></li>";
					echo "<li><a href='cart.php'><i class='fa fa-shopping-cart'>Cart</i></a></li>";	
					echo "<li><a><i>User Email: $Email</i></a></li>";
				}else if ($_SESSION['check_signIn']==1){
					echo "<li><a href='signlog.php'><i class='fa fa-sign-in'>Sign Out</i></a></li>";
					echo "<li><a href='cart.php'><i class='fa fa-shopping-cart'>Cart</i></a></li>";
					echo "<li><i>User Email: <a href='profile_details.php'>$Email</i></a></li>";
				}else if (empty($_SESSION['check_signIn'])){
					$_SESSION['SignIn_email']="Guess";
				}
			
				?>

				</u>
				
			</div>
		</div>
		<div class="hero">
			<div class="row">
				<div class="left-sec">
					<div class="content">
						<h2>ONLINE</h2>
						<h1>COMPUTER STUFFS</h1>
						<h3>STORE</h3>
						<a href="products.php" class="btn">Shop Now</a>
					</div>
				</div>
				<div class="right-sec">
					<div class="comp-stuffs">
						<div><a href="products.php"><img src="img/1.png"></a></div>
  						<div><a href="products.php"><img src="img/2.png"></a></div>
  						<div><a href="products.php"><img src="img/3.png"></a></div>
  						<div><a href="products.php"><img src="img/4.png"></a></div>
					</div>
				</div>
			</div>			
		</div>
	</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>	
<script>
$('.comp-stuffs').slick({
  dots: true,
  speed: 500,
  autoplay: true,
  fade: true,
  cssEase: 'linear' 
});
</script>

</body>
</html> 