<?php

$EmpId = $_POST['EmpId'];
$Address = $_POST['Address'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode']; 
$JoindateDay=$_POST['Day']; 
$JoindateMonth=$_POST['Month']; 
$JoindateYear=$_POST['Year']; 
$Fname=$_POST['Firstname'];
$Lname = $_POST['Lastname'];
$Gender = $_POST['Gender'];
$Contactnumber = $_POST['Contactnumber'];
$Emailid=$_POST['Email'];
$Jobtype=$_POST['Jobtype']; 
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


if(!empty($Fname))
{
 mysql_query("UPDATE employee_details SET emp_fname ='".$Fname."' WHERE emp_id = ".$EmpId);
}

if(!empty($Lname ))
{
 mysql_query("UPDATE employee_details SET emp_lname ='".$Lname ."' WHERE emp_id = ".$EmpId);
}



if(!empty($Address))
{
 mysql_query("UPDATE employee_details SET emp_address ='".$Address."' WHERE emp_id = ".$EmpId);
}


if(!empty($City))
{
 mysql_query("UPDATE employee_details SET emp_city ='".$City."' WHERE emp_id = ".$EmpId);
}

if(!empty($Pincode))
{
 mysql_query("UPDATE employee_details SET emp_pincode ='".$Pincode."' WHERE emp_id = ".$EmpId);
}



if(!empty($JoindateDay))
{
 mysql_query("UPDATE employee_details SET emp_joinday ='".$JoindateDay."' WHERE emp_id = ".$EmpId);
}

if(!empty($JoindateMonth))
{
 mysql_query("UPDATE employee_details SET emp_joinmonth ='".$JoindateMonth."' WHERE emp_id = ".$EmpId);
}

if(!empty($JoindateYear))
{
 mysql_query("UPDATE employee_details SET emp_joinyear ='".$JoindateYear."' WHERE emp_id = ".$EmpId);
}


if(!empty($Gender))
{
 mysql_query("UPDATE employee_details SET emp_gender ='".$Gender."' WHERE emp_id = ".$EmpId);
}

if(!empty($Contactnumber))
{
 mysql_query("UPDATE employee_details SET emp_contactno ='".$Contactnumber."' WHERE emp_id = ".$EmpId);
}

if(!empty($Emailid))
{
 mysql_query("UPDATE employee_details SET emp_emailid ='".$Emailid."' WHERE emp_id = ".$EmpId);
}

if(!empty($Jobtype))
{
 mysql_query("UPDATE employee_details SET emp_jobtype='".$Jobtype."' WHERE emp_id = ".$EmpId);
}

if(!empty($AvailDays))
{
 mysql_query("UPDATE employee_details SET emp_availaibleweekday ='".$AvailDays."' WHERE emp_id = ".$EmpId);
}

if(!empty($Docs))
{
 mysql_query("UPDATE employee_details SET emp_docs ='".$Docs."' WHERE emp_id = ".$EmpId);
}







?>





















<!doctype html>
<html>
<head>
<title>Update Employee</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<div style="background-color:red;background-image:url(bgheader.jpg);color:#F3E8E8">
<h1><CENTER>WELCOME ADMIN</center>

</h1>

</div>

<br>
<div class="page-wrap">
<center><h1>LIST OF ALL EMPLOYEES</h1><br><br><br>

<BR>

Data Modified

     

		





<?php

a:

mysql_close($connection);

?>   

 
      
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>
</body>
</html>
