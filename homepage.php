<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style4.css">
</head>
<style>
	body{
		
		background-color : #f5f6fa;
		background-repeat : no-repeat;
		background-attachment: fixed;
 		background-size: cover;
	}
</style>
<body>
<button id="dark" onclick="myFunction()"></button>
		<div id="d1">
		<img  src="imgs/virus1.png" alt="logo" height="200" width="200">
		<center>
		<img id="p" src="imgs/name.png"  height="190" width="750">
		</center>
		<img id="p1"  src="imgs/virus1.png" alt="logo" height="200" width="200">
		</div>
		<div id="d2"></div>
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>

		
	    <form class="my-form" action="" method="post">
		<h1 id="text1"><img id = "p2" src="imgs/self.png"  height="100" width="100"> 🆂🅴🅻🅵 🅰🆂🆂🅴🆂🅼🅴🅽🆃 ✔️ </h1>	
		
		<br><br><br>
		<label style="color:#EA2027"><b>Name:</b></label><br>
		<input name="name" type="text" class="input-values" placeholder="Enter your Name" required/><br>
		<label style="color:#EA2027"><b>Phone Number:</b></label><br>
		<input name="phnumber" type="text" class="input-values" placeholder="Enter your Phone-Number" required/><br><br><br>


		<ul style="color:#182C61"><b>Are You experiencing any of the following symptoms ?</b></ul>
			<ul>
				<li>severe difficulty breathing (for example, struggling for each breath, speaking in single words)</li><br>
				<li>severe chest pain</li><br>
				<li>having a very hard time waking up</li><br>
				<li>feeling confused</li><br>
				<li>lost consciousness</li>
			</ul>
			<label style="color:green" for="q1">Yes</label>
			<input type="radio" class="radiobtn" name="q1" value="YES"  required>
			<label style="color:#EA2027" for="q1">No</label>
			<input type="radio" class="radiobtn" name="q1" value="NO" required>

			<h5>__________________________________________________________________________________________________________________________________________</h5>

			<ul style="color:#182C61"><b>Are you experiencing any of the following symptoms (or a combination of these symptoms) ?</b></ul>
			<ul>
				<li>fever</li><br>
				<li>new cough</li><br>
				<li>difficulty breathing (for example, struggling for each breath, cannot hold breath for more than 10 seconds)</li><br>
			</ul>
			<label style="color:green" for="q2">Yes</label>
			<input type="radio" class="radiobtn" name="q2" value="YES" required>
			<label style="color:#EA2027" for="q2">No</label>
			<input type="radio" class="radiobtn" name="q2" value="NO" required>

			<h5>___________________________________________________________________________________________________________________________________________</h5>


			<ul style="color:#182C61"><b>Have you been outside of INDIA within the last 21 days ?</b></ul>
			<label style="color:green" for="q3">Yes</label>
			<input type="radio" class="radiobtn" name="q3" value="YES"  required>
			<label style="color:#EA2027" for="q3">No</label>
			<input type="radio" class="radiobtn" name="q3" value="NO" required>

			<h5>___________________________________________________________________________________________________________________________________________</h5>


			<ul style="color:#182C61"><b>Have you come into close contact (within 6 feet) with someone who has a laboratory confirmed COVID – 19 diagnosis <br>in the past 14 days??</b></ul>
			<label style="color:green" for="q4">Yes</label>
			<input type="radio" class="radiobtn" name="q4" value="YES"  required>
			<label style="color:#EA2027" for="q4">No</label>
			<input type="radio" class="radiobtn" name="q4" value="NO" required>

			<h5>_________________________________________________________________________________________________________________________________________________</h5>


			<ul style="color:#182C61"><b>Do You wear mask whenever you go out and maintain Social Distancing ?</b></ul>
			<label style="color:green" for="q5">Yes</label>
			<input type="radio" class="radiobtn" name="q5" value="YES"  required>
			<label style="color:#EA2027" for="q5">No</label>
			<input type="radio" class="radiobtn" name="q5" value="NO" required>

			<h5>________________________________________________________________________________________________________________________________________________</h5>


			<ul style="color:#182C61"><b>Do you follow the lockdown and go out only to get essentials ?</b></ul>
			<label style="color:green" for="q6">Yes</label>
			<input type="radio" class="radiobtn" name="q6" value="YES"  required>
			<label style="color:#EA2027" for="q6">No</label>
			<input type="radio" class="radiobtn" name="q6" value="NO" required><br><br>
			<h5>____________________________________________________________________________________________________________________________________________________</h5>

			<input type="submit" id="backbtn" name="submit_btn" value="Submit"/></a><br><br><br>
			<a href="index.php"><input type="button" id="backbtn" name="Back" value="Exit"/></a><br>

			
		</form>

		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				
				$name = $_POST['name'];
				$phnumber = $_POST['phnumber'];
				$q1 = $_POST['q1'];
				$q2 = $_POST['q2'];
				$q3 = $_POST['q3'];
				$q4 = $_POST['q4'];
				$q5 = $_POST['q5'];
				$q6 = $_POST['q6'];

				
				$query= "insert into response values('','$name','$phnumber','$q1','$q2','$q3','$q4','$q5','$q6')";
				$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("STAY-HOME STAY-SAFE ") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
	
			}
		?>
	<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>


</body>
</html>