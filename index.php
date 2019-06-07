
				<?php
					require 'class.php';
					//$conn = new db_class();
					$read = $conn->read();
					$rows = array();
					$results = array();$count = 0;
					while($fetch = $read->fetch_array()){ 
						$count +=1;
						$results['student_Id']= $fetch['student_id'];
						$results['first_name']  =$fetch['f_name'];
						$results['last_name']  =$fetch['l_name'];
						$results['registr_num']  = $fetch['reg_no'];
						$results['stude_email']  =$fetch['email'];
						array_push($rows,$results);
					}

					$returnJs = array('message'=>'success','status'=>1,'data'=>$rows,'returned_data'=>$count);
					echo json_encode($returnJs);
				?>	
			