<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
// Create connection
$conn = new mysqli($db_host, $db_user, $db_password);
// Check connection

if(!$conn)
{
	echo "Not Connected To Server";
}
if(!mysqli_select_db($conn,'course'))
{
	echo "Database Not Selected";
}
$id =$_POST['id'];
$name =$_POST['name'];
$email =$_POST['email'];
$course =$_POST['course'];
$book =$_POST['book'];

		   $sql = "INSERT INTO add_student (id,name,email,course,book)
					  VALUES('$id','$name','$email' ,'$course','$book')";
					  

	if(!mysqli_query($conn,$sql))
	{
		echo "Not Inserted";
	}
	else
	{	

	echo "Inserted";
}?>