<?php
$fulltime = $_POST["ft"];
$parttime = $_POST["pt"];
$tax = $_POST["tax"];


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




if(!empty($fulltime))
{
	mysql_query("UPDATE salary_generaldetails SET salary_perhour_ft = ''");
	mysql_query("UPDATE salary_generaldetails SET salary_perhour_ft = ".$fulltime);
	
	
}



if(!empty($parttime))
{
	mysql_query("UPDATE salary_generaldetails SET salary_perhour_pt = ".$parttime."WHERE salary_perhour_pt is null");
	
	
}
//
//if(!empty($parttime))
//{
//	mysql_query("ALTER TABLE salary_generaldetails DROP COLUMN salary_perhour_pt ");
//	mysql_query("ALTER TABLE salary_generaldetails ADD salary_perhour_pt int(5)");
//	mysql_query("DELETE FROM salary_generaldetails WHERE salary_perhour_pt is null ");	
//	mysql_query("INSERT INTO salary_generaldetails(salary_perhour_pt) VALUES(".$parttime.")");	
//	
//}
















//FULLTIME
/*$resultft = mysql_query("SELECT COUNT(salary_perhour_ft) FROM salary_generaldetails");
$rowft = mysql_fetch_assoc($resultft);
$sizeft = $rowft['COUNT(salary_perhour_ft)'];

if($sizeft <= 0)
{
	mysql_query("INSERT INTO salary_generaldetails(salary_perhour_ft) VALUES(".$fulltime.")");	
echo "DONE !";
}

else
{
	
mysql_query("UPDATE salary_generaldetails SET salary_perhour_ft = ".$fulltime);

echo "DONE21 !";
}



//PARTTIME
$resultpt = mysql_query("SELECT COUNT(salary_perhour_pt) FROM salary_generaldetails");
$rowpt = mysql_fetch_assoc($resultpt);
$sizept = $rowpt['COUNT(salary_perhour_pt)'];

if($sizept <= 0)
{
	
mysql_query("INSERT INTO salary_generaldetails(salary_perhour_pt) VALUES(".$parttime.")");	

echo "DONE PT !";
}

else
{
	mysql_query("UPDATE salary_generaldetails SET salary_perhour_pt = ".$parttime);
echo "DONE21 PT!";
}
*/

////TAXES
//
//$result2 = mysql_query("SELECT COUNT(tax) FROM salary_generaldetails");
//$row2 = mysql_fetch_assoc($result2);
//$size2 = $row2['COUNT(tax)'];
//
//if($size2 > 0)
//{
//mysql_query("UPDATE salary_generaldetails SET tax = ".$tax);
//echo "DONE !";
//}
//
//else
//{
//mysql_query("INSERT INTO salary_generaldetails(tax) VALUES(".$tax.")");	
//echo "DONE23 !";
//}
//
//


/*
$result = mysql_query("SELECT salary_perhour_ft FROM salary_generaldetails");
$result1 = mysql_query("SELECT salary_perhour_pt FROM salary_generaldetails");

$numrows = mysql_num_rows($result);
$numrows1 = mysql_num_rows($result1);


if($numrows == 0 and $numrows1 == 0)           //if both columns empty, insert in both columns
{ 
	$query = mysql_query("INSERT INTO salary_generaldetails VALUES ('$parttime','$fulltime')");
} 

else if($numrows == 0 )							//if both salary_perhour_ft column is empty, insert in both columns
{ 
	$query = mysql_query("INSERT INTO salary_generaldetails(salary_perhour_ft) VALUES ('$fulltime')");
} 

else 
{ 
	$query = mysql_query("INSERT INTO salary_generaldetails(salary_perhour_pt) VALUES ('$parttime')");
} 


if($data[0] > 1) {
	$query = mysql_query("INSERT INTO salary_generaldetails(salary_perhour_pt, tax) VALUES ('$parttime','$tax')");
	echo "Hello";                     
    $db_result = mysql_query($query,$connection);
}
else
{
	$query = "INSERT INTO salary_generaldetails VALUES('$fulltime','$parttime','$tax')";

	}






$query = mysql_query("INSERT INTO salary_generaldetails VALUES ('$fulltime','$parttime','$tax')");
                     
$db_result = mysql_query($query,$connection);
if(!empty($Tax))
{
$query = "INSERT INTO salary_generaldetails(salary_perhour_ft, salary_perhour_ft, tax) VALUES('$fulltime','$parttime','$tax')";
}
else
{
$query = "INSERT INTO salary_generaldetails(salary_perhour_ft, salary_perhour_ft) VALUES('$fulltime','$parttime')";
}
if($db_result)
{
echo "Data Saved";
echo "<br>";
echo "<a href='index.html'>Back to homepage</a>";
}
else
{
echo "Data Not Saved";
echo "<br>";
echo "<a href='index.html'>Back to homepage</a>";

}
 

*/


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
<center><h1>DETAILS ADDED</h1><br><br><br>
<a href="index.html">Back to homepage</a>
 </center>


<BR>


<center>


 

		
</center>




<?php


mysql_close($connection);

?>   

 
      
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>
</body>
</html>
