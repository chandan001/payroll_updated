<?php
 

  //$select_db = mysqli_select_db('payroll');
  //if (!$select_db)
 // {
   // die("Database Selection Failed" . mysqli_error());
  //}

 // if(isset($_POST['submit1']))
  //{
    $lname      = $_POST['lname'];
    $fname      = $_POST['fname'];
    $gender     = $_POST['gender'];
    $type       = $_POST['emp_type'];
    $division   = $_POST['division'];
	 $conn11 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
 // if (!$conn)
  //{
    //die("Database Connection Failed" . mysqli_error());
  //}
	
		$query11=	"insert into employee(lname,fname,gender,emp_type,division)values('$lname','$fname','$gender','$type','$division')";			  
						  
	  $cnt = mysqli_affected_rows($conn11);
	mysqli_close($conn11);
	  //$res=mysqli_query($conn, $query) or die("Error in Query" . mysqli_error($conn));
	  					  
    //$sql = mysqli_query("INSERT into employee(lname, fname, gender, emp_type, division)VALUES('$lname','$fname','$gender', '$type', '$division')");

    if($cnt>1)
    {
      ?>
        <script>
            alert('Employee had been successfully added.');
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