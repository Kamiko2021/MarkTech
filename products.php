<?php
	session_start();
	
?>
<?php
			//product names that can be access on any pages...
				$_SESSION['product1']="GIGABYTE AORUS B550 Elite";
				$_SESSION['product2']="Ryzen 3 3200g";
				$_SESSION['product3']="Hyper X DDR4 Ram 8gb";
				$_SESSION['product4']="ITX CPU CASE";
				$_SESSION['product5']="CORSAIR VS650";
				$_SESSION['product6']="A4 Tech Keyboard Mouse Combo";
				$_SESSION['product7']="Logitech Wired Zone";
				$_SESSION['product8']="ASUS VZ249HEG1R Gaming Monitor";
			
				
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
					<li><a href="products.php" class="active">Products</a></li>
					<li><a href="MARKTECH ABOUT US PAGE/about.php">About</a></li>
					<li><a href="contact.html">Contact Us</a></li>

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
					echo "<li><i>User Email: <a href='profile_details.php'>$Email</i></a></li>";
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
        <hr><h1>PRODUCTS</h1><hr>
    <section class="row1"> 
		<form action="prod_details.php" method="POST">
        <div class="parts">
		<img src="img/1.png" id="board"><br>
			
            <span>GIGABYTE AORUS B550 Elite<br></span><br>
			
                <input class="btn" type="submit" name="add_product1" value="SPECS"></input>
        </div>
		</form>
		<form action="prod_details.php" method="POST">

        <div class="parts">
            <img src="img/3.png"><br>
            <span>Ryzen 3 3200g<br></span><br>
                <input class="btn" type="submit" name="add_product2" value="SPECS"></input>
        </div>
		</form>
		<form action="prod_details.php" method="POST">
        <div class="parts">
            <img src="img/2.png"><br>
            <span>Hyper X DDR4 Ram 8gb<br></span><br>
                <input class="btn" type="submit" name="add_product3" value="SPECS"></input>
        </div>
		</form>
		<form action="prod_details.php" method="POST">
        <div class="parts">
            <img src="img/4.png"><br>
            <span>ITX CPU CASE<br></span><br>
                <input class="btn" type="submit" name="add_product4" value="SPECS"></input>
        </div>
		</form>
    </section>

    <section class="row2"> 
	<form action="prod_details.php" method="POST">	
        <div class="parts">
            <img src="img/5"><br>
            <span>CORSAIR VS650<br></span><br>
                <input class="btn" type="submit" name="add_product5" value="SPECS"></input>
        </div>
		</form>
        <div class="parts">
	<form action="prod_details.php" method="POST">	
            <img src="img/6.jpg"><br>
            <span>A4 Tech Keyboard Mouse Combo<br></span><br>
                <input class="btn" type="submit" name="add_product6" value="SPECS"></input>
        </div>
		</form>
	<form action="prod_details.php" method="POST">
        <div class="parts">
            <img src="img/7.png"><br>
            <span>Logitech Wired Zone<br></span><br>
                <input class="btn" type="submit" name="add_product7" value="SPECS"></input>
        </div>
		</form>
	</form>
	<form action="prod_details.php" method="POST">
        <div class="parts">
            <img src="img/monitor.png"><br>
            <span>ASUS VZ249HEG1R Gaming Monitor</span><br>
                <input class="btn" type="submit" name="add_product8" value="SPECS"></input>
        </div>
	</form>
    </section>
	
</body>
</html> 
