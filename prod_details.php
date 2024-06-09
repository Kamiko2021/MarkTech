<?php
 session_start();
 $conn = mysqli_connect("localhost","root","","ecommerce");
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

<!------product details table--------->
     <hr><h1>PRODUCT DETAILS</h1><hr>
<div class="product_details">
<table>
<tr>

<?php
//events..
$productname="";
	if(isset($_POST['add_product1'])){

$productname=$_SESSION['product1'];
	}else if (isset($_POST['add_product2'])){


$productname=$_SESSION['product2'];		
	}else if (isset($_POST['add_product3'])){


$productname=$_SESSION['product3'];		
	}else if (isset($_POST['add_product4'])){


$productname=$_SESSION['product4'];		
	}else if (isset($_POST['add_product5'])){


$productname=$_SESSION['product5'];		
	}else if (isset($_POST['add_product6'])){


$productname=$_SESSION['product6'];		
	}else if (isset($_POST['add_product7'])){


$productname=$_SESSION['product7'];		
	}else if (isset($_POST['add_product8'])){


$productname=$_SESSION['product8'];		
	}
showdata_prodDetails($conn,"SELECT  `Prod_Img`, `prodname`, `Specification`, `available_stocks`, `Price` FROM `product_tbl` WHERE prodname='$productname'");
//methods..
	function showdata_prodDetails($connection, $sql){
		$run_product=mysqli_query($connection, $sql);
		while($row_products=mysqli_fetch_array($run_product)){
			$productIMG=$row_products['Prod_Img'];
			$prodName=$row_products['prodname'];
			$Specs=$row_products['Specification'];
			$price=$row_products['Price'];
			
			
			$_SESSION['temp_product']=$prodName;
			$_SESSION['temp_price']=$price;
			$_SESSION['Specs']=$Specs;
			$_SESSION['prod_img']=$productIMG;
		
		}
	}
	$productName=$_SESSION['temp_product'];
	$price=$_SESSION['temp_price'];
	$Specs=$_SESSION['Specs'];
	$productIMG=$_SESSION['prod_img'];
	echo "<tr>";
			echo "<form action='prod_details.php' method='POST'>";
			echo "<td><div><center><img src='$productIMG'></center>";
			
			echo "<div><h2><center>$productName</center></h2></p><br>";
			echo "<h1>Php: $price</h1><br>";
			echo "</div></div></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><h3>$Specs</h3></td>";
			echo "</tr>";
	echo "<tr>";
	echo "<td><center><input class='btn' type='submit' name='cart_product' value='add to cart'><br>";
	echo  "<input class='btn_quantity' type='number' name='subtotal' placeholder='Quantity' value='1'></center><h1></h1></a></td><br><br>";
	echo "</tr>";
	echo "  </form>";
		
	
	if(isset($_POST['cart_product'])){
	$quantity=$_POST['subtotal'];
	$subtotal=(int)$price * (int)$quantity;
	cart_insertdata($conn,"INSERT INTO `cart_tbl`( `ProductName`,`Quantity`,`Subtotal`, `EmailAddress`) VALUES ('$productName','$quantity','$subtotal','$Email')");	
	showdata_prodDetails($conn,"SELECT  `Prod_Img`, `prodname`, `Specification`, `available_stocks`, `Price` FROM `product_tbl` WHERE prodname='$productname'");
	}

	
	
	//methods in inserting data on cart info
	function cart_insertdata($conn,$sql){
	
	if ($conn->query($sql)===true){
	echo "<script>alert('Added to cart') </script> ";
	echo "<script>window.open('cart.php','_self')</script>";
	} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
	
	
?>
 </table>
<div class="comments" align="center">
	<form action="prod_details.php" method="POST" >
		<br><textarea name="comment" rows="5" cols="100"></textarea><br>
		<br><input class="btn" type="submit" name="Submit_comment" value="COMMENT"></input><br>
		</form>
</div>	

<?php
if (isset($_POST['Submit_comment'])){
	$temp_comment=$_POST['comment'];
	showdata_prodDetails($conn,"SELECT  `Prod_Img`, `prodname`, `Specification`, `available_stocks`, `Price` FROM `product_tbl` WHERE prodname='$productName'");
	comment_insertdata($conn,"INSERT INTO `comments_tbl`(`ProductName`, `Comment`, `EmailAddress`) VALUES ('$productName','$temp_comment','$Email')");
}
showdata_comments($conn, "SELECT * FROM view_comments WHERE prodname='$productName'");
function showdata_comments($connection, $sql){
		$run_comments=mysqli_query($connection, $sql);
		while($row_comment=mysqli_fetch_array($run_comments)){
			echo "<table>";
			$EmailAddress=$row_comment['EmailAddress'];
			$Comment=$row_comment['Comment'];
			echo "<tr>";
			echo "<td class='comments'><h3>$EmailAddress:</h3> <h5>$Comment</h5></td><br>";
			echo "</tr></table>";
			
		}
		
}

function comment_insertdata($conn,$sql){
	
	if ($conn->query($sql)===true){

	} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>


</div>
	
</body>
</html>