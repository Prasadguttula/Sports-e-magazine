<?php
include 'header.html';
include 'dbconnection.php';
$user=$_POST['user'];
$pwd=$_POST['pwd'];
try{
	$sql="INSERT INTO login VALUES('$user','$pwd')";
	$conn->exec($sql);
	if(!$conn)
		echo "<center>Your registration is unsuccessfull.Please try after sometime</center>";
	else
		{
			echo "<center>You are successfully registered.</center><br>";
            echo "<center><a href=index.php>Go to Homepage.</a></center>";
        }
   }
catch(PDOException $e)
{
echo "Error: " . $e->getMessage();
}

?>
