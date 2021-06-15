<?php

$name = $_POST['name'];
$pass = $_POST['pass'];

if($name == "parth" and $pass == "2404")
{
  header("location:display_delete_demo.php"); 
}
else{
	header("location:admin.php");
}
?>
