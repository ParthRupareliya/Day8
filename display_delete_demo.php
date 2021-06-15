
<!DOCTYPE html>
<html>
<head>
	<title>Action Page</title>
	<style type="text/css">
	#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>


<?php
$connect = mysqli_connect("localhost","root","","intern_student1");
$q = mysqli_query($connect,"select * from tbl_student11") or die(mysqli_error($connect));
?>

<table id="customers" style="width: 500px; margin-left: 370px; margin-top: 100px;">
	<tr>
		<th style="text-align: center; "colspan="2"><a href="Student_with_theme.php">Add record</a></th>
		<th style="text-align: center; " colspan="8"> Student Details Admin Panel</th>
		<th style="text-align: center; "colspan="2"><a href="admin.php">Log-Out</a></th>
		
	</tr>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>Address</th>
	<th>City</th>
	<th>Collage</th>
	<th>Branch</th>
	<th>Sem</th>
	<th colspan="2" style="text-align: center;">Action</th>
</tr>
	<?php 
while ($row = mysqli_fetch_array($q)) 
{
	echo "<tr>";
	echo "<td>{$row ['s_id']}</td>";
	echo "<td>{$row ['s_name']}</td>";
	echo "<td>{$row ['s_gender']}</td>";
	echo "<td>{$row ['s_email']}</td>";
	echo "<td>{$row ['s_mobile']}</td>";
	echo "<td>{$row ['s_address']}</td>";
	echo "<td>{$row ['s_city']}</td>";
	echo "<td>{$row ['s_collage']}</td>";
	echo "<td>{$row ['s_branch']}</td>";
	echo "<td>{$row ['s_sem']}</td>";
	echo "<td><a href ='edit.php?editid={$row['s_id']}'>Edit</a></td>";

	 echo "<td><a href ='delete.php?deleteid={$row['s_id']}'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";




?>
</body>
</html>