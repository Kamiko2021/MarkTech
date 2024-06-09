<?php
 session_start();
 $conn = mysqli_connect("localhost","root","","ecommerce");
?>

<?php
$count=$_SESSION['count'];
$prodName=$_SESSION['prodname_$count'];
$Email=$_SESSION['customerEmail'];

//cart_deletedata($conn,"DELETE FROM `cart_tbl` WHERE ProductName='$prodName' AND EmailAddress='$Email'");
trans_deletedata($conn,"DELETE FROM `transaction_tbl` WHERE ProductName='$prodName' AND emailAddress='$Email'");

	// function cart_deletedata($conn,$sql){
	
	// 	if ($conn->query($sql)===true){
	// 		echo "<script>alert('Deleted to cart') </script> ";
	// 		echo "<script>window.open('cart.php','_self')</script>";
	// 	} else {
	// 		echo "Error: " . $sql . "<br>" . $conn->error;
	// 	}
	// }
		
		function trans_deletedata($conn,$sql){
	
		if ($conn->query($sql)===true){
	 		echo "<script>alert('Item removed!') </script> ";
	 		echo "<script>window.open('profile_details.php','_self')</script>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
?>