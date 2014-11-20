<?php 
error_reporting(0);
/*
$Address = $_POST['Address'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode']; 
$JoindateDay=$_POST['Day']; 
$JoindateMonth=$_POST['Month']; 
$JoindateYear=$_POST['Year']; 

$Fname=$_POST['Firstname'];
$Lname = $_POST['Lastname'];
$FullAddress = $Address."-".$City;
$Gender = $_POST['Sex'];
$Contactnumber = $_POST['Contactnumber'];
$Emailid=$_POST['Email'];
$Jobtype=$_POST['Jobtype']; 
$Joindate= $JoindateDay."-".$JoindateMonth."-".$JoindateYear;
$AvailDays=$_POST['AvailaibleWeek']; 
$Docs=$_POST['Docs']; 
*/
$EmpId = $_POST['EmpId'];


$connection = mysql_connect("localhost", "root", ""); 
if(!$connection) 
{
die("Connection failed " . mysql_error());
}
$db_conn = mysql_select_db("hms", $connection);
if(!$db_conn)
{
die("Connection failed " . mysql_error());
}


$querysel = "SELECT * FROM employee_details WHERE emp_id = '".$EmpId."'";
$db_resultsel = mysql_query($querysel,$connection);
$query = "DELETE FROM employee_details WHERE emp_id = ".$EmpId;
$db_result = mysql_query($query,$connection);
?>

<!doctype html>
<html>
<head>
<title>Insert data</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<div style="background-color:red;background-image:url(bgheader.jpg);color:#F3E8E8">
<h1><CENTER>WELCOME ADMIN</center>

</h1>

</div>

<br>
<div class="page-wrap">
<center>

<?php
if (mysql_num_rows($db_resultsel) > 0) {
   
} else {
	echo "<h1>";
	echo "ID does not exist. Try again.<br>";
	echo "<a href='selectemp.html'>Search again</a>";
    	echo "</h1>";
	goto a;
}



mysql_close($connection);

?>   



<?php

if($db_result)
{
echo "Data Deleted Successfully !";
echo "<br>";
echo "<a href='index.html'>Back to homepage</a>";
}
else
{
echo "Data Not there. Try Again !";
}
 a:
?>
</center>
     
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>