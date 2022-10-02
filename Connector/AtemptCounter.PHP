
<?php

 include_once '../Class/DBConnection.php';
 
 function AttemptCounter($UserName)
{

$log=new DBConnection();
  $counter = "SELECT * FROM account WHERE User_Name ='".$UserName."'";
        
 		$counter_result = $log->executeQuery($counter);	
          	$attempts = mysqli_fetch_assoc($counter_result);
                   
if (in_array($UserName,$attempts))
  
                {
   
     $attempt_counter=$attempts["Attempt_Counter"]+1;
	$att_counter_sql="Update account Set Attempt_Counter='".$attempt_counter."' Where User_Name='".$UserName."'";
     $att_counter_result =  $log->executeQuery($att_counter_sql);
                    
 
	if($attempt_counter>7)
                   {
     $for_decavtivation="Update account Set Account_Status=0 Where User_Name='".$UserName."'";
     $_deactivation_result = $log->executeQuery($for_decavtivation);
              }

 else {
 //echo "am here";
    $att_counter_sql="Update account Set Attempt_Counter='".$attempt_counter."' Where User_Name='".$UserName."'";

  $att_counter_result = $log->executeQuery($att_counter_sql);

     }
  }
}

function AttemptCountReseter($UserName,$password_to_md5)
{
$log=new DBConnection();
$att_counter_sql="Update account Set Attempt_Counter='0' Where User_Name='".$UserName."'AND password='".$password_to_md5."'";
$att_counter_result = $log->executeQuery($att_counter_sql);
}
?>
