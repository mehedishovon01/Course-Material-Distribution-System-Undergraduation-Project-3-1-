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
$book1 =$_POST['book1'];
$book2 =$_POST['book2'];
$book3 =$_POST['book3'];


		   $sql = "INSERT INTO add_course (id,name,subject,book,book1,book2,book3)
					  VALUES('$id','$name','$subject' ,'$book','$book1','$book2','$book3')";
					  

	if(!mysqli_query($conn,$sql))
	{
		echo "Not Inserted";
	}
	else
	{	

	echo "Inserted";
}?>