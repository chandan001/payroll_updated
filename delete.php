<?php 
//	require('db.php');
	
	$id=$_GET['emp_id'];
	 $conn11 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');

	$query = "DELETE FROM employee WHERE emp_id=$id"; 
mysqli_query($conn11,$query) or die("Error in Query" . mysqli_error($conn11));	
	
	
	header("Location: home_employee.php"); 
 ?>