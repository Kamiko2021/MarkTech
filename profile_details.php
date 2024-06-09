<?php
 session_start();
 $conn = mysqli_connect("localhost","root","","ecommerce");
 $Email=$_SESSION['customerEmail'];
?>

<?php
showdata_profileDetails($conn,"SELECT * FROM `cust_info` WHERE EmailAddress='$Email'");
$FirstName=$_SESSION['FistName'];
$LastName=$_SESSION['LastName'];
$ContactNumber=$_SESSION['ContactNumber'];
$Address=$_SESSION['Address'];

function showdata_profileDetails($connection, $sql){
$run_product=mysqli_query($connection, $sql);
		while($row_products=mysqli_fetch_array($run_product)){
			$Fname=$row_products['FirstName'];
			$Lname=$row_products['LastName'];
			$ContactNum=$row_products['ContactNumber'];
			$Address=$row_products['Residence_Address'];
			
			$_SESSION['FistName']=$Fname;
			$_SESSION['LastName']=$Lname;
			$_SESSION['ContactNumber']=$ContactNum;
			$_SESSION['Address']=$Address;
			
		}
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="profile_style.css">
	<link rel="stylesheet" type="text/css" href="cart_style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="topbar">
                <a href="signlog.php">Sign Out</a>           
                <a href="contact.html">Support</a>
                <a href="products.php">Products</a>
                <a href="home.php">Home</a>
   
            </div>
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <br><h1 class="m-3 pt-3">Customer Information</h1><br>
                            <img src="profile.png" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h3><?php echo "$FirstName $LastName"?></h3>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>Full Name</h5>    
                                                </div>

                                                <div class="col-md-9 text-secondary">
                                                <?php echo "$FirstName $LastName"?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>Email</h5>              
                                                </div>
                                                <div class="col-md-9 text-secondary">
                                                    <?php 
									                    echo $Email;?> 
                                                </div>                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>Phone</h5>           
                                                </div>
                                                <div class="col-md-9 text-secondary">
                                                    <?php echo "$ContactNumber"?>   
                                                </div>                             
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h5>Address</h5>
                                                    </div>
                                                    <div class="col-md-9 text-secondary">
                                                        <?php echo "$Address"?>
                                                    </div>
                                                </div>
                                            </div>              
                                        </div>
                                    </div>                     
                                </div>             
                            </div>           
                        </div>
                        <div class="col-md-8 mt-1">
                            <div class="card mb-3 content">  
                                <div class="card mb-3 content">
                                    <h1 class="m-3">Check-out Details</h1>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
									            <div class="small-container cart-page">
									                <table>
										                <tr>
											                <th>Product</th>
											                <th>Original Price</th>
                                                            <th>Subtotal</th>
                                                            <th>GrandTotal</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </tr>
										                <?php 
										                    showdata_prodDetails($conn, "SELECT * FROM `view_transactions` WHERE EmailAddress='$Email'");?>
									            </div>
                                            </div>
                                                <div class="col-md-9 text-secondary">
                                                </div>
                                        </div>                    
                                    </div>                
                                </div>               
                            </div>          
                        </div>    
                    </div>  
                </div> 
</body>
</html>

<?php 

function showdata_prodDetails($connection, $sql){


$run_product=mysqli_query($connection, $sql);
		while($row_products=mysqli_fetch_array($run_product)){
		$ProdIMG=$row_products['Prod_Img'];
		$prodName=$row_products['ProductName'];
		$price=$row_products['Price'];
		$subtotal=$row_products['Subtotal'];
		$GrandTotal=$row_products['GrandTotal'];
		$Status=$row_products['Status'];
		
        $count=0;
        $count=$count+1;
        $_SESSION['count']=$count;
        $_SESSION['prodname_$count']=$prodName;

		echo	"<tr>";
		echo		"<td>";
		echo		"<div class= 'cart-info'>";
		echo		"<img src='$ProdIMG'>";
		echo			"<div>";
		echo			"<br><p>$prodName</p>";
		echo			"</div>";
		echo		"</div>";
		echo		"</td>";
		echo			"<td>PHP $price ";
		echo 			"</td>";
		echo	"<td>PHP $subtotal</td>";
		
		echo	"<td>PHP $GrandTotal<br></td>";
		echo	"<td> $Status<br>";
		}
        echo    "<a href='profile_method.php'><br>Cancel Last Order</a></td>";
}


?>