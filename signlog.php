<?php
session_start();
$_SESSION['SignIn_email'] ="Guess";
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="SignIn_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="signlog.php" method="POST" >
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" name="Fname" placeholder="First Name">
	<input type="text" name="Lname" placeholder="Last Name">
	<input type="text" name="Contactnum" placeholder="Contact Number">
	<input type="email" name="SignUp_email" placeholder="Email">
	<input type="password" name="SignUp_password" placeholder="Password">
	<input type="text" name="Address" placeholder="Address">
	<button type="submit" name="SignUp">SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="signlog.php" method="POST">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="SignIn_email" placeholder="Email">
	<input type="password" name="SingIn_password" placeholder="Password">
	<a href="#">Forgot Your Password</a>

	<button type="submit" name="SignIn">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Create Account</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","ecommerce");

if (isset($_POST['SignIn'])){
	
	$cust_email=mysqli_real_escape_string($conn,$_POST['SignIn_email']);
	$cust_pass=mysqli_real_escape_string($conn,$_POST['SingIn_password']);
	$tempEmail=$_POST['SignIn_email'];
	$_SESSION['customerEmail']=$tempEmail;
	$sql_query= "SELECT * FROM signin_details where EmailAddress='$cust_email' AND Password='$cust_pass'";
	$validate_signin= mysqli_query($conn, $sql_query);
	
	$check = mysqli_num_rows ($validate_signin);
	$_SESSION['check_signIn']=$check;
	if ($check==1){
		$_SESSION['SignIn_email']=$cust_email;
		echo "<script>alert('Signed In, Welcome ') </script> ";
		echo "<script>window.open('home.php','_self')</script>";
		
	}
	else {
		echo "<script>alert('email and password, unmatch!') </script> ";
	}
}else if (isset ($_POST['SignUp'])){

$firstname=$_POST['Fname'];	
$lastname=$_POST['Lname'];
$contactnumber=$_POST['Contactnum'];
$Email = $_POST['SignUp_email'];
$password = $_POST['SignUp_password'];
$address = $_POST['Address'];

$sql="INSERT INTO `cust_info`(`EmailAddress`, `FirstName`, `LastName`,`ContactNumber`,`Residence_Address`) VALUES ('$Email','$firstname','$lastname','$contactnumber','$address')";
signUp_insertAccess($conn,"INSERT INTO `access_tbl`(`Password`, `EmailAddress`) VALUES ('$password','$Email')");

	if ($conn->query($sql)===true){
		$_SESSION['SignIn_email']=$Email;
		echo "<script>alert('Welcome to MarkTech !') </script> ";

		
	} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
function signUp_insertAccess($conn,$sql){
	
	if ($conn->query($sql)===true){
		
	} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>