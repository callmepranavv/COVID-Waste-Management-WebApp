<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
	body{
		
		background-color : white;
		background-repeat : no-repeat;
		background-attachment: fixed;
 		background-size: cover;
	}
</style>
<body>
		
		<h1 id="text"><img id = "p2" src="imgs/reg11.png"  height="100" width="100"> 🆁🅴🅶🅸🆂🆃🅴🆁 🅷🅴🆁🅴 ®️</h1>	
		<div id="d1">
		<img id = "p2" src="imgs/virus1.png" alt="logo" height="200" width="200">
		<center>
		<img id="p" src="imgs/name.png"  height="190" width="750">
		</center>
		<img id="p1"  src="imgs/virus1.png" alt="logo" height="200" width="200">
		</div>
		<div id="d2"></div>

       <button id="dark" onclick="myFunction()"></button>

		<div id="main--wrapper">
	    <form class="myform" action="" method="post">
			<label ><b><img id = "p2" src="imgs2/name.webp"  height="25" width="25">  Full Name:</b></label><br>
			<input name="fullname" type="text" class="inputvalues" placeholder="Enter your Fullname" required/><br>
			<label><b>Gender  :</b></label> 
			<label  for="Gender"><img id = "p2" src="imgs2/male.png"  height="22" width="22"> Male</label>
			<input type="radio" class="radiobtns" name="gender" value="Male" checked required>
			<label  for="Gender"><img id = "p2" src="imgs2/female.png"  height="22" width="22">  Female</label>
			<input type="radio" class="radiobtns" name="gender" value="Female" required><br>
			<label ><b><img id = "p2" src="imgs2/phone.png"  height="22" width="22">  Phone Number:</b></label><br>
			<input name="phnumber" type="text" class="inputvalues" placeholder="Enter your Phone-Number" required/><br>
			<label ><b><b><img id = "p2" src="imgs2/phone.png"  height="22" width="22">  Alternate Phone Number:</b></label><br>
			<input name="aphnumber" type="text" class="inputvalues" placeholder="Enter Alternate Phone-Number" required/><br>
			<label ><b>Type: </b></label> 
			<select  class="qualification" name="type">
			  <option value=""></option>
			  <option value="MASKS">MASKS</option>
			  <option value="HAND-GLOVES">HAND-GLOVES</option>
			  <option value="HEAD-CAPS">HEAD CAP</option>
			  <option value="OTHERS">OTHERS</option>
			 <option value="ALL OF THEM">ALL OF THEM</option>
			</select><br>
			<label ><b><b><img id = "p2" src="imgs2/cart.webp"  height="22" width="22">  Quantity:</b></label><br>
			<input name="quantity" type="text" class="inputvalues" placeholder="Enter Quantity" required/><br>
			<label ><b><b><img id = "p2" src="imgs2/post.png"  height="22" width="22">  Zipcode:</b></label><br>
			<input name="pincode" type="text" class="inputvalues" placeholder="Enter your Zipcode" required/><br>
			<label ><b><b><img id = "p2" src="imgs2/add.png"  height="22" width="22">  Address:</b></label><br>
			<input  class="inputvalues" placeholder="Enter your Full Address" required/><br>
			<label ><b><b><img id = "p2" src="imgs2/date.webp"  height="22" width="22">  Pick-up Date:</b></label><br>
			<input name="date" type="date" class="inputvalues" placeholder="Enter Pick-up date" required/><br>
			<label ><b><b><img id = "p2" src="imgs2/email.png"  height="22" width="22">  E-mail:</b></label><br>
			<input name="email" type="email" class="inputvalues" placeholder="Enter your email" required/><br>
			<label ><b><b><img id = "p2" src="imgs2/pin.webp"  height="22" width="22">  Pin:</b></label><br>
			<input name="pin" type="password" class="inputvalues" placeholder="Enter your pin" required/><br>
			<a href="homepage.php"><input type="button" id="back_btn" value="Reset"/></a>
			<a href="homepage.php"><input name="submit_btn" type="submit" id="signup_btn" value="Register"/><br></a>
		</form>

		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				
				$fullname = $_POST['fullname'];
				$gender = $_POST['gender'];
				$phnumber = $_POST['phnumber'];
				$aphnumber = $_POST['aphnumber'];
				$type = $_POST['type'];
				$quantity = $_POST['quantity'];
				$pincode = $_POST['pincode'];
				$address = $_POST['address'];
				$date = $_POST['date'];
				$email = $_POST['email'];
				$pin = $_POST['pin'];

				$query= "insert into data values('','$fullname','$gender','$phnumber','$aphnumber','$type','$quantity','$pincode','$address','$date','$email','$pin')";
				$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Details Registered......STAY-HOME STAY-SAFE") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
	
			}
		?>
	</div>

	<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
</body>
</html>