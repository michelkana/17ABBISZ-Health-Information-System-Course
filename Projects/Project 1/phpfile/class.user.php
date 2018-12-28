<?php

	class user{

		function db_check_login_credentials($login, $password){
			$db= mysql_connect("localhost",  "dunikkat",  "eleis5ki" ); 
			if (!$db) { 
				die(' Connection to database failed: ' . mysql_error()); 
			}
			mysql_query("SET CHARACTER SET utf8;");
			mysql_select_db("dunikkat"); 
	
	    $query = "SELECT user.user_name user_name, department.department_name department_name FROM user, department " .
	             "WHERE user.user_department_id = department.department_id " .
	             "AND user.user_login ='" . $login . "' " .
	             "AND user.user_password = '" . $password . "'";
	    $rs = mysql_query($query);
	    if (!$rs) {
		    echo "Could not execute query: $query";
			}
			
	    if ($row = mysql_fetch_assoc($rs)) {
	    	$user_name = $row['user_name'];
	    	$user_department_name = $row['department_name'];
	    	return array($user_name,$user_department_name);
			}else{
	    	return array(null, null);
	    }
	    mysql_close(); 
		}
	
	}
	
?>

