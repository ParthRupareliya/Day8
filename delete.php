<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$connect = mysqli_connect("localhost","root","","intern_student1");

$id = $_GET['deleteid'];
$q = mysqli_query($connect,"delete from tbl_student11 where s_id = $id");
if ($q){
	
header("location:display_delete_demo.php");
}
?>

</body>
</html>