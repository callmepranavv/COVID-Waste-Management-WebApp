<?php
	session_start();
	require 'dbconfig/config1.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<style>
	body{
		
		background-image : url('imgs/covv.jpg');
		background-repeat : no-repeat;
		background-attachment: fixed;
		background-color:black;
 		background-size: cover;
	}
</style>
<body >
        <center>
		<img id="p" src="imgs/login1.JPG"  height="190" width="750">
		</center>
    <div id="login">
	<h1>!Stay Home .. <br> !Stay Safe ..</h1>
	</div>

	<div id="main-wrapper">
		<center>
			
			<!--<img src="imgs/avatasr.png" class="avatar"/>-->
		</center>
	
		<form class="myform" action="login.php" method="post">
			<label style="color:white"><b>Username:</b></label><br>
			<input name="username" type="text " class="inputvalues" placeholder="Type your username" required/><br>
			<label style="color:white"><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
			<a href="data.php"><input name="login" style="color:white" type="submit" id="login_btn" value="Login"/><br></a>
			
		</form>
		<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$encrypted_password = md5($password);
			
			$query="select * from userinfotable WHERE username='$username' AND password='$encrypted_password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				// valid
				$_SESSION['username']= $username;
				header('location:data.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>
		
	</div>
</body>
</html>