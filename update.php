<?php
require 'class.php';

$student_id=$_GET['student_id'];
$read = $conn->read();
$conn->SetID($student_id);
$fetch = $read->fetch_array();
if(isset($_POST)){
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$reg_no=$_POST['reg_no'];
$email=$_POST['email'];

$conn->setFname($f_name);
$conn->setLname($l_name);
$conn->setReg($reg_no);
$conn->setEmail($email);


//$conn->SetID($student_id);
$res=$conn->update();
$data = array();
if ($res) {
	//header("location:index.php");
	// echo  "updated";
	$message = 'success';
	$status = 1;
}
else{
	$message = 'failed';
	$status = 0;
}
}

$returnJs = array('message'=>$message,'status'=>$status);
echo json_encode($returnJs);
	?>	
<!-- 			
<?php //echo $fetch['f_name']?>
<?php //echo $fetch['l_name']?>
<?php //echo $fetch['reg_no'];?>
<?php //echo $fetch['email'];?> -->