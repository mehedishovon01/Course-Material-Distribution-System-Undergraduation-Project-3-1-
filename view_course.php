<html>
<head>
	<title>Course | Material | Distribution | System</title>
	<head lang="en">
	<meta charset="UTF-8">
	<link href='style.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">

</head>
<body>

					<h1><font size="23" face="Arial" color="#FCF3CF">Course Material Distribution <br> System</font></h1>
	<div class ="container">
	
<ul>
<li><a href="index.php">Log Out</a></li>
<li><a>View</a><ul>
	<li><a href="view/course.php">View Course</a></li>
	<li><a href="view_books.php">View Books</a></li>
	<li><a href="view_students.php">View Students</a></li></ul>
	
<li><a href="dispatch.php">About</a></li>
				
<li><a>UpDate</a><ul>
	<li><a href="update_course.php">UpDate Course</a></li>
	<li><a href="update_books.php">UpDate Books</a></li>
	<li><a href="update_students.php">UpDate Student</a></li></ul>
	
<li><a>Add</a><ul>
	<li><a href="add_course.php">Add Course</a></li>
	<li><a href="add_books.php">Add Books</a></li>
	<li><a href="add_student.php">Add Student</a></li></ul>
</li>
</ul>


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


$sql = "select * from add_course";
$result=$conn -> query($sql);
?>
<table width="100%" border=1px>
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Subject</th>
	<th>Book</th>


<?php
if($result -> num_rows>0){
	while($row=$result->fetch_assoc()){
		
		echo'<tr>';
		echo'<td>' .$row['id'].'</td>';
		echo'<td>' .$row['name'].'</td>';
		echo'<td>' .$row['subject'].'</td>';
		echo'<td>' .$row['book'].'</td>';
		echo '</tr>';
	}
}

?>
</tr>
</table>
<?php

	if(!mysqli_query($conn,$sql))
	{
		echo "Not Inserted";
	}
	else
	{	
}?>
			
	</div>
		</form>


</body>
</html>