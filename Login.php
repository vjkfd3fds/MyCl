<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="#" method="post">
UserName<input name="t1" type="text" />
Password<input name="t2" type="password" />
<input name="submit" type="submit" value="submit" />

</form>
</body>
</html>
<?php
include('connect.php');
//session_start();
 if(isset($_POST['submit']))
 {

//extract($_POST);
$uname=$_POST["t1"];
$pwd=$_POST["t2"];

$qry=mysqli_query($con,"select * from login where Username='$uname' and Password='$pwd'");
$res=mysqli_fetch_array($qry);
//echo $res[0];
//echo $res[1];
$num=mysqli_num_rows($qry);
//echo $num;
if($num==1)
{ 
echo"<script> window.location='welcm.php'</script>";
}
else
{
	echo "Invalid User";
	}
 }
?>