<?php 

 // include("db.php");
  include("auth.php");

  //$id           = $_POST['id'];
 
 $id=$_GET["id"];
  $deduction=$_POST["deduction"];
  $overtime=$_POST["overtime"];
  $bonus=$_POST["bonus"];
 $conn=mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                   if(!$conn)
                          {
                            die("Database Connection Failed" . mysqli_error());
                          }
  $query="UPDATE employee SET deduction='$deduction',overtime='$overtime',bonus='$bonus' WHERE emp_id='$id'";
mysqli_query($conn,$query) or die("Error in Query" . mysqli_error($conn));
		  $cnt = mysqli_affected_rows($conn);
	mysqli_close($conn);
	  
  if ($cnt>0)
  {
   
   echo" <script>
      alert('Account successfully updated.');
      window.location.href='home_employee.php';
    </script>";
  }
  else
  {
    echo "Invalid";
  }
?>