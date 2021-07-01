<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style4.css">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>



<body>
		<div id="d1">
		<img id = "p2" src="imgs/virus1.png" alt="logo" height="200" width="200">
		<center>
		<img id="p" src="imgs/name.png"  height="190" width="750">
		</center>
		<img id="p1"  src="imgs/virus1.png" alt="logo" height="200" width="200">
		</div>
		<div id="d2"></div>

       <button id="dark" onclick="myFunction()"></button>
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>

<div class="cpage">
		        

<p>Are you looking for a high quality home sanitizing service? Germinator Mobile Sanitizing uses a highly advanced technology for sterilizing and sanitizing items and furniture. Germinator Mobile Sanitizing is ideal for both commercial and residential spaces, and it's a quick, convenient home sanitizing option. After 30-60 minutes in The Germinator, most items can be sanitized. Home sanitizing is good for germ and allergen removal, eliminating odors, drying water damaged items, and regular maintenance. Also, your items will be sanitized on-location, providing a convenient and comprehensive home sanitizing experience.<p>

<p>We employ the most hi-tech method in the home sanitizing industry. We use ozone and heat to naturally and safely sanitize your belongings. When used properly, ozone is great for disinfecting in day care centers and other places.<p>

<p>Home sanitizing with Germinator Mobile Sanitizing eliminates harmful bacteria, germs, viruses, and more. It can even destroy pests. It can also put a stop to odors and return your items to a sanitized, clean smelling condition.<p>

<h2>Do you need for a quick, in-depth home sanitizing service that will clean your items on-location? To contact Germinator Mobile Sanitizing, just fill out the form<a href="sanitize.php"><input type="button" id="back" name="submit_btn" value="Register Here"><h2>
<h1>__________________________________________________________________________________________________<h1>
</div>
</div>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");


}
</script>

</body>
</html>