<html>
<head>

<title>WELCOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style2.css">


</style>
</head>
<style>
	body{
		
		background-image : url('imgs/cov.jpg');
		background-repeat : no-repeat;
		background-attachment: fixed;
 		background-size: cover;
	}
</style>
<body>
 <h1></h1>
 
<div id="demo">
<button type=""  onclick="loadDoc()"></button>
</div>
 
<div id='main'>
		
</div>	
<input id = "demmo" type="image"  src="imgs/virus1.png"  onclick="loadDoc()"  height="130" width="130"></input>
		<form class="myform" action="create.php"method="post">
		<a href="homepage.php"><input type="button" id="a" value="Self Assessment"/></a>
		<a href="wmanage.php"><input type="button" id="b" value="Schedule pickup"/></a>
		<a href="precautions.php"><input type="button" id="c" value="What to do ?"/></a>
		<a href="https://www.covid19india.org/"><input type="button" id="d" value="Updates"/></a>
		<a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf"><input type="button" id="f" value="Helpline"/></a>
		<a href="sani.php"><input type="button" id="g" value="Sanitize home"/></a>
		<a href="login.php"><input type="button" id="e" value="Details |_<_|"/></a>
		</form>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.html", true);
  xhttp.send();
}
</script>

</body>
</html>




