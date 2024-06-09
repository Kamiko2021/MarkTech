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
					<li><a href="home.php">Home</a></li>
					<li><a href="products.php" >Products</a></li>
					<li><a href="MARKTECH ABOUT US PAGE/about.php">About</a></li>
					<li><a href="contact.html" class="active">Contact Us</a></li>

				</ul>
			</div>
			<div class="icons">
				<u>
				<?php	
				try {
				
				if ($_SESSION['SignIn_email'] =="Guess"){
					echo "<li><a href='signlog.php'><i class='fa fa-sign-in'>Sign In</i></a></li>";
					echo "<li><a href='cart.php'><i class='fa fa-shopping-cart'>Cart</i></a></li>";
					$Email=$_SESSION['SignIn_email'];
					echo "<li><a><i>User Email: $Email</i></a></li>";
				}else if ($_SESSION['check_signIn'] ==1){
					echo "<li><a href='signlog.php'><i class='fa fa-sign-in'>Sign Out</i></a></li>";
					echo "<li><a href='cart.php'><i class='fa fa-shopping-cart'>Cart</i></a></li>";
					$Email=$_SESSION['SignIn_email'];
					echo "<li><a><i>User Email: <a href='profile_details.php'>$Email</i></a></li>";
				}
				
				}catch(Exception $e){			
					echo "<li><a href='signlog.php'><i class='fa fa-sign-in'>Sign In</i></a></li>";
					echo "<li><a href='cart.php'><i class='fa fa-shopping-cart'>Cart</i></a></li>";
					echo "<li><a><i>User Email: Guess</i></a></li>";
				}
				?>
				</u>
			</div>
		</div>
	</section>
	<div class="feedback_back">
        <hr><h1>Feedback</h1><hr></div>
        <br>
	
		
        <h1><center>Thank you for the feedback!</center></h1>
	
 
</body>
</html> 