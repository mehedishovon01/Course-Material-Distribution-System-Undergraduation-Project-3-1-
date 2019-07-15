<html>
<head>
	<title>Course | Material | Distribution | System</title>
	<head lang="en">
	<meta charset="UTF-8">
	<link href='style.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">
		<style>p.indent{ padding-left: 1.8em }</style>
</head>
<body>

					<h1><font size="23" face="Arial" color="#FCF3CF">Course Material Distribution <br> System</font></h1>
	<div class ="container">
	
<ul>
<li><a href="index.php">Log Out</a></li>
<li><a>View</a><ul>
	<li><a href="view_course.php">View Course</a></li>
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


			<?php/**************************/?><br><br>
			
			<u><font size="10"  color="#FCF3CF">UpDate Books</font></u>
				
				
			<br><br><br>
			<form action="update/books.php" method="post">									
				<table width="100%" border=0px >	
				
				<tr align="center" >
				<td>
				Book Id:			<input type="text" name="id" ><br><br>
				Book Name:			<input type="text" name="name" ><br><br>
				Quantity:			<input type="text" name="quantity" >
				<br><br><br>
				<input type="submit" value="Submit" class="btn" style="width:150px;">
				</td></tr>
				</table>
			
	</div>
		</form>


</body>
</html>