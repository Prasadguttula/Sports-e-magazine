<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<title>FOOTBALL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
img{ height:300px;width:428px;}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header>
    <h1><center><b>Football</b></center></h1>
    </div>
  </header>
<center><?php if(!(isset($_SESSION['name']))) echo "<font color=red>You must be logged in first to make comment.</font>"; ?></center>
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="messi.jpg" alt="Norway"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Messi</b></p>
        <p>Lionel Messi of FC Barcelona with the match ball after scoring three goals during the La</p>
        <form method="POST" action="">
        <textarea rows="4" cols="40" name="comment1">write a comment....</textarea><input type="submit" name="submit1">
        </form>
        <?php 
include 'dbconnection.php';
if(isset($_POST['submit1']))
{
  if(isset($_SESSION['name']))
  {
  $text=$_POST['comment1'];
  $user=$_SESSION['name'];
  try{
    $sql="INSERT INTO comments VALUES('$user','$text')";
    $conn->exec($sql);
    if(!$conn)
      echo "<font color=red>You must be logged in first</font>";
    else
      echo "commented successfully";
  }
  catch(PDOException $e)
{
echo "Error: " . $e->getMessage();
}
}
}
?>

      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="fifa.jpg" alt="Norway"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>FIFA 2014</b></p>
        <p>The poster of the great start of FIFA 2014</p>
        <textarea rows="4" cols="40" name="comment">write a comment....</textarea><input type="submit" name="submit">
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="cup.jpg" alt="Norway"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>FIFA 2017 WINNERS</b></p>
        <p>Germany-2017 FIFA Confederations Cup Final Highlights</p>
        <textarea rows="4" cols="40" name="comment">write a comment....</textarea><input type="submit" name="submit">
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="india.jpg" alt="Norway"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>TEAM INDIAN</b></p>
        <p>Indian football team end 2016 at 135th place in FIFA rankings – their highest in six years</p>
      <textarea rows="4" cols="40" name="comment">write a comment....</textarea><input type="submit" name="submit">
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="sta.jpg" alt="Norway"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>American football stadium</b></p>
        <p>One of the finest stadiums in the world.</p>
       <textarea rows="4" cols="40" name="comment">write a comment....</textarea><input type="submit" name="submit">
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="agr.jpg" alt="Norway"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Agressive Match</b></p>
        <p>Top 5 Most Aggressive Football Players Of All-Time 2015</p>
        <textarea rows="4" cols="40" name="comment">write a comment....</textarea><input type="submit" name="submit">
      </div>
    </div>
  </div>

 
  
  
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
