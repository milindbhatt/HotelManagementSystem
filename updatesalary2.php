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
<center><h1>UPDATE EMPLOYEE DATA</h1><br><br><br>

<BR>

     


<?php
error_reporting(0);
$EmpId = $_POST["EmpId"];
$TotalHours= $_POST["TotalHours"];
$SalPerHour= $_POST["SalPerHour"];
//$ForWeek = $_POST["Week"];
$Tax = $_POST["Tax"];
$Bonus = $_POST["Bonus"];
$FinalSalary = $TotalHours * $SalPerHour;
if(!empty($Tax))
{
			$FinalTax = ($FinalSalary * $Tax)/100;
			$FinalSalary = $FinalSalary - $FinalTax;
}

if(!empty($Bonus))
{
				$FinalSalary = $FinalSalary + $Bonus;

	
}




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


$result = mysql_query("SELECT * FROM employee_salary WHERE emp_id=".$EmpId);
$row = mysql_fetch_row($result);				 
if(!$row)
{
goto b;

}

	
if(!empty($TotalHours))
{
 mysql_query("UPDATE  employee_salary SET emp_hoursworked ='".$TotalHours."' WHERE emp_id = ".$EmpId);
 mysql_query("UPDATE  employee_salary SET emp_totalsalary ='".$FinalSalary."' WHERE emp_id = ".$EmpId);
 
}

if(!empty($SalPerHour))
{
 mysql_query("UPDATE employee_salary SET 	emp_salaryperhour ='".$SalPerHour."' WHERE emp_id = ".$EmpId);
 mysql_query("UPDATE  employee_salary SET emp_totalsalary ='".$FinalSalary."' WHERE emp_id = ".$EmpId);
}



if(!empty($ForMonth))
{
 mysql_query("UPDATE employee_details SET emp_formonth ='".$ForMonth."' WHERE emp_id = ".$EmpId);
}


if(!empty($ForYear))
{
 mysql_query("UPDATE employee_details SET emp_foryear ='".$ForYear."' WHERE emp_id = ".$EmpId);
}







echo "<H1 style='color:Green'>Data Modified</H1>";
goto c;
b:
echo "<H1 style='color:Red'>ID specifed donot exist</H1>";
c:
?>





















		





<?php

a:

mysql_close($connection);

?>  
<BR>
<BR>
<H1> 
<A href="updatesalary.php">UPDATE MORE SALARIES</A>

<BR>

<BR>
<A href="index.html">BACK TO HOMEPAGE</A>

<BR>
 </H1>
      
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>
</body>
</html>
