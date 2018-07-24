<?php
include 'header.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<style type="text/css">
	
	    div.c{text-align:center; margin-top: 50px;font-family: Cooper Black;}
	    pre {font-family: cursive;}
	    body {background-image: url("login.jpg");background-size: cover;}
		h1{font-family: Cooper Black;text-decoration-style: solid; text-decoration: underline overline;}
		button {border-style: ridge;border:0;background-color: lightgreen;font-size: 17px}
	</style>
	<script type="text/javascript">
		function ver()
		{
			var a,b,c;
			a=f2.user.value;
			b=f2.pwd.value;
			c=f2.cpwd.value;
			if(a!="")
			{
				if(c==b)
					return true;
				else
					{alert("Enter valid credentials");
					return false;}
			}
			else
                {alert("Enter valid credentials");
					return false;}
		}
	</script>
</head>
<body >
<h1 align="center">Register</h1>
<div class="c">
	<form name="f2" method="POST" action="registersuc.php">
		<table border="0" align="center">
<tr><td>Enter username:</td><td><input type="text" name="user"></td></tr>
<tr><td>Enter password:</td><td><input type="password" name="pwd"></td></tr>
<tr><td>Confirm password:</td><td><input type="password" name="cpwd"></td></tr>
<tr></tr>
<tr><td colspan="2"><button name="register" onclick="return ver();" style="text-align: center;" >Register</button></td></tr>
</table>
</form>
</div>
</body>
</html>