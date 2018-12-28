<?php
	include("class.user.php");
	include("class.administrator.php");
	include("class.doctor.php");
	
	class distributor{
		
		function request_check_login_credentials($login, $password){
			$current_user = new user();
			list($user_name, $user_department_name) = $current_user->db_check_login_credentials($login, $password);
			$_SESSION['user_name'] = $user_name;
			$_SESSION['user_department_name'] = $user_department_name;
		}
		
		function request_new_department_creation($department_name){
			$current_admin = new administrator();
			$success = $current_admin->db_create_new_department($department_name);
			return $success;
		}
	
		function request_departments_listing(){
			$current_admin = new administrator();
			$departments = $current_admin->db_list_departments();
			return $departments;
		}
		
		function request_new_doctor_creation($doctor_name,$doctor_login, $doctor_password, $doctor_department){
			$current_admin = new administrator();
			$success = $current_admin->db_create_new_doctor($doctor_name,$doctor_login, $doctor_password, $doctor_department);
			return $success;
		}
		
		function request_doctor_listing(){
			$current_admin = new administrator();
			$doctors = $current_admin->db_list_doctors();
			return $doctors;
		}
		
		function request_new_patient_creation($patient_name,$patient_age, $patient_birth_number){
			$current_doctor = new doctor();
			$success = $current_doctor->db_create_new_patient($patient_name,$patient_age, $patient_birth_number);
			return $success;
		}
		
		function request_patient_listing(){
			$current_doctor = new doctor();
			$patients = $current_doctor->db_list_patients();
			return $patients;
		}
		
		function request_new_visit_creation($patient_id, $start_date, $end_date, $doctor_id){
			$current_doctor = new doctor();
			$success = $current_doctor->db_create_new_visit($patient_name,$patient_age, $patient_birth_number);
			return $success;
		}
		
		function request_visit_history_listing(){
			$current_doctor = new doctor();
			$doctors = $current_doctor->db_list_visit_history();
			return $doctors;
		}
		
		function request_visit_closing($end_date){
			$current_doctor = new doctor();
			$doctors = $current_doctor->db_close_visit($end_date);
			return $doctors;
		}
	}


?>

