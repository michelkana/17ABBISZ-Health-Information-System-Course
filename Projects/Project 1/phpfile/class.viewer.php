<?php
	session_start();
	
	include("class.distributor.php");
	
	class viewer{
		function display_login_form(){
			echo "
							<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
							<html>
								<head>
									<title>Login form</title>
									<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"> 
								</head>
								<body>
									<form method=\"post\" action=\"class.viewer.php?command_id=1\">
										<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
											<tr>
												<td>Login:</td>
												<td><input type=\"text\" name=\"log\" size=\"20\"></td>
											</tr>
											<tr>
												<td>Heslo:</td>
												<td><input type=\"password\" name=\"pwd\" size=\"20\"></td>
											</tr>
											<tr>
												<td colspan=\"2\"><input type=\"submit\" name=\"submit\" value=\"Login\"></td>
											</tr>
										</table>
									</form>
								</body>
							</html> 		
			";
		}	
		function display_homepage($user_name, $user_department, $message){
			
			if (! $user_name){
				$menu = " ";
			}else{
				if ($user_department == 'admin'){
					$menu = "<a href=\"class.viewer.php?form_id=3\">Create new department</a> | "
					      . "<a href=\"class.viewer.php?command_id=5\">Show departments list</a> | "
					      . "<a href=\"class.viewer.php?form_id=4\">Create new doctor</a> | "
					      . "<a href=\"class.viewer.php?command_id=6\">Show doctor list</a> <br><br>";
				}else{
					$menu = "<a href=\"class.viewer.php?form_id=5\">Register new patient</a> | "
					      . "<a href=\"class.viewer.php?command_id=7\">Show patients list</a> | "
						  . "<a href=\"class.viewer.php?command_id=9\">Show visits- need to be CODE!</a> <br><br>";
				}
			}
			
			echo "
							<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
							<html>
								<head>
									<title>Homepage</title>
									<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"> 
								</head>
								<body>
						"
						. $menu  
						. $message . "
								</body>
							</html> 		
			";	
				
		}		
		function display_new_department_form(){
			echo "
							<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
							<html>
								<head>
									<title>Department creation form</title>
									<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"> 
								</head>
								<body>
									<form method=\"post\" action=\"class.viewer.php?command_id=2\">
										<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
											<tr>
												<td>Department name: </td>
												<td><input type=\"text\" name=\"new_department_name\" size=\"20\"></td>
											</tr>
											<tr>
												<td colspan=\"2\"><input type=\"submit\" name=\"submit\" value=\"Submit\"></td>
											</tr>
										</table>
									</form>
								</body>
							</html> 		
			";
		}
		function display_departments_list_page($departments){
			$html = "
								<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
									<tr>
										<td><b>Department name</b></td>
									</tr>		
							";
			while ($row = mysql_fetch_assoc($departments)) {
			$html = $html . 
							"
									<tr>
										<td>" . $row['department_name'] . "</td>
									</tr>
								";
			}
			$html = $html . 
								"
								</table>
								";
			return $html;
		}			
		function display_new_doctor_form(){
			echo "
							<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
							<html>
								<head>
									<title>Doctor creation form</title>
									<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"> 
								</head>
								<body>
									<form method=\"post\" action=\"class.viewer.php?command_id=4\">
										<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
											<tr>
												<td>Doctor name: </td>
												<td><input type=\"text\" name=\"new_doctor_name\" size=\"20\"></td>
												<td>Doctor login: </td>
												<td><input type=\"text\" name=\"new_doctor_login\" size=\"20\"></td>
												<td>Doctor password: </td>
												<td><input type=\"text\" name=\"new_doctor_password\" size=\"20\"></td>
												<td>Doctor department id: </td>
												<td><input type=\"text\" name=\"new_doctor_depId\" size=\"20\"></td>

											</tr>
											<tr>
												<td colspan=\"2\"><input type=\"submit\" name=\"submit\" value=\"Submit\"></td>
											</tr>
										</table>
									</form>
								</body>
							</html> 		
			";
		}	
		function display_doctors_list_page($doctors){
			$html = "
								<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
									<tr>
										<td><b>Doctor name</b></td>
									</tr>		
							";
			while ($row = mysql_fetch_assoc($doctors)) {
			$html = $html . 
							"
									<tr>
										<td>" . $row['user_name'] . "</td>
									</tr>
								";
			}
			$html = $html . 
								"
								</table>
								";
			return $html;
		}			
		function display_new_patient_form(){
			echo "
							<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
							<html>
								<head>
									<title>Patient creation form</title>
									<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"> 
								</head>
								<body>
									<form method=\"post\" action=\"class.viewer.php?command_id=8\">
										<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
											<tr>
												<td>Patient name: </td>
												<td><input type=\"text\" name=\"new_patient_name\" size=\"20\"></td>
												<td>Patient age: </td>
												<td><input type=\"text\" name=\"new_patient_age\" size=\"20\"></td>
												<td>Patient birth number: </td>
												<td><input type=\"text\" name=\"new_patient_birth_number\" size=\"20\"></td>
												

											</tr>
											<tr>
												<td colspan=\"2\"><input type=\"submit\" name=\"submit\" value=\"Submit\"></td>
											</tr>
										</table>
									</form>
								</body>
							</html> 		
			";
		}	
		function display_patient_list_page($patients){
			$html = "
								<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
									<tr>
										<td><b>Patient name</b></td>
									</tr>		
							";
			while ($row = mysql_fetch_assoc($patients)) {
			$html = $html . 
							"
									<tr>
										<td>" . $row['patient_name'] . "</td>
									</tr>
								";
			}
			$html = $html . 
								"
								</table>
								";
			return $html;
		}			
		function display_visit_history_page($visits){
			$html = "
								<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
									<tr>
										<td><b>Visit history</b></td>
									</tr>		
							";
			while ($row = mysql_fetch_assoc($visits)) {
			$html = $html . 
							"
									<tr>
										<td>" . $row['start_date'] . "</td>
										<td>" . $row['end_date'] . "</td>
										<td>" . $row['doctor_id'] . "</td>
									</tr>
								";
			}
			$html = $html . 
								"
								</table>
								";
			return $html;
		}			
	
	
	}
	 
	$form_id = $_REQUEST['form_id'];
	$command_id = $_REQUEST['command_id'];
	
	$login = $_REQUEST['log'];
	$password = $_REQUEST['pwd'];
 	$new_department_name = $_REQUEST['new_department_name'];
	
	$new_doctor_name = $_REQUEST['new_doctor_name'];
	$new_doctor_login = $_REQUEST['new_doctor_login'];
	$new_doctor_password = $_REQUEST['new_doctor_password'];
	$new_doctor_depId = $_REQUEST['new_doctor_depId'];
	$new_patient_name = $_REQUEST['new_patient_name'];
	$new_patient_age = $_REQUEST['new_patient_age'];
	$new_patient_birth_number = $_REQUEST['new_patient_birth_number'];
	
	
	$user_name = $_SESSION['user_name'];
	$user_department_name = $_SESSION['user_department_name'];
		
	$gui = new viewer();
	$distrib = new distributor();	
	
	if ($form_id == 1){
		$gui->display_login_form();	
	}elseif ($form_id == 2){		
		$gui->display_homepage($user_name, $user_department_name, "");
	}elseif ($form_id == 3){
		$gui->display_new_department_form();
	}elseif ($form_id == 4){
		$gui->display_new_doctor_form();
	}elseif ($form_id == 5){
		$gui->display_new_patient_form();
	}

	if ($command_id == 1){	// log in	
		$distrib->request_check_login_credentials($login, $password);		
		$user_name = $_SESSION['user_name'];
		$user_department_name = $_SESSION['user_department_name'];	
		if (! $user_name){
				$message = "Login failed. Wrong username or password!";
		}else{
				$message = "Login successful. Homepage for <b>" . $user_name . "</b>, from department <b>" . $user_department_name . "</b><br><br>";
		}
		$gui->display_homepage($user_name, $user_department_name, $message);
	}elseif ($command_id == 2){ // create new department
		$success = $distrib->request_new_department_creation($new_department_name);	
		if ( $success ){
			$message = "Creation of a new department <b>" . $new_department_name . "</b> with success.";
			$gui->display_homepage($user_name, $user_department_name, $message);
		}else{
			$message = "Creation of a new department <b>" . $new_department_name . "</b> failed!";
			$gui->display_homepage($user_name, $user_department_name, $message);
		}
		
	}	elseif ($command_id == 4){ // create new doctor
		$tmp_user = $user_name;
		$success = $distrib->request_new_doctor_creation($new_doctor_name,$new_doctor_login, $new_doctor_password, $new_doctor_depId);	
		$user_name = $tmp_user;
		if ( $success ){
			$message = "Creation of a new doctor <b>" . $new_doctor_name . "</b> with success.";
			$gui->display_homepage($user_name, $user_department_name, $message);
		}else{
			$message = "Creation of a new doctor <b>" . $new_doctor_name . "</b> failed!";
			$gui->display_homepage($user_name, $user_department_name, $message);
		}
		
		}elseif ($command_id == 8){ // create new patient
		$success = $distrib->request_new_patient_creation($new_patient_name,$new_patient_age, $new_patient_birth_number);	
		if ( $success ){
			$message = "Creation of a new patient <b>" . $new_patient_name . "</b> with success.";
			$gui->display_homepage($user_name, $user_department_name, $message);
		}else{
			$message = "Creation of a new patient <b>" . $new_patient_name . "</b> failed!";
			$gui->display_homepage($user_name, $user_department_name, $message);
		}
		
		
		
		}
		
		
		elseif ($command_id == 5){ // view departments list
			$departments = $distrib->request_departments_listing();	
			$departments_list_html = $gui->display_departments_list_page($departments);
			$gui->display_homepage($user_name, $user_department_name, $departments_list_html);
		}elseif ($command_id == 6){ // view doctor list
			$doctors = $distrib->request_doctor_listing();	
			$doctors_list_html = $gui->display_doctors_list_page($doctors);
			$gui->display_homepage($user_name, $user_department_name, $doctors_list_html);
		}elseif ($command_id == 7){ // view patient list
			$patient = $distrib->request_patient_listing();	
			$patient_list_html = $gui->display_patient_list_page($patient);
			$gui->display_homepage($user_name, $user_department_name, $patient_list_html);
		}elseif ($command_id == 9){ // view visit list
			$patient = $distrib->request_visit_history_listing();	
			$patient_list_html = $gui->display_patient_list_page($patient);
			$gui->display_homepage($user_name, $user_department_name, $patient_list_html);
			}
	
?>

