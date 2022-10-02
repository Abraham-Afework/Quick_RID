<?php
include_once '../Class/DBConnection.php';
extract($_POST)."</br>";
//print_r($_POST);//echo $input;//echo $Aircraft ."</br>";//echo $Description."</br>";////echo $RequestID[1] ."</br>";
//echo $Date ."</br>";//echo $Requested_Time."</br>";//echo $Status;//$RequestID=$_POST['RequestID'];//echo count($_POST['RequestID']);
//$j=0;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = preg_replace("/[^a-zA-Z0-9]/","",$data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if($Submit==='Submit')
       {
    for($i=0;$i<count($_POST['RequestID']);$i++){
        $RequestIDs=test_input($RequestID[$i]);
      if(!empty($RequestID[$i])& $RequestIDs!='')
          {
          
          $sql="INSERT INTO `part_request`(`ID`, `Aircraft_Reg`, `Request_ID`, `Requested_Time`, `Date`, `Status`)"
               . "Values (null ,'$Aircraft',UPPER('$RequestIDs'),'$Requested_Time','$Date','$Status')";
                 $sfs=new DBConnection();
           if($sfs->executeQuery($sql)==TRUE){
                
                 Header('Location:../Pages/Request/RequestForm.php?sucess');
//                    echo test_input($RequestIDs);
              // echo $sql."am here";
                 }
                 else {
                      Header('Location:../Pages/Request/RequestForm.php?Duplicate');
                      echo $sql."Duplicate";
      }
          }
      else if(empty($RequestID[$i])|| $RequestIDs=='')
          {
           Header('Location:../Pages/Request/RequestForm.php?$emptyRID');
          echo "am empty";
      }
//              

 }
 }
    
}