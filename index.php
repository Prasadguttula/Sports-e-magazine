<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="3dtitle.css">
	<style type="text/css">
.navbar {
    overflow: hidden;
    background-color: #2F4F4F;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.right {
    float: right;
    font-size: 16px;
    color: white;
    padding: 14px 16px;
    text-decoration: none;
}
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color:  #2F4F4F ;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: lightgreen;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #2F4F4F;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
body{background-image: url("login.jpg");background-size: cover;}
.total{display: inline-block;margin-top: 10px;}
a {text-decoration: none;color: black}
b {color: #4B0082;font-family:Cooper Black; }
div{background-color: #87CEFA;background-size: cover;}
.images img{height: 300px;width: 400px;border-radius: 30%;}
.imgcontainer{float:left;margin-right: 25px;margin-bottom: 10px;}
	</style>
  <script type="text/javascript">
    function show(id)
    {
    var elmt=document.getElementById(id);
    elmt.style.display='block';
    }
    function hide(id)
    {
    var elmt=document.getElementById(id);
    elmt.style.display='none';
    }
  </script>
</head>
<body >
<div class="title1" >
<center>Sports <img src="icon.PNG" height="80px" width="80px"> E-Magazine</center>
</div>
<div class="navbar">
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Login
    </button>
    <div class="dropdown-content">
      <a href="userlogin.php">User</a>
      <a href="userlogin.php">Sportsman</a>
      <a href="userlogin.php">Admin</a>
    </div>
  </div> 
  <a href="contact.php" >Contact</a>
  <a href="about.php" class="right">About</a>
  <a style="float:left;margin-left: 800px"><?php if(isset($_SESSION['name'])) echo "<img src=imgicon.jpg height=20px width=20px>&nbsp".$_SESSION['name']."&nbsp<a href=logout.php style=font-style: oblique;color: red>logout</a>"; ?></a>
</div>
<div class="total">
<div class="images">
<div class="imgcontainer">
	<img src="cricket1.jpg">
	<center><a href="cricket.php"><b>Cricket</b></a></center>
</div>
<div class="imgcontainer">
	<img src="football.jpg">
	<center><a href="foot.php"><b>Football</b></a></center>
</div>
<div class="imgcontainer">
	<img src="tennis.jpg">
	<center><b>Tennis</b></center>
</div>
<div class="imgcontainer">
	<img src="kabaddi.jpg">
	<center><b>Kabaddi</b></center>
</div>
<div class="imgcontainer">
	<img src="volleyball1.jpg">
	<center><b>Volleyball</b></center>
</div>
<div class="imgcontainer">
	<img src="hockey.jpg">
	<center><a href="hockey.php"><b>Hockey</b></a></center>
</div>
</div>
</div>
</body>
</html>