<?php
	$firstname = filter_input(INPUT_POST, 'firstname');
	$lastname = filter_input(INPUT_POST, 'lastname');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	$city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $phone = filter_input(INPUT_POST, 'phone');
	$pincode = filter_input(INPUT_POST, 'pincode');
    if(!empty($firstname)|| !empty($lastname)|| !empty($email)|| !empty($password)|| !empty($ngon)|| !empty($address)|| !empty($city)|| !empty($state)|| !empty($phone) || !empty($pincode))
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL) && (preg_match("/^[a-zA-Z\s]+$/",$firstname)) && (preg_match("/^[a-zA-Z\s]+$/",$lastname)) && (strlen($password)>=8) && (preg_match("/^[a-zA-Z\s]+$/",$city)) && (preg_match("/^[a-zA-Z\s]+$/",$state)) && (strlen($phone)==10) && (strlen($pincode)==6)) {
            $host = "localhost";
            $dbusername = "root";
            $dbpassword= "";
            $dbname= "payroll";
            $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
            if(mysqli_connect_error()){
                die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $query="select * from pay where email='$email'";
                $result=mysqli_query($conn,$query);    
                $count = mysqli_num_rows($result);
                if($count == 0){
                    $sql = "INSERT Into pay (firstname,lastname,email,password,city,state,phone,pincode) values('$firstname','$lastname','$email','$password','$city','$state','$phone','$pincode')";
					// echo "Connection succesfull";
                    if($conn->query($sql)){
                        header("location:dashboard.html");
                    }
                    else{
                        header("location:dashboard.html");
                    }
                }
                else{
                    header("index.html");
                }
            }
        }
        else{
            header("dashboard.html");
        }
    }
    else{
        header("dashboard.html");
    }
?>    