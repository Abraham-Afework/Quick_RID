
<?PHP include_once '../../Class/DBConnection.php';


$id=$_REQUEST['id'];
$status=new DBConnection();
 if(isset($_REQUEST['sent']))
    {
     
       $UPDATE="UPDATE `part_request` SET `Status` = 'sent' WHERE `part_request`.`ID` =".$id;
//       echo $UPDATE;
       $status->executeQuery($UPDATE);
//       Header('Location:StoreControl.php');
    } 
    if(isset($_REQUEST['po']))
    {
     
       $UPDATE="UPDATE `part_request` SET `Status` = 'POREQ' WHERE `part_request`.`ID` =".$id;
       echo $UPDATE;
       $status->executeQuery($UPDATE);
    } 
    if(isset($_REQUEST['pend']))
    {
     
       $UPDATE="UPDATE `part_request` SET `Status` = 'Pending' WHERE `part_request`.`ID` =".$id;
       echo $UPDATE;
       $status->executeQuery($UPDATE);
    } 
    ?>
           

