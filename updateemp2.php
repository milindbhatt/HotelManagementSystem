<?php
error_reporting(0);
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


$query = "SELECT * FROM employee_details WHERE emp_id = ".$EmpId;

$db_result = mysql_query($query,$connection);


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
<center><h1>OLD DETAILS OF EMPLOYEE</h1><br><br><br>
 </center>
 <table border="1" style= "background-color: #DAD4E9; color: #000000; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Id</th><br />
          <th>Employee First_Name</th><br />
          <th>Employee Last_Name</th><br />
          <th>Employee Address</th><br />
          <th>Pincode</th><br />
          <th>Gender</th><br />
          <th>Employee Contact Number</th><br />
          <th>Employee Job type</th><br />
          <th>Join date</td><br />
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
              <td>{$row['emp_pincode']}</td>
              <td>{$row['emp_gender']}</td>
              <td>{$row['emp_contactno']}</td> 
			  <td>{$row['emp_jobtype']}</td> 
			  <td>{$row['emp_joindate']}</td>
			  <td>{$row['emp_availaibleweekday']}</td> 
			  <td>{$row['emp_docs']}</td> 
			  <td>{$row['emp_emailid']}</td> 
			   
            </tr>\n";
          }
        ?>
      </tbody>

    </table><br><br>
    <center>Enter new details <br><br>
<form action="updateemp3.php" method="post">
  <input type="hidden" name='EmpId' readonly value='<?php echo $EmpId ?>'>
 First name   &emsp;&emsp; <input type="text" name="Firstname"  ><br>
 
 Last name &emsp;&emsp; <input type="text" name="Lastname"  ><br>
 Addressline  &emsp;&emsp; <input type="text" name="Address"  ><br>
 City  &emsp;&emsp; <input type="text" name="City"  ><br>
 Pincode  &emsp;&emsp; <input type="text" name="Pincode"  ><br>
  Contact Number &emsp;&emsp; <input type="text" name="Contactnumber"  ><br>
 Emailid &emsp;&emsp; <input type="text" name="Email" ><br>
 Gender &emsp;&emsp;  <select name="Gender">
					 
                                         <option value="M">Male</option>
                                         <option value="F">Female</option>
                                         <option value="N">Not specified</option>
 </select>
 
 <br>

 Jobtype &emsp;&emsp; <select name="Jobtype">
						<option value="ft">Full time</option>
						<option value="pt">Part time</option>
 						</select>
 
 <br>
 
 
 
 
 Joindate &emsp;&emsp; 
  <select name="Day">
					 
                                         <option value="01">01</option>
                                         <option value="02">02</option>
                                         <option value="03">03</option>
                                         <option value="04">04</option>
                                         <option value="05">05</option>
                                         <option value="06">06</option>
                                         <option value="07">07</option>
                                         <option value="08">08</option>
                                         <option value="09">09</option>
                                         <option value="10">10</option>
                                         <option value="11">11</option>
                                         <option value="12">12</option>
                                         <option value="13">13</option>
                                         <option value="14">14</option>
                                         <option value="15">15</option>
                                         <option value="16">16</option>
                                         <option value="17">17</option>
                                         <option value="18">18</option>
                                         <option value="19">19</option>
                                         <option value="20">20</option>
                                         <option value="21">21</option>
                                         <option value="22">22</option> 
                                         <option value="23">23</option>
                                         <option value="24">24</option>
                                         <option value="25">25</option>
                                         <option value="26">26</option>
                                         <option value="27">27</option>
                                         <option value="28">28</option>
                                         <option value="29">29</option>
                                         <option value="30">30</option>
                                         <option value="31">31</option>
 
                               
                            
                                  </select>
   
                          
                               
                                  <select name="Month">
                                
                                        
                                         <option value="Jan">Jan</option>
                                         <option value="Feb">Feb</option>
                                         <option value="Mar">Mar</option>
                                         <option value="Apr">Apr</option>
                                         <option value="May">May</option>
                                         <option value="Jun">Jun</option>
                                         <option value="Jul">Jul</option>
                                         <option value="Aug">Aug</option>
                                         <option value="Sep">Sep</option>
                                         <option value="Oct">Oct</option>
                                         <option value="Nov">Nov</option>
                                         <option value="Dec">Dec</option>
                                
                           
                                  </select>
                                 
                                  
                                  <select name="Year">

                                                    
                                                      <option value="1977">2014</option>
                                                    <option value="1978">2015</option>
 									</select>
 
 
 <br>
 
 

 
 Availaible week days &emsp;&emsp; <select name="AvailaibleWeek">
					 
                                         <option value="Monday-Wednesday">Monday-Wednesday</option>
                                         <option value="Wednesday-Sunday">Wednesday-Sunday</option>
                                         <option value="Anyday">Anyday</option>
                                         </select>
                                         
                                         <br>
   Documents shown for proof (any one)&emsp;&emsp; <select name="Docs">
						<option value="Passport">Passport</option>
						<option value="Insurance">Insurance</option>
 						</select><br>
 
 <input type="submit">
 </form>
</center>
<BR>



     

		





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
