<?php
	$connection= mysqli_connect ("localhost","root","","repair_gsd");
	
	if(!$connection)
		die ("Error on database connection".mysqli_connect_error());
	echo "Connected successfully"."<br>";
	

	//require_once "conn.php";
	$r_date=$_POST["r_date"];
	$i_desc=$_POST["i_desc"];
	$model_no=$_POST["model_no"];
	$p_date=$_POST["p_date"];
	$p_value=$_POST["p_value"];
	$branch=$_POST["branch"];
	$a_code=$_POST["a_code"];
	$dept=$_POST["dept"];
	$username=$_POST["username"];
	$userid=$_POST["userid"];
	$repair=$_POST["repair"];
	$approve=$_POST["approve"];
	$recomm=$_POST["recomm"];
	$a_gsd=$_POST["a_gsd"];
	
	$sql= "Insert into repair_form(r_date,i_desc,model_no,p_date,p_value,branch,a_code,dept,username,userid,repair,approve,recomm,a_gsd) values
	(
	'$r_date','$i_desc','$model_no','$p_date','$p_value', '$branch','$a_code','$dept','$username','$userid' ,'$repair','$approve','$recomm','$a_gsd'
	)";
	
	mysqli_query($connection,$sql);
	
	header( "refresh:5;url=index.php" ); 
	echo "Record Added successfully"."<br>";
	
	echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.';
  
	//header("Refresh:5000;Location: index.php");
exit;
?>