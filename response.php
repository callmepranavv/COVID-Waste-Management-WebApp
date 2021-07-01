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
<h1 id="text">Assesment Responses</h1>
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

 
$query = "SELECT * FROM `response`";
$result = mysqli_query($con,$query);

 

echo "<table border='1'>

<tr>

<th>ID</th>

<th>Name</th>

<th>Contact-Number</th>

<th>Are You experiencing any of the following symptoms ?</th>

<th>Are you experiencing any of the following symptoms<br>(or a combination of these symptoms) ?</th>

<th>Have you been outside of INDIA within the last 21 days ?</th>

<th>Have you come into close contact (within 6 feet)<br>with someone who has a laboratory confirmed <br>COVID – 19 diagnosis in the past 14 days?</th>

<th>Do You wear mask whenever you go out and maintain Social Distancing ?</th>

<th>Do you follow the lockdown and go out only to get essentials ?</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['phnumber'] . "</td>";

  echo "<td>" . $row['q1'] . "</td>";

  echo "<td>" . $row['q2'] . "</td>";

  echo "<td>" . $row['q3'] . "</td>";

  echo "<td>" . $row['q4'] . "</td>";

  echo "<td>" . $row['q5'] . "</td>";

  echo "<td>" . $row['q6'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>


