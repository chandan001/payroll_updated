<?php
 

  //$select_db = mysqli_select_db('payroll');
  //if (!$select_db)
 // {
   // die("Database Selection Failed" . mysqli_error());
  //}

 // if(isset($_POST['submit1']))
  //{
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $gender= $_POST['gender'];
    $type= $_POST['emp_type'];
    $division= $_POST['division'];
	
    $salary= $_POST['salary'];
	 $conn11 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
 // if (!$conn)
	 $conn12 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
$conn13 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');

  //{
    //die("Database Connection Failed" . mysqli_error());
  //}
	
		$query11="insert into employee(lname,fname,gender,emp_type,division,salary)values('$lname','$fname','$gender','$type','$division','$salary')";	
		
		$query12="insert into salary(lname,fname,salary_rate)values('$lname','$fname','$salary')";	
		$query13="insert into deductions(philhealth,bir,gsis,pag_ibig,loans,emp_id)values('35','10','10','5','10','0')";	
		
		
		mysqli_query($conn11,$query11) or die("Error in Query" . mysqli_error($conn11));
		mysqli_query($conn12,$query12) or die("Error in Query" . mysqli_error($conn12));
	mysqli_query($conn13,$query13) or die("Error in Query" . mysqli_error($conn13));
		  
						  
	  $cnt = mysqli_affected_rows($conn11);
	  
	  //$cnt1 = mysqli_affected_rows($conn12);
	mysqli_close($conn11);
	mysqli_close($conn12);
	mysqli_close($conn13);
	
	  //$res=mysqli_query($conn, $query) or die("Error in Query" . mysqli_error($conn));
	  					  
    //$sql = mysqli_query("INSERT into employee(lname, fname, gender, emp_type, division)VALUES('$lname','$fname','$gender', '$type', '$division')");

    if($cnt>0)
    {
      ?>
        <script>
            alert('Employee has been successfully added.');
            window.location.href='home_employee.php?page=emp_list';
        </script>
      <?php 
    }

    else
    {
      ?>
        <script>
            alert('Invalid.');
            window.location.href='index.php';
        </script>
      <?php 
    }
  //}
?>