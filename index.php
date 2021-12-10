<?php



session_start();

if ( isset($_SESSION["user"]) )

{
header("location:https:/private.php");

}

else 
	
	{
echo '

<!DOCTYPE html>
<html>
<head>
<title>Failes</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>



html,body
{
  height:100%;
  width:100%;
  margin:0;
  font-size: medium;
}
body
{
  display:flex;
}
form
{
  margin:auto;
}

.container
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}

span.nobr 
{
	white-space: nowrap; 
}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<html>

<body align="center">

<div class="container">
<br>

<div style="float: left; " align="center">   </div>

<div class="login">

	<form action="start.php" method="post">
	
<span align="left"> <img src="files.png" width = "100" height = "100" align="middle"> </span>
	<h1 align="center">  File Browser </h1>



<ul style="list-style-type: none;">
  <li><input type="text" name="user" placeholder="Username" id="login" autofocus required></li>
  <li><input type="password" name="pass" placeholder="Password" id="login" required></li>
  <li><button type="submit" class="btn btn-primary">Login</button></li> 
</ul>

	</form>

</div>



</body>
</html>
';
}

?>