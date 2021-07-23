
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
    <style>
        body{
                align-items : center;
                justify-content : center;
                text-align:center;
                background:  lightblue;
                font-weight : bold;
                /* color: blue; */
        }
        table{
                align-items : center;
                justify-content : center;
                text-align:center;
        }
        h1{
                margin-top : 20px;
        }
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    /* align-items : center;
                justify-content : center;
                text-align:center; */
                margin : auto auto;
                margin-top:45px;
}
.styled-table thead tr {
    background-color: #009879;
    color: #000;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    text-align : center;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
*{
    margin: 0px;
    padding: 0px;
}
#navbar{
        display: flex;
        position: relative;
}
#navbar ul{
        display: flex;
        margin: 8px;
        padding: 5px;
}
#navbar ul li{
        margin: 6px;
        list-style: none;
        padding: 5px;
        font-size: 24px;
}
#navbar ul li a{
    color: black;
    display: block;
    margin: 0px 4px;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    padding: 5px;
}
#navbar ul li a:hover{
    color: White;
    background-color: black;
   
}


        </style>
</head>
<body>
<nav id="navbar">
        
        <ul>
            <li class="item"><a href="dashboard.html">Home</a></li>
            <li class="item"><a href="Contact Us.html">Contact Us</a></li>
            <li class="item"><a href="about us.html">About Us</a></li>
            
        </ul>
    </nav>
    <h1>Employee Details</h1>
<table class="styled-table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>City</th>
            <th>State</th>
            <th>Phone No</th>
            <th>Pincode</th>
        </tr>
    </thead>
    <tbody>
    <?php 

include 'connection.php'; 
$selectquery = " select * from pay";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

// echo $nums;

// $res = mysqli_fetch_array($query);

// echo $res[1];

while( $res = mysqli_fetch_array($query)){

    // echo $res['phone'] . "<br>";


?>

        <tr>
            <td><?php echo $res['firstname']; ?></td>
            <td><?php echo $res['lastname']; ?></td>
            <td><?php echo $res['email']; ?></td>
            <td><?php echo $res['city']; ?></td>
            <td><?php echo $res['state']; ?></td>
            <td><?php echo $res['phone']; ?></td>
            <td><?php echo $res['pincode']; ?></td>
        </tr>
     <?php   
    }
    ?>
    </tbody>
</table>

</body>
</html>

