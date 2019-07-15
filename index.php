<html>
<head>
	<title>Login | Funny</title>
	<head lang="en">
	<meta charset="UTF-8">
	<link href='style.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">
<style>
.container{width:500px;height:300px;text-align:center;background-color:rgba(52,73,94,0.5);border-radius:4px;margin:0 auto;margin-top:100px;}
.container img{width : 120px;height:120px;margin-top:-60px;margin-bottom:30px;}
</style>


</head>
<body bgcolor=green>
					<h1><font size="23" face="Arial" color="#FCF3CF">Course Material Distribution <br> System</font></h1>
	<div class ="container">
	<img src="image/login.png">
	<form action="home.php" method="post">
	
	
					<input size="25" type="text" name="sid" required placeholder="Username" style="height:30px; width:250px;background-color:rgba(52,73,94,0.9); font-size:15px;color: white;padding-left:10px;"><br><br>
					<input size="25" type="password" name=" password" required placeholder="Password" style="height:30px; width:250px;background-color:rgba(52,73,94,0.9); font-size:15px;color: white;padding-left:10px;"><br/><br/>
					<input type="submit" value="LogIn" name="send" class="btn">
					<input type="reset" value="Cencel" class="btn">
	</form>


<?php
    if (isset($_POST['submit']))
    {     
    $db_host = "localhost";
$db_user = "root";
$db_password = "";
// Create connection
$conn = new mysqli($db_host, $db_user, $db_password);
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query = mysql_query("SELECT username FROM user WHERE username='$username' and password='$password'");
     if (mysql_num_rows($query) != 0)
    {
		header('http://localhost/projtnew/userhome.html');
		echo "<script language='javascript' type='text/javascript'> location.href='http://localhost/projtnew/userhome.html' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
	exit();
    }
    }
    ?>



</body>
</html>