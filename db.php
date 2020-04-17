<?php
	$connection = mysqli_connect('localhost', 'adiwal', 'adiwal@1.1','payroll');

	if (!$connection)
	{
		die("Database Connection Failed" . mysql_error());
	}

	//$select_db = mysqli_select_db('payroll');
	//if (!$select_db)
	//{
	//	die("Database Selection Failed" . mysql_error());
	//}
?>