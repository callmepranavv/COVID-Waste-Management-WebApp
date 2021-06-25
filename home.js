<html>

<head>
<title>Book</title>
<link rel="stylesheet" href="css/style.css">

<style>

table

{
color:#2c2c54;
background-color:none;
border-style:solid;
border-width:2px;
border-color:#3d3d3d;
border-collapse: collapse;
font-size:larger;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-variant: small-caps;
font-weight: lighter;
position: absolute;
top:350px;
left:10px;
}

body{
		
		background-image : url('imgs/s.jpeg');
		background-repeat : no-repeat;
		background-attachment: fixed;
 		background-size: cover;
	}

</style>

</head>

<body background-color="#EEFDEF">
<h1 id="text">Order Details</h1>
<div id="d1">
		<img  src="imgs/virus1.png" alt="logo" height="200" width="200">
		<center>
		<img id="p" src="imgs/name.png"  height="190" width="750">
		</center>
		<img id="p1"  src="imgs/virus1.png" alt="logo" height="200" width="200">
		</div>
    <div id="d2"></div>
<a href="data.php"><input type="button" id="z" value="back"/></a>
<?php

require 'dbconfig/config.php';

 
$query = "SELECT * FROM `data1`";
$result = mysqli_query($con,$query);

 

echo "<table border='1'>

<tr>

<th>Order-no</th>

<th>Full-Name</th>

<th>Gender</th>

<th>Contact-Number</th>

<th>Alternate-Number</th>

<th> Home-Type</th>

<th>Total Sqfeet</th>

<th>Zip-code</th>

<th>Full-Address</th>

<th>Date</th>

<th>E-mail</th>

<th>Pin</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['fullname'] . "</td>";

  echo "<td>" . $row['gender'] . "</td>";

  echo "<td>" . $row['phnumber'] . "</td>";

  echo "<td>" . $row['aphnumber'] . "</td>";

  echo "<td>" . $row['type'] . "</td>";

  echo "<td>" . $row['quantity'] . "</td>";

  echo "<td>" . $row['pincode'] . "</td>";

  echo "<td>" . $row['address'] . "</td>";

  echo "<td>" . $row['date'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['pin'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>


