<?php
 session_start();
 $conn = mysqli_connect("localhost","root","","ecommerce");
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>THE SHOPPING CART</title>
    <link rel="stylesheet" type="text/css" href="cart_style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
	
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
					<li><a href="products.php">Products</a></li>
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
	
<div class= "row">
		<div class= "col-3">
			<h1>Shopping Cart</h1>
		</div>
	<!----cart items detail--->
	<div id= "container">
	<div id= "main">
	<div class="small-container cart-page">
		<table>
			<tr>
			<th>Product</th>
			<th>Original Price</th>
			<th>Quantity</th>
			<th>Subtotal</th>
			<th></th>
			</tr>
		<?php
			
		/*Codes in displaying cart order table */
			
		$Grandtotal=0;
		$prodName=$_SESSION['CartTemp_prodname'];
		$run_product=mysqli_query($conn, "Select * from view_cart where EmailAddress='$Email' OR EmailAddress='Guess'");
		while($row_products=mysqli_fetch_array($run_product)){
			$prodName=$row_products['ProductName'];
			$price=$row_products['Price'];
			$ProdIMG=$row_products['Prod_Img'];
			$qnty=$row_products['Quantity'];
			$subtotal=$row_products['Subtotal'];
	
			$Grandtotal=$Grandtotal+$subtotal;
			$_SESSION['CartTemp_prodname']=$row_products['ProductName'];
			
		
		echo		"<form action='cart.php' method='POST'>";
		echo	"<tr>";
		echo		"<td>";
		echo		"<div class= 'cart-info'>";
		echo		"<img src='$ProdIMG'>";
		echo			"<div>";
		echo			"<br><p>$prodName</p>";
		echo			"</div>";
		echo		"</div>";
		echo		"</td>";
		echo			"<td>Price: PHP $price ";
		echo 			"</td>";
		echo	"<td>$qnty</td>";
		
		echo	"<td>PHP $subtotal<br></td>";
		echo	"</form>";
		
		}
		echo 		"<td>";
		echo	"<h3><a href='cart_method.php'>Remove Last Item</a><br>Grand Total<br>PHP $Grandtotal</h3></td>";
		echo	"</tr>";
		
		
	function trans_insertdata($conn,$sql){
	
	if ($conn->query($sql)===true){
		echo "<script>alert('Checked Out, Successfully') </script> ";
		echo "<script>window.open('profile_details.php','_self')</script>";
	} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}	
	}	

	function trans_deletedata($conn,$sql){
	
		if ($conn->query($sql)===true){
	
		} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
		}	
		}	
	if (isset($_POST['checkout_btn'])){
		if ($_SESSION['SignIn_email']=="Guess"){
			echo "<script>alert('Please login!') </script> ";
			echo "<script>window.open('signlog.php','_self')</script>";
		}
		$run_product=mysqli_query($conn, "Select * from view_cart where EmailAddress='$Email'");
		trans_deletedata($conn,"DELETE FROM `cart_tbl` WHERE EmailAddress='$Email'");
		while($row_products=mysqli_fetch_array($run_product)){
			$productName=$row_products['ProductName'];
			trans_insertdata($conn,"INSERT INTO `transaction_tbl`(`GrandTotal`, `emailAddress`, `ProductName`, `Status`) VALUES ('$Grandtotal','$Email','$productName','Pending')");
		}
		
	}
		?>
		
			
</table>	
		<form action= "cart.php" method="POST">
			<div class= "btn">
			<input type="submit" name="checkout_btn" value="CHECK OUT"></input><br>
		</form>
	
</div>
</div>
</div>
	<!---------FOOTER----->
	
<footer id= "footer">
	<div class= "footer">
			<div class= "container">
				<div class= "row">
				<div class= "footer-col-1"><br>
				<h3>Download Our App</h3>
				<p>Download App for Android and IOS mobile phone.</p>
				<div class= "app-logo">
				<img src= "img/apps-1.png">
				<img src= "img/app-store.png">
				</div>
					<div class= "footer-col-2">
					<img src= "img/logo1trans.png">
					<p>Our Purpose Is To Sustainably Make Pleasure and Benefits of Computer Stuffs to the Many. </p>
					</div>
							<div class= "footer-col-3">
								<h3>Follow Us</h3>
							<ul>
								<li><a href="https://www.facebook.com/Marktech-109507328003416">Facebook</a></li>
								<img src= "img/fb.jpg">
								<li>Twitter</li>
								<img src= "img/tweet.jpg">
								<li>Instagram</li>
								<img src= "img/insta.jpeg">
							</ul>
						</div>
					</div>
					<hr>
					<p class= "copyright">Copyright 2021 - MARKTECH</p>
					</div>
				</div>	
			</div>
		</div>	
	</footer>
</body>
</html>
