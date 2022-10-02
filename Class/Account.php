<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author melese
 */
include 'DBConnection.php';
class Account {
    private $Account_ID;
    private $User_Name;
    private $Password;
    private $Account_Type;
    private $Account_Status;
    function __construct($Account_ID, $User_Name, $Password, $Account_Type, $Account_Status) {
        $this->Account_ID = $Account_ID;
        $this->User_Name = $User_Name;
        $this->Password = $Password;
        $this->Account_Type = $Account_Type;
        $this->Account_Status = $Account_Status;
    }
    function getAccount_ID() {
        return $this->Account_ID;
    }

    function getUser_Name() {
        return $this->User_Name;
    }

    function getPassword() {
        return $this->Password;
    }

    function getAccount_Type() {
        return $this->Account_Type;
    }

    function getAccount_Status() {
        return $this->Account_Status;
    }

    function setAccount_ID($Account_ID) {
        $this->Account_ID = $Account_ID;
    }

    function setUser_Name($User_Name) {
        $this->User_Name = $User_Name;
    }

    function setPassword($Password) {
        $this->Password = $Password;
    }

    function setAccount_Type($Account_Type) {
        $this->Account_Type = $Account_Type;
    }

    function setAccount_Status($Account_Status) {
        $this->Account_Status = $Account_Status;
    }
    public function SaveAccount(){
        
       $sql="INSERT INTO account (User_Name, Password, Account_Type, Account_Status) VALUES ('".$this->getUser_Name()."', md5('".$this->getPassword()."'), '".$this->getAccount_Type()."', '".$this->getAccount_Status()."')"; 
         //echo"$sql";
         $save=new DBConnection();
         if($save->executeQuery($sql))
             { Header('Location:../pages/Account/AddAccountForm.php?AccAdded');
               }
            else (Header('Location:../pages/Account/AddAccountForm.php?'
            . 'duplica=2usr &usr='.$_POST['User_Name'].'& password='.$_POST['Password']));
           }
public function UpdateAccount(){
         // $pass=new DBConnection();
         // $sql="SELECT *FROM account where Account_ID".$id;
          //$pass->executeQuery($sql1);
          $sql1="UPDATE account SET User_Name='".$this->getUser_Name()."',Account_Type='".$this->getAccount_Type()."',Account_Status='".$this->getAccount_Status()."' Where Account_ID='".$this->getAccount_ID()."'";
          $save1=new DBConnection();
          if($save1->executeQuery($sql1))
              {
               header('Location:../Pages/Account/ManageAccount.php?updated');
              
              }
               else {(Header('Location:../pages/Account/ManageAccount.php?'
            . 'duplica=2usr'));
           }
       }
       public function PasswordReset()
               {
           $Update="UPDATE account SET Password=MD5('1234@abcd') where Account_ID=".$this->getAccount_ID()."'";
            $acc->executeQuery($Update);
                echo "you have successfuly reseted the password";
       }
}