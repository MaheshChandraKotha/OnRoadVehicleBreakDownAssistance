<?php
/*********************
**** CPanel ******************
*********/

/* Following register will admin login credentials */

// array for JSON response
$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

$data = json_decode(file_get_contents("php://input"));

$get_question_id = mysql_real_escape_string($data->id);
$get_survey_id = mysql_real_escape_string($data->email);
$get_field_1 = "";//mysql_real_escape_string($data->field_1);
$get_field_2 = mysql_real_escape_string($data->field_2);
$get_field_3 = mysql_real_escape_string($data->field_3);
$get_field_4 = mysql_real_escape_string($data->field_4);
$get_field_5 = mysql_real_escape_string($data->field_5);
$get_field_6 = mysql_real_escape_string($data->field_6);
$get_field_7 = mysql_real_escape_string($data->field_7);
$get_field_8 = mysql_real_escape_string($data->field_8);
$get_field_9 = mysql_real_escape_string($data->field_9);
$get_field_10 = mysql_real_escape_string($data->field_10);
$get_field_11 = "";//mysql_real_escape_string($data->field_11);
$get_field_12 =  "";//mysql_real_escape_string($data->field_12);

$get_created_date =date('Y-m-d');

if( empty($get_question_id) || empty($get_survey_id)|| empty($get_field_2) || empty($get_field_3) ||
empty($get_field_4) || empty($get_field_5) || empty($get_field_6)|| empty($get_field_7)||
empty($get_field_8) ||empty($get_field_9) ||empty($get_field_10)  )
{
	$response["success"] = 2;
	echo json_encode($response);
}
else
{
	
				
	$result = mysql_query("INSERT INTO answer( question,email, field_1,
							field_2, field_3, field_4,field_5,
							field_6,field_7,field_8,field_9,field_10,field_11,field_12, created_date	)
		VALUES(	'$get_question_id','$get_survey_id','$get_field_1', 
				'$get_field_2',	'$get_field_3', '$get_field_4', '$get_field_5',
				'$get_field_6','$get_field_7', '$get_field_8', '$get_field_9', 
				'$get_field_10', '$get_field_11', '$get_field_12', '$get_created_date' )");

				
		if( $result)
		{
			// success
			$response["success"] = 1;		
			// echoing JSON response
			echo json_encode($response);
		}
		else 
		{
			// unsuccess
			$response["success"] = 0;		
			// echoing JSON response
			echo json_encode($response);
		}

}
?>