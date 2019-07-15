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
$subject =$_POST['subject'];
$book =$_POST['book'];


				$sql = "UPDATE add_course SET name = '$name', subject= '$subject', book='$book' WHERE id = $id";
					  

	if(!mysqli_query($conn,$sql))
	{
		echo "Not Inserted";
	}
	else
	{	

	echo "UpDate Successfully";
}?>