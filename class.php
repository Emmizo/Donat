<?php
	require 'config.php';
	
	class db_class extends db_connect{	
		private $f_name;
		private $l_name;
		private $reg_no;
		private $email;
		private $student_id;
		public function __construct(){
			$this->connect();
		}

		public function setFname($first){
			return $this->f_name=$first;
		}
		public function setLname($last){
			return $this->l_name=$last;
		}
		public function setReg($reg){
			return $this->reg_no=$reg;
		}
		public function setEmail($emailC){
			return $this->email=$emailC;
		}
		public function SetID($student){
			return $this->student_id=$student;
		}
public function create(){
		$stmt = $this->conn->prepare("INSERT INTO `student` (`f_name`, `l_name`, `reg_no`, `email`) VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $this->f_name, $this->l_name,$this->reg_no,$this->email);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		
public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `student` ") or die($this->conn->error);

			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
			
		}
		
public function delete(){
			$stmt=$this->conn->prepare("DELETE FROM student WHERE student_id=$this->student_id")or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
		
 public function update(){
 $stmt = $this->conn->prepare("UPDATE `student` SET `f_name` = ?, `l_name` = ?, `reg_no` = ?, `email` = ? WHERE `student`.`student_id` = $this->student_id;
")or die($this->error);
 $stmt->bind_param("ssss", $this->f_name, $this->l_name,$this->reg_no,$this->email);
 if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
			else{
				return false;
			}
 		}	
}
 	$conn=new db_class();/*
		public function readUpdate(){
			$stmt = $this->conn->prepare("SELECT * FROM `student` WHERE student_id=$this->student_id ") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
			
		}*/
?>