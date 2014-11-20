<?php 
error_reporting(0);

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


$query = mysql_query("INSERT INTO employee_details ( emp_fname, emp_lname, emp_address, emp_pincode, emp_gender, emp_contactno, emp_jobtype, emp_joindate, emp_availaibleweekday, emp_docs, emp_emailid) VALUES ( '$Fname', '$Lname', '$FullAddress', '$Pincode', '$Gender', '$Contactnumber', 
'$Jobtype','$Joindate', '$AvailDays','$Docs', '$Emailid')");

$db_result = mysql_query($query,$connection);


mysql_close($connection);

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

if($db_result)
{
echo "Data Saved";
echo "<br>";
echo "<a href='index.html'>Back to homepage</a>";
}
else
{
echo "Data Saved";
}
 
?>
</center>
     
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>