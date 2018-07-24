<?php
session_start();
include "header.html";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<style type="text/css">
		.values {border-width: 2px;background-color: lightyellow;display: block;border-style: ridge;margin-top: 10px;font-family: Cooper Black;overflow: auto;}
		#box{width: 300px;padding: 10px;margin-left: 500px;margin-top: 50px}
		button {border-style: ridge;border:0;background-color: lightgreen;font-size: 17px}
	</style>
</head>
<body bgcolor="lightgray" background="login.jpg">
<div class="values" align="center" id="box">
<form action="" method="POST">
<center><table border="0" cellpadding="5">
<tr><td><label>Username:</label></td><td><input type="text" name="uid"></td></tr>
<tr><td><label>Password:</label></td><td><input type="password" name="pwd"></td></tr>
<tr><td><button name='login'>login</button></td></tr>
</table>
</center>
</form>
<?php
include "dbconnection.php";
if(isset($_POST['login']))
{
$user=$_POST['uid'];
$password=$_POST['pwd'];
try{
	$sql="SELECT * FROM login WHERE username='$user' and password='$password'";
	$result=$conn->query($sql);
	if($result->rowCount()>0)
	{
		$_SESSION['name']=$user;
		header("Location:index.php");
	}
	else
		echo "<center><font color=red>Invalid useername or password</font></center>";
}
catch(PDOException $e)
{
echo "Error: " . $e->getMessage();
}
}
?>
</div>
<br><br>
<center>Are u not registered?Signup here<a href="register.php" target="_blank">click here</a></center>
</body>
</html>
