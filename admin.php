
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
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

<form method="post" action="checkadmin.php">
	<table id="customers" style="width: 500px; margin-left: 450px; margin-top: 100px;">
  <tr>
    <th colspan="2" style="text-align: center;">Admin Panel</th>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Name:</td>
    <td><input type="text" name="name" required></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Password:</td>
    <td><input type="text" name="pass" required></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center;"><input type="submit" name="submit"></td>
  </tr>
</table></form></body></html>
