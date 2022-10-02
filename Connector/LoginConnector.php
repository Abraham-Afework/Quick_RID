<?php 
session_start();
include_once 'AtemptCounter.php';
extract($_POST);
function trim_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 if($submit=="Login"){
    if (isset($_POST['UserName']) && isset($_POST['Password'])){
      $UserName = trim_input($_POST['UserName']);
      $password = trim_input($_POST['Password']);
      
        if (!empty($UserName) && !empty($password)) {
        
            $password_to_md5 = md5($password);
            $log=new DBConnection();//creating the new object db				
            $query = "SELECT * FROM account WHERE User_Name='".$UserName."' AND Password='"
                    .$password_to_md5."'AND Attempt_Counter <=7 AND Account_Status='1'"; 
            $counter = "SELECT * FROM account WHERE User_Name ='".$UserName."'";
            
            
            if ($run_query = $log->executeQuery($query)) {
            $query_num_rows = mysqli_num_rows($run_query);
     
                 if ($query_num_rows == 0) {
			AttemptCounter($UserName);
                       header('Location:../index.php?usrfailed');
                     } 
                elseif ($query_num_rows == 1) {
  
                        AttemptCountReseter($UserName,$password_to_md5);
                    // get the id and put it in a session
                        $query_row = mysqli_fetch_assoc($run_query);
		// create a session
                        $_SESSION['Account_ID']=$query_row['Account_ID'];
                         $_SESSION['Account_Type']=$query_row['Account_Type'];
                        header('Location:../Pages/Home/Home.php');
                     }
               }
            else{
//                header('Location:../Pages/Logout.php?UnableTogetTheDatabase');
                   echo'UnableToget';
                }
          } 
	else {
                header('Location:../Pages/Logout.php?wow');
             }
   }
}

