<?php

		//$id=$_REQUEST['emp_id'];
		

 // include("db.php"); //include auth.php file on all secure pages
  include("auth.php");
  
  
   $connempfix = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                          if (!$connempfix)
                          {
                            die("Database Connection Failed" . mysqli_error());
                          }
						  
        
		$id=$_REQUEST['emp_id'];
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		

//print"$id";

		
        //$query1 = "SELECT * from employee where emp_id='".$id."'";
       $queryfix = "select * from salary where fname='$fname' and lname='$lname' ";
       
	   
	   
	   
	    $resfix = mysqli_query($connempfix,$queryfix) or die ( mysqli_error());

$xfix=mysqli_fetch_array($resfix);


if($xfix[3]=='0')
{
	
	$connupdt = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');


		$queryupdt = "UPDATE salary SET emp_id='$id' where fname='$fname' and lname='$lname' ";
		mysqli_query($connupdt,$queryupdt) or die("Error in Query" . mysqli_error($connupdt));

	  $cntupdt = mysqli_affected_rows($connupdt);
	mysqli_close($connupdt);
	
	
	
}

  
  
  
//  $conn = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
  //                        if (!$conn)
    //                      {
      //                      die("Database Connection Failed" . mysqli_error());
        //                  }
						  

 // $query="SELECT * from deductions WHERE deduction_id='1'";
  //$res=mysqli_query($conn,$query) or die("Error in Query" . mysqli_error($conn));
  //while($row = mysqli_fetch_array($res))
 // {
   // $phil = $row['philhealth'];
    //$bir = $row['bir'];
    //$gsis = $row['gsis'];
    //$love = $row['pag_ibig'];
   // $loans = $row['loans'];
  //}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <title></title>

    <script>
      <!--
        var ScrollMsg= "Pride Payroll - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
      // -->
    </script>

    <link href="assets/must.png" rel="shortcut icon">
    <link href="assets/css/justified-nav.css" rel="stylesheet">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="data:text/css;charset=utf-8," data-href="assets/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet"> -->
    <!-- <link href="assets/css/docs.min.css" rel="stylesheet"> -->
    <link href="assets/css/search.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.min.css">

  </head>
  <body>

    <div class="container">
      <div class="masthead">
        <h3>
         <b><img src="images/logo.png"> by Pridepoint</b>
            <a data-toggle="modal" href="#colins" class="pull-right"><b>Admin</b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active">
              <a href="">Employee</a>
            </li>
            <li>
              <a href="home_deductions.php">Deduction/s</a>
            </li>
            <li>
              <a href="home_salary.php">Income</a>
            </li>
          </ul>
        </nav>
      </div><br><br>

      <?php
 $conn1 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                          if (!$conn1)
                          {
                            die("Database Connection Failed" . mysqli_error());
                          }
						  
        
		$id=$_REQUEST['emp_id'];
		

//print"$id";

		
        //$query1 = "SELECT * from employee where emp_id='".$id."'";
       $query1 = "select * from employee where emp_id='$id'";
       
	   
	   
	   
	    $res1 = mysqli_query($conn1,$query1) or die ( mysqli_error());

$x=mysqli_fetch_array($res1);

//print"$x[0]";

//$conn2 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
  //                        if (!$conn2)
    //                      {
      //                      die("Database Connection Failed" . mysqli_error());
        //                  }


//
  //      $query2  = "SELECT * from overtime ";
	//	$res2=mysqli_query($conn2,$query2) or die ( mysqli_error()); 
      //  while($row=mysqli_fetch_array($res2))
        //{
          //$rate   = $row['rate'];
        //}


 
		$id=$_REQUEST['emp_id'];


$conn3 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                         if (!$conn3)
                        {
                         die("Database Connection Failed" . mysqli_error());
                     }


        $query3  = "select * from salary where emp_id='$id' ";
		
		$res3=mysqli_query($conn3,$query3) or die ( mysqli_error());
        while($row3=mysqli_fetch_array($res3))
        {
          $salary   = $row3['salary_rate'];
        }

        while ($row = mysqli_fetch_assoc($res3))
        {
           $overtime     = $row3['overtime'] * $rate;
            $bonus     = $row3['bonus'];
            $deduction  = $ro3['deduction'];
            $income   = $overtime + $bonus + $salary;
            $netpay   = $income - $deduction;
          
		
		}
		  
		  ?>
          <?php
		 //  $id=$_REQUEST['emp_id'];
		  //global $id;
		  ?>
          
          
              <form class="form-horizontal"  method="post" name="form">
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row3['emp_id'];?>" />
                  <div class="form-group">
                    <label class="col-sm-5 control-label"></label>
                    <div class="col-sm-4">
                      <h2><?php //echo $row3['lname'];
					  echo $x['2'];
					  
					   ?> <?php //echo $row3['fname'];
					   echo $x['1'];
					    ?></h2>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Deduction/s  :</label>
                    <div class="col-sm-4">
                    <select name="deduction" class="form-control" required>
<?php
                    $conn3e = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');


                         if (!$conn3e)
                        {
                         die("Database Connection Failed" . mysqli_error());
                     }


        $query3e  = "select * from deductions";
		
		$res3e=mysqli_query($conn3e,$query3e) or die ( mysqli_error());
        $my=mysqli_fetch_array($res3e);
       
	    $phil=$my[1];
		$bir=$my[2];
		$gis=$my[3];
$pagibig=$my[4];
$loans=		$my[5];
		
		?>

                      <option value="<?php echo $phil; ?>">PhilHealth Premium</option>
                      <option value="<?php echo $bir; ?>">BIR</option>
                      <option value="<?php echo $gsis; ?>">GSIS</option>
                      <option value="<?php echo $love; ?>">PAG-IBIG</option>
                      <option value="<?php echo $loans; ?>">Loans</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Overtime  :</label>
                    <div class="col-sm-4">
                      <input type="text" name="overtime" class="form-control" value="<?php //echo $row3['overtime'];
					  
					   echo $x['7'];
					  ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Starting Salary  :</label>
                    <div class="col-sm-4">
                    <?php //echo $row3['overtime'];
					  
					   echo $x['9'];
					  ?>
                <!------      <input type="number" name="setsalary" class="form-control"  required>
---->

                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-5 control-label">New Salary  :</label>
                    <div class="col-sm-4">
                    <?php //echo $row3['overtime'];
					  
					  $eid=$_GET['emp_id'];


$conn311 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                         if (!$conn311)
                        {
                         die("Database Connection Failed" . mysqli_error());
                     }


        $query311  = "select * from salary where emp_id='$eid' ";
		
		$res311=mysqli_query($conn311,$query311) or die ( mysqli_error());
       $row311=mysqli_fetch_array($res311);
					  
					  
					   echo $row311[1];
					  ?>
                <!------      <input type="number" name="setsalary" class="form-control"  required>
---->

                    </div>
                  </div>
                  
                  
                  
                  
                  
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Bonus  :</label>
                    <div class="col-sm-4">
                      <input type="text" name="bonus" class="form-control" value="<?php //echo $row3['bonus'];
					  echo $x['8'];
					  ?>" required>
                    </div>
                  </div><br><br>

                  <div class="form-group">
                    <label class="col-sm-5 control-label">Netpay  :</label>
                    <div class="col-sm-4">
                      <?php 
					  
					  $id=$_REQUEST['emp_id'];
					  $conn2 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                   if (!$conn2)
                          {
                            die("Database Connection Failed" . mysqli_error());
                          }



        $query2  = "SELECT * from overtime ";
		$res2=mysqli_query($conn2,$query2) or die ( mysqli_error()); 
        while($row=mysqli_fetch_array($res2))
        {
          $rate   = $row['rate'];
        }
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  $conn45 = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
                         if (!$conn3)
                        {
                         die("Database Connection Failed" . mysqli_error());
                     }


        $query45  = "select * from salary where emp_id='$id'";
		
		$res45=mysqli_query($conn45,$query45) or die ( mysqli_error());
        
		$row45=mysqli_fetch_array($res45);
        
          $salary   = $row45[1];
        

        //while ($row5 = mysqli_fetch_assoc($res4))
		//$row5 = mysqli_fetch_assoc($res4);
        
           //$overtime     = $row5['overtime'] * $rate;
		   $overtime     = $x['7'] * $rate;
           // $bonus     = $row5['bonus'];
		    $bonus     = $x['8'];
		   
//            $deduction  = $row5['deduction'];
            $deduction  = $x['6'];


            $income   = $overtime + $bonus + $salary;
            $netpay   = $income - $deduction;
          
		
		
					  
					  
					  
					  
					  
					  
					  
					  echo $netpay;
		
					  ?>.00
                    </div>
                  </div><br><br>
                  <div class="form-group">
                    <label class="col-sm-5 control-label"></label>
                    <div class="col-sm-4">
                      <input type="submit" name="submit" value="Update" class="btn btn-danger">
                      <a href="home_employee.php" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>
                  
                  
                  <?php
				 
$id=$_REQUEST['emp_id'];

				  if(isset($_POST["submit"]))
				  {
					  //header("location:update_account.php?id=$id");
				// print"<script>window.top.location.href='update_account.php?id=$id'";
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  // include("db.php");
//  include("auth.php");

  //$id           = $_POST['id'];
 
// $id=$_GET["id"];
  $deduction=$_POST["deduction"];
  $overtime=$_POST["overtime"];
  $bonus=$_POST["bonus"];
  
  //$salary=$_POST["setsalary"];
 $connu=mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
 $consal=mysqli_connect('localhost', 'adiwal', 'adiwal@1.1', 'payroll');
 
                   if(!$connu)
                          {
                            die("Database Connection Failed" . mysqli_error());
                          }
  $queryu="UPDATE employee SET deduction='$deduction',overtime='$overtime',bonus='$bonus' WHERE emp_id='$id'";


//$querysal="UPDATE salary SET salary_rate='$salary' WHERE emp_id='$id'";

//mysqli_query($consal,$querysal) or die("Error in Query" . mysqli_error($consal));

mysqli_query($connu,$queryu) or die("Error in Query" . mysqli_error($connu));
		  $cntu = mysqli_affected_rows($connu);
	mysqli_close($connu);
	  
  if ($cntu>0)
  {
   
   echo" <script>
      alert('Account successfully updated.');
      window.location.href='home_employee.php';
    </script>";
  }
  else
  {
    echo" <script>
      alert('Not successful');
          </script>";
  
  
  }

				  
				  
				  
				  
				  
				  }
              
                 ?>
              </form>
           <?php
         // }
        ?>

      <!-- this modal is for my Colins -->
      <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">
              
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center">You are logged in as <b><?php echo $_SESSION['username']; ?></b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="logout.php" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/docs.min.js"></script> -->
    <script src="assets/js/search.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>

    <!-- FOR DataTable -->
    <script>
      {
        $(document).ready(function()
        {
          $('#myTable').DataTable();
        });
      }
    </script>

    <!-- this function is for modal -->
    <script>
      $(document).ready(function()
      {
        $("#myBtn").click(function()
        {
          $("#myModal").modal();
        });
      });
    </script>

  </body>
</html>