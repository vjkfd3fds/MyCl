<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
<h1> WELCOME</h1></p>
<form action="" method="post">
Name <input name="t1" type="text" />
Age <input name="t2" type="text" />
<input name="submit" type="submit" />
</form>

</body>
</html>
<?php
include('connect.php');
if(isset($_POST['submit']))
{
$name=$_POST["t1"];
$age=$_POST["t2"];

$qry=mysqli_query($con,"insert into reg values('$_POST[t1]','$age')");
if($qry)
{
	echo "<script>alert('Success');window.location('disp.php')</script>";
}
else
echo"<script>alert('Fail')</script>";
}
?>