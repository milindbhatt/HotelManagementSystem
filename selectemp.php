<?php 

/*
$Address = $_POST['Address'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode']; 
$JoindateDay=$_POST['Day']; 
$JoindateMonth=$_POST['Month']; 
$JoindateYear=$_POST['Year']; 
$FullAddress = $Address."-".$City;
$Gender = $_POST['Sex'];
$Contactnumber = $_POST['Contactnumber'];
$Emailid=$_POST['Email'];
$Jobtype=$_POST['Jobtype']; 
$Joindate= $JoindateDay."-".$JoindateMonth."-".$JoindateYear;
$AvailDays=$_POST['AvailaibleWeek']; 
$Docs=$_POST['Docs']; 

*/
$Fname=$_POST['Firstname'];
$Lname = $_POST['Lastname'];
$AvailDays=$_POST['AvailaibleWeek']; 		
$Jobtype=$_POST['Jobtype']; 


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
	
$query = "SELECT * FROM employee_details WHERE emp_fname = '".$Fname."' ORDER BY emp_fname";
	
}

if(!empty($AvailDays))
{
	
$query = "SELECT * FROM employee_details WHERE emp_availaibleweekday = '".$AvailDays."' ORDER BY emp_fname";
	
}

if(!empty($Jobtype))
{
	
$query = "SELECT * FROM employee_details WHERE emp_jobtype = '".$Jobtype."' ORDER BY emp_fname";
	
}

if(!empty($Lname ))
{
	
$query = "SELECT * FROM employee_details WHERE emp_lname = '".$Lname ."' ORDER BY emp_lname";
	
}






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
if (mysql_num_rows($db_result) > 0) {
   
} else {
	echo "<h1>";
	echo "ID does not exist. Try again.<br>";
	echo "<a href='selectemp.html'>Go back</a>";
    	echo "</h1>";
	goto a;
}


?>







<table border="1" style= "background-color: #DAD4E9; color: #000000; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Id</th><br />
          <th>Employee First_Name</th><br />
          <th>Employee Last_Name</th><br />
          <th>Employee Address</th><br />
          <th>City</th><br />
          
          <th>Pincode</th><br />
          <th>Gender</th><br />
          <th>Employee Contact Number</th><br />
          <th>Employee Job type</th><br />
          <th>Join day</td><br />
          <th>Join month</td><br />
          <th>Join year</td><br />
         
          <th>Weeks availaible</td><br />
          <th>Documents for Proof </td><br />
          <th>Email id</td><br />
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
              <td>{$row['emp_id']}</td> 
              <td>{$row['emp_fname']}</td>
			  <td>{$row['emp_lname']}</td>
              <td>{$row['emp_address']}</td>
              <td>{$row['emp_city']}</td>
    
	          <td>{$row['emp_pincode']}</td>
              <td>{$row['emp_gender']}</td>
              <td>{$row['emp_contactno']}</td> 
			  <td>{$row['emp_jobtype']}</td> 
			  <td>{$row['emp_joinday']}</td>
			  <td>{$row['emp_joinmonth']}</td>
			  <td>{$row['emp_joinyear']}</td>
		
			  <td>{$row['emp_availaibleweekday']}</td> 
			  <td>{$row['emp_docs']}</td> 
			  <td>{$row['emp_emailid']}</td> 
			   
            </tr>\n";
          }
        ?>
      </tbody>

    </table>





<br><br><br>
      <form action="deleteemp.php" method="post" onSubmit="return confirm('Are you sure to delete?')">
      Enter id to delete data<input type="text" name="EmpId"> 
      
      <button type="submit" >Delete</button>
      </form>

		





<?php

a:

mysql_close($connection);

?>   
</center>
     
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>