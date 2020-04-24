<?php 

  include("db.php");
  include("auth.php");

  $id         = $_POST['id'];
  $lname      = $_POST['lname'];
  $fname      = $_POST['fname'];
  $gender     = $_POST['gender'];
  $division   = $_POST['division'];
  $emp_type   = $_POST['emp_type'];
  $conn=mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                   if(!$conn)
                          {
                            die("Database Connection Failed" . mysqli_error());
                          }


  $query ="UPDATE employee SET emp_type='$emp_type', lname='$lname', fname='$fname', gender='$gender', division='$division' WHERE emp_id='$id'";
mysqli_query($conn,$query) or die("Error in Query" . mysqli_error($conn));
		  $cnt = mysqli_affected_rows($conn);
	mysqli_close($conn);

  if ($cnt>0)
  {
    ?>
    <script>
      alert('Employee successfully updated.');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
  else
  {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
?>