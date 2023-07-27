<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border=1>
<tr><th>Name</th><th>Age</th></tr>
<?php
include('connect.php');
$qry=mysqli_query($con,"select * from reg");

while($res=mysqli_fetch_array($qry))

{
	$na=$res[0];
	$ag=$res[1];
	?>
	<tr><td><?php echo "$na"; ?> </td><td><?php echo "$res[1]";?></td></tr>
  <?php  
	
}

?>
</table>
</body>
</html>