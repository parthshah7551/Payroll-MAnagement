<?php


$username = "root";
$password = "";
$server = 'localhost';
$db='payroll';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?>

    <!-- <script>
        alert('Connection Succesfull');
    </script> -->
    <?php
}else{
    die("no connection" .mysqli_connect_error());

}
