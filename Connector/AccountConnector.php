<?php
include '../class/Account.php';
//include '../class/DBConnection.php';
//-------------------------------------------------
$submitedCount=extract($_POST);
$User_Name=  test_input($User_Name);

$Account_Type= test_input($Account_Type);

//--------------------------------------------
if ($submit=="Create" && $submitedCount==5)
    {
                 $Password=   test_input($Password);
                $AccountData= new DBConnection();
                $Sql_Query = "SELECT * FROM `account` Where User_Name=".$User_Name;
                $accountInfo=$AccountData->executeQuery($Sql_Query);
        if(@mysqli_fetch_row($accountInfo)==1)
                {
                    echo  "fdaf"; //Header('Location:../pages/Account/AddAccountForm.php?duplicateusr');
                                 }
               
       else{
             if(preg_match("/^[a-zA-Z ]*$/",$User_Name)) {
                                     
                      if($Password==$ConfirmPassword)
                            {  
                               $acc=new Account(Null, $User_Name, $Password, $Account_Type, 1);
                               $acc->SaveAccount();
                              
                            }
                         else   {
           Header('Location:../pages/Account/AddAccountForm.php?psw=pswnotmatch & usr='.$_POST['User_Name'].'& password='.$_POST['Password']);
                              }
    }            else   {
                    $nameErr = "Only letters and white space allowed"; 
                     Header('Location:../pages/Account/AddAccountForm.php?ivldusr=1 & usr="'.$_POST['User_Name']. '"& password='.$_POST['Password']);
                   }
    }
  }

else if ($submit=="Update Account"){
 $a=new Account($Account_ID, $User_Name, null, $Account_Type, $Account_Status);
   $a->UpdateAccount();
  
}
else{
   Header('Location:../pages/Account/AddAccountForm.php?error');
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  