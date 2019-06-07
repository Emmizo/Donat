<?php
	require_once 'class.php';
	if(isset($_POST)){	
$f_name = $_POST['f_name'];
$l_name  = $_POST['l_name'];
$reg_no = $_POST['reg_no'];
$email =$_POST['email'];

$conn->setFname($f_name);
$conn->setLname($l_name);
$conn->setReg($reg_no);
$conn->setEmail($email);
		$conn->create();
		if($conn){
		//header('location: index.php');
			echo "inserted";
		}
		else{
			echo "fail";
		}
		
	}	?>