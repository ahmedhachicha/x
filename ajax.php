<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
ob_start();
session_start();
include 'init.php';
// if($_POST['idslct']){
// 	$id=$_POST['idslct'];
// 	if($id==0){
// 		echo "<option>Select City</option>";
// 		}else{
//             $allUsers = getAllFrom("*", "city", "country_id='$id'", "", "city_id");
//             foreach($allUsers as $user){
//                 echo "<option value='" . $user['city_id'] . "'>" .$user['city_name'] . "</option>";
//             }
// 			}
// 		}
//         ob_end_flush();

if($_POST['id']){
	$id=$_POST['id'];
	if(empty($id)){
		echo "<option>Trim</option>";
		}else{
			$gettypesidee = $con->prepare("SELECT * FROM make WHERE Id = $id");
			$gettypesidee->execute();
			$info = $gettypesidee->fetch();
			$nametypesidee = $info['Name'];

				$stmt = $con->prepare("SELECT * FROM trime WHERE model_name='$nametypesidee'");
				$stmt->execute();
				$allUsers = $stmt->fetchAll();
				?> <option value="">Trim</option> <?php
				foreach($allUsers as $user){
					echo "<option value='" . $user['Name'] . "'>" . $user['Name'] . "</option>";
				}
		}
	
	}
?>