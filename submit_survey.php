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
$get_id = mysql_real_escape_string($data->email);
$get_field_1 = mysql_real_escape_string($data->field_1);
$get_field_2 = mysql_real_escape_string($data->field_2);
$get_field_3 = mysql_real_escape_string($data->field_3);
$get_field_4 = mysql_real_escape_string($data->field_4);

/*
$get_id = 444238;
$get_field_1 = 'Food';//mysql_real_escape_string($data->field_1);
$get_field_2 = '123457';//mysql_real_escape_string($data->field_2);
$get_field_3 = 'test';//mysql_real_escape_string($data->field_3);
$get_field_4 = 'test';//mysql_real_escape_string($data->field_4);
*/
$get_created_date =date('Y-m-d');
$count =0;
if( empty($get_id) || empty($get_field_1) || empty($get_field_2) || 
empty($get_field_3) || empty($get_field_4)  )
{
	$response["success"] = 2;
	echo json_encode($response);
}
else
{
	
			$response["success"] = 1;		
			echo json_encode($response);
/*
$result5 = mysql_query("SELECT * FROM surveylist WHERE email='$get_id' ");
		$allquestion = mysql_fetch_array($result5);
		$get_question = $allquestion["question"];	
		
$result6 = mysql_query("SELECT * FROM emp_results WHERE email='$get_id'  AND 
								emp='$get_field_2'");
		$allquestion1 = mysql_fetch_array($result6);
		$get_answer = $allquestion1["answer"];	

if ( ($get_question == $get_answer)) // start at min time 
{
				
		$result3 = mysql_query("SELECT * FROM attempt WHERE email='$get_id' AND 
								field_2='$get_field_2' ");
				$Total_bal = mysql_fetch_array($result3);
				$count = $Total_bal["field_5"];	

		//echo $count;
		if ( ($count < 1)  or (empty($count))) // start at min time 
		{		
			$get_field_5=1;
			$result = mysql_query("INSERT INTO attempt( email,field_1, field_2, 
								field_3,field_4, field_5, created_date	)
				VALUES(	'$get_id','$get_field_1','$get_field_2',
						'$get_field_3', '$get_field_4', '$get_field_5','$get_created_date')");

			if($result)
			{
				$response["success"] = 1;		
				echo json_encode($response);
			}
		}
		else
		{
			$count = $count + 1;
			$result2 = mysql_query("UPDATE attempt set field_5='$count'  WHERE email='$get_id' AND field_2='$get_field_2' ");

			$response["success"] = 1;		
			echo json_encode($response);
		}

}
else 
{
		$response["success"] = 3;		
		echo json_encode($response);
}
*/

}
?>