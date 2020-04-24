<?php
	
	//	require("db.php");
		
		@$id 			= $_POST['deduction_id'];
		@$philhealth 	= $_POST['philhealth'];
		@$bir 			= $_POST['bir'];
		@$gsis 			= $_POST['gsis'];
		@$love 			= $_POST['pag_ibig'];
		@$loans 		= $_POST['loans'];

 $conn = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');

		$query = "UPDATE deductions SET bir='$bir', gsis='$gsis', pag_ibig='$love', loans='$loans', philhealth='$philhealth' WHERE deduction_id='1'";
mysqli_query($conn,$query) or die("Error in Query" . mysqli_error($conn));
		   $cnt = mysqli_affected_rows($conn);
	mysqli_close($conn);
		if($cnt>0)
		{
			
		    echo"    <script>
		            alert('Deductions successfully updated...');
		            window.location.href='home_deductions.php';
		        </script>
		    "; 
		}
		else {
			echo "
			
			
			 <script>
		            alert('Not Successfull!');
		            window.location.href='home_deductions.php';
		        </script>
			
			"; 
		}
 ?>