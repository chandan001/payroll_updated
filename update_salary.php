<?php
	
		///require("db.php");
		 include("auth.php");
	//$id 			= $_POST['salary_id'];
		$salary		= $_POST['salary_rate'];
		$empid=$_POST["empsal"];
		
		
$conn = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');


		$query = "UPDATE salary SET salary_rate='$salary' where emp_id='empid' ";
		mysqli_query($conn,$query) or die("Error in Query" . mysqli_error($conn));

	  $cnt = mysqli_affected_rows($conn);
	mysqli_close($conn);
	  
  if ($cnt>0)

		{
			echo"
		        <script>
		            alert('Salary rate successfully changed...');
		            window.location.href='home_salary.php';
		        </script>";
		    
		}
		else {
			echo "
			
			
			
			<script>
		            alert('Not Successfull!');
		            window.location.href='home_salary.php';
		        </script>";
			
		
		}
 ?>