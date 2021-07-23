
<?php
	$email2="";
	$connect=mysqli_connect("localhost","root","","payroll") or die("connection faild");
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	if (empty($_POST['email'])) {
		$email2 = "Name is required";
	  }
	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		$query="select password from pay where email='$email'";
		$result=mysqli_query($connect,$query);
		while ( $row = mysqli_fetch_assoc( $result)) {
			$pwFromDB = $row['password'];
		}
		
		if($pwFromDB ==$password){

			header("location:dashboard.html");
		}
		else{
			header("location:index.html");
			// echo"<script>alert('Retry')</script>";
		}
	}
	else{
	 	header("location:index.html");
	 }


?>

   