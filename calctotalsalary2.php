<?php 
//error_reporting(0);
$EmpId=$_POST['EmpId'];



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


$query = mysql_query("SELECT emp_temp_salary FROM employee_salary WHERE emp_id = '".$EmpId);
$db_result = mysql_query($query,$connection);
        
		
		while( $row = mysql_fetch_array($db_result)){
            echo $row['emp_id'];

		}




//$db_result = mysql_query($query,$connection);


?>

<!doctype html>
<html>
<head>
<title>Total Salary</title>
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
















<br><br><br>
     
		




  
</center>
     
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>