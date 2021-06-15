<?php

$connect = mysqli_connect("localhost","root","","intern_student1");

$id = $_GET['editid'];

$q = mysqli_query($connect,"select * from tbl_student11 where s_id = $id");

$ed = mysqli_fetch_array($q);

//print_r($ed);

if($_POST){

	$t1 = $_POST['id'];
	$t2 = $_POST['name'];
	$t3 = $_POST['gender'];
	$t4 = $_POST['email'];
	$t5 = $_POST['mobile'];
	$t6 = $_POST['address'];
	$t7 = $_POST['City'];
	$t8 = $_POST['clg'];
	$t9 = $_POST['branch'];
	$t10 = $_POST['sem'];

	$query = mysqli_query($connect,"update tbl_student11 set s_id='$t1',s_name='$t2',s_gender='$t3',s_email='$t4', s_mobile='$t5', s_address='$t6', s_city='$t7', s_collage='$t8', s_branch='$t9', s_sem='$t10' where s_id ='$id'") or die("Error".mysqli_error($connect));

if ($query){
	echo "<script>alert('Record Updated');window.location='display_delete_demo.php'</script>";
}}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
	<style>
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

<form method="post">
	<table id="customers" style="width: 500px; margin-left: 450px; margin-top: 100px;">
  <tr>
    <th colspan="2" style="text-align: center;">Update Form</th>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Id:</td>
    <td><input type="text" name="id" value="<?php echo $ed['s_id']; ?>"></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Name:</td>
    <td><input type="text" name="name" value="<?php echo $ed['s_name']; ?>"></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your gender:</td>
    <td><select  name="gender" value ="<?php  $ed['s_gender'] ?>">


  				<option value="female">female</option>
  				<option value="male">male</option>
    	</select>	
	</td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Email:</td>
    <td><input type="text" name="email" required value="<?php echo $ed['s_email']; ?>"></td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Your Mobile:</td>
    <td><input type="text" name="mobile" required value="<?php echo $ed['s_mobile']; ?>"></td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Your Address:</td>
    <td><input type="text" name="address" required value="<?php echo $ed['s_address']; ?>"></td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Select Your City:</td>
    <td><select  name="City" value ="<?php  $ed['s_city'] ?>">
  				<option value="Junagadh">Junagadh</option>
  				<option value="rajkot">Rajkot</option>
 				<option value="Veraval">Veraval</option>
 				<option value="Baroda">Baroda</option>
 				<option value="Surat">Surat</option>
 				<option value="Keshod">Keshod</option>
 				<option value="Jamnagar">Jamnagar</option>
 
  		</select>
  	</td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Your Collage Name:</td>
    <td><input type="text" name="clg" required value="<?php echo $ed['s_collage']; ?>"></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Branch:</td>
    <td><input type="text" name="branch" required value="<?php echo $ed['s_branch']; ?>"></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Sem:</td>
    <td><input type="text" name="sem" required value="<?php echo $ed['s_sem']; ?>"></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center;"><input type="submit" value="Update" name="Update" ></td>
  </tr>



</body>
</html>