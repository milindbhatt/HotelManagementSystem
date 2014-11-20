<?php

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


$query = "SELECT * FROM employee_salary ";

$db_result = mysql_query($query,$connection);


?>























<!doctype html>
<html>
<head>
<title>Update Salary Details</title>
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
 </center>
 <table border="1" style= "background-color: #DAD4E9; color: #000000; margin: 0 auto;" >
      <thead>
      
        <tr>
          <th>Id</th><br />
          <th>Total Hours Worked</th><br />
          <th>Per Hour Salary</th><br />
            <th>Total Salary for this Month</th><br />
          <th>For Month</th><br />
          <th>For Year</th><br />
     
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
             <td>{$row['emp_id']}</td> 
              <td>{$row['emp_hoursworked']}</td>
			  <td>{$row['emp_salaryperhour']}</td>
       	      <td>{$row['emp_totalsalary']}</td>
			  <td>{$row['emp_formonth']}</td>
			  <td>{$row['emp_foryear']}</td>
            </tr>\n";
          }
        ?>
      </tbody>

    </table>


<BR>


<center>

<table>
<tr>
<td>
<h1>UPDATE SALARY</h1>

<form action="updatesalary2.php" method="post" onSubmit="return confirm('Are you sure to continue?')">
      Enter id to update salary *<input type="text" name="EmpId" required>   <br>
    <br>  Update working hours *<input type="text" name="TotalHours" required>   <br>
          <br>Update  salary per hour *<input type="text" name="SalPerHour" required><br>  
                              <!-- Salary for Week *   <select name="Week">

                                                    
                                                    <option value="1st">Week 1</option>
                                                    <option value="2nd">Week 2</option>
								                    <option value="3rd">Week 3</option>
                                                    <option value="4th">Week 4</option>
 									</select>   <br> <br> -->
                                    
                                                 <br>Enter any tax  (optional)<input type="text" name="Tax">  <br>
          <br>Enter bonus   (optional)<input type="text" name="Bonus">
          <br>
      <button type="submit" >INSERT SALARY</button>
      </form>    


</td>

<td>
&emsp;&emsp;&emsp;&emsp;
</td>



</tr>

</table>


 

		
</center>




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
