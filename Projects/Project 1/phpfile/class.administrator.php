<?php

	class administrator extends user{

		function db_create_new_department($department_name){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "INSERT INTO department (department_name) VALUES ('" . $department_name . "')";
			$rs = mysql_query($query);
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return true;
			}
			mysql_close(); 
		}
		
		function db_list_departments(){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "SELECT department_name FROM department";
			$rs = mysql_query($query);
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return $rs;
			}		
			mysql_close(); 
		}
		function db_create_new_doctor($doctor_name,$doctor_login, $doctor_password, $doctor_department){ 
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "INSERT INTO user (user_name, user_login, user_password, user_department_id) VALUES ('" . $doctor_name . "','" . $doctor_login . "','" . $doctor_password . "'," . $doctor_department . ")";  
			$rs = mysql_query($query); 
			if (!$rs) {
				echo "Could not execute query: $query";
				return false;
			}else{
				return true;
			}
			mysql_close(); 
		}
		function db_list_doctors(){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
			$query = "SELECT user_name FROM user";				
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

