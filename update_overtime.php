<?php 

  include("db.php");
  include("auth.php");

  $rate= $_POST['rate'];
 
	$conn = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');

  $query="UPDATE overtime SET rate='$rate'";
mysqli_query($conn,$query) or die("Error in Query" . mysqli_error($conn));
		  $cnt = mysqli_affected_rows($conn);
	mysqli_close($conn);
	  
  if ($cnt>0)



  {
    ?>
    <script>
      alert('Overtime successfully updated.');
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