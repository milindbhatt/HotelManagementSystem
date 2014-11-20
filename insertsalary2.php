<?php

error_reporting(0);
$EmpId = $_POST["EmpId"];
$TotalHours= $_POST["TotalHours"];
$SalPerHour= $_POST["SalPerHour"];
//$ForWeek = $_POST["Week"];
$ForMonth = $_POST["Month"];
$ForYear = $_POST["Year"];
$Tax = $_POST["Tax"];
$Bonus = $_POST["Bonus"];
$FinalSalary = $TotalHours * $SalPerHour;

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





if(!empty($Tax))
{
			$FinalTax = ($FinalSalary * $Tax)/100;
			$FinalSalary = $FinalSalary - $FinalTax;
}

if(!empty($Bonus))
{
				$FinalSalary = $FinalSalary + $Bonus;

	
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
<center>

<?php


$result = mysql_query("SELECT emp_id FROM employee_salary WHERE emp_formonth='".$ForMonth."' AND emp_id=".$EmpId);
$row = mysql_fetch_row($result);				 
if($row)
{

	echo "Salary of this employee for this month already exist!";
	echo "<br>";
	echo "<a href='updatesalary.php'>Update existing salary</a>";	
	echo "<br>";
	echo "<a href='index.html'>Goto Homepage</a>";	
	goto a;
}
else
{
	$newquery = "INSERT INTO employee_salary(emp_id, emp_hoursworked, emp_salaryperhour, emp_totalsalary, emp_formonth, emp_foryear) 
VALUES 
('$EmpId', '$TotalHours', '$SalPerHour', '$FinalSalary',  '$ForMonth', '$ForYear')";
$db_result = mysql_query($newquery,$connection);
}
//$query1 = "SELECT * FROM employee_salary WHERE emp_id = '".$EmpId;
//$db_result1 = mysql_query($query1,$connection);

if($db_result)
{
	echo "Salary inserted";
	echo "<br><a href='index.html'>Goto Homepage</a>";	
}
else
{
		echo "Salary NOT inserted, may be ID does not exist. Try again!";
		echo "<br><a href='index.html'>Goto Homepage</a>";	
}
a:

mysql_close($connection);

?>   

 
      
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>
</body>
</html>
