<?php
require 'class.php';
//$conn = new db_class();
$student_id=$_GET['student_id'];
$conn->SetID($student_id);
 $conn->delete();
if ($conn) {
echo "deleted";

}
else{
	echo "fail";
}
?>