<?php

	class doctor extends user{

		function db_create_new_patient($patient_name, $patient_age, $patient_birth_number){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "INSERT INTO Patients (patient_name, patient_age, patient_birth_number) VALUES ('" . $patient_name . "'," . $patient_age . "," . $patient_birth_number . ")"; 
			$rs = mysql_query($query);
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return true;
			}
			mysql_close(); 
		}
		
		function db_list_patients(){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "SELECT patient_name FROM Patients";
			$rs = mysql_query($query);
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return $rs;
			}		
			mysql_close(); 
		}
		
		function db_create_new_visit($patient_id, $start_date, $end_date, $doctor_id){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "INSERT INTO Visits (patient_id, start_date, end_date, doctor_id) VALUES ('" . $patient_id . "," . $start_date . "," . $end_date . "," . $doctor_id . "')"; 
			$rs = mysql_query($query);
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return true;
			}
			mysql_close(); 
		}
	
		function db_list_visit_history(){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "SELECT patient_id, start_date, end_date, doctor_id FROM Visits";
			$rs = mysql_query($query);
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return $rs;
			}		
			mysql_close(); 
		}
	
		function db_close_visit($end_date){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "INSERT INTO Visits (end_date) VALUES ('" . $end_date . "')"; 
			$rs = mysql_query($query);
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return $rs;
			}		
			mysql_close(); 
		}
	
	}
	
?>
