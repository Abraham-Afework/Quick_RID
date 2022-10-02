<?php include_once '../Header&Footer/Header.php';?>
<?PHP include_once '../../Class/DBConnection.php';

@$id=$_REQUEST['id'];
$status=new DBConnection();
 if(isset($_REQUEST['Sent']))
    {
     
       $UPDATE="UPDATE `part_request` SET `Status` = 'Sent' WHERE `part_request`.`ID` =".$id;
//       echo $UPDATE;
       $status->executeQuery($UPDATE);
//       Header('Location:StoreControl.php');
    } 
    if(isset($_REQUEST['po']))
    {
     
       $UPDATE="UPDATE `part_request` SET `Status` = 'POREQ' WHERE `part_request`.`ID` =".$id;
//       echo $UPDATE;
       $status->executeQuery($UPDATE);
    } 
    if(isset($_REQUEST['pend']))
    {
     
       $UPDATE="UPDATE `part_request` SET `Status` = 'Pending' WHERE `part_request`.`ID` =".$id;
//       echo $UPDATE;
       $status->executeQuery($UPDATE);
    } 
    if(isset($_REQUEST['Unknown']))
    {
     
       $UPDATE="UPDATE `part_request` SET `Status` = 'Wrong_RID' WHERE `part_request`.`ID` =".$id;
//       echo $UPDATE;
       $status->executeQuery($UPDATE);
    } 
    ?>
           

 <section id="main-content">
     <section class="wrapper">            
         <div class="col-md-10 col-md-offset-1 col-sm-6 col-xs-12">
             
           <div class="panel panel-warning">
        <div class="panel-heading" style="padding:5px;">
          Part Request List
          <div class="navbar-right">
                <input class="form-control input-success"   id="myInput" onkeyup="myFunction()" placeholder="Search for RID..">

           </div>
        </div>
    
<div class="table-responsive ">
    <div id="print_div">
                <table class="table table-bordered"id="myTable">
                    <thead>
                        <tr>
                            <th>N<u>o</ul></</th>
                            <th>Aircraft </th>
                            <th>RID</th>
                            <th>Requested Time</th>
                             <th>Status</th>
                             <th>Details</th>
                             
		     </tr>
                    </thead>                    


			  <tbody>
                              <?php
                        
                     
                                $count=1;
                            $sql_request="SELECT * FROM `part_request` ORDER BY ID";
         $req= new DBConnection();
                            $result=$req->executeQuery($sql_request);
                            while ($row = mysqli_fetch_object($result)) {
                                               ?>
                              <tr>
                                <td><?php print($count);?></td>
                                <td><?php print($row->Aircraft_Reg);?></td>
                                <td><?php print($row->Request_ID);?></td>
                                <td><?php print($row->Requested_Time);?></td>
                                <td>
                               <a onClick="Link('internal_loading','StoresControl.php?Sent&id=<?php print($row->ID);?>');" href="#" title="send to <?php print($row->ID); ?>">
                                   <input type="button" value="Sent" <?php if($row->Status=="Sent"){?>class="btn btn-success btn-xs"<?php ;} else { ?>class="btn btn-primary btn-xs"<?php } ?> >
                                 </a>     
                                    
                                    <a onClick="Link('internal_loading','StoresControl.php?po&id=<?php print($row->ID);?>');" href="#" <?php print($row->ID); ?>">
                                   <input  type="button" value="POREQ"<?php if($row->Status=="POREQ"){?>class="btn btn-success btn-xs"<?php ;} else { ?>class="btn btn-primary btn-xs"<?php } ?> >
                                 </a>     
                                                                           <a onClick="Link('internal_loading','StoresControl.php?pend&id=<?php print($row->ID);?>');" href="#" title="send to <?php print($row->ID); ?>">
                                   <input  type="button" value="Pending"<?php if($row->Status=="Pending"){?>class="btn btn-success btn-xs"<?php ;} else { ?>class="btn btn-primary btn-xs"<?php } ?> >
                                
                                     </a>  <a onClick="Link('internal_loading','StoresControl.php?Unknown&id=<?php print($row->ID);?>');" href="#" title=" <?php print($row->ID); ?>">
                                   <input  type="button" value="Unknown"<?php if($row->Status=="Wrong_RID"){?>class="btn btn-success btn-xs"<?php ;} else { ?>class="btn btn-primary btn-xs"<?php } ?> >
                                
                                     </a> 
                                    
                                </td>
                                <td><a href="#">Details</a> </td>
                                        
                                </tr>            
                            <?php $count++; }?>
                         

</tbody>
					

  

</table>
        </div></div>
        </div> 
             <!--<div id="internal_loading">-->
                 
           
         <?php include_once '../Header&Footer/Footer.php'  
        ?>
             </div>
             <script>
              var dataString ='Status=' + my();
          $.ajax ({
              
          }
              type:"GET",
              url:"../../Connector/StoreConnector.php",
              data:dataString,
              cache:false,
              success:function(data){
                  alert ("the status of the part is"+data);
                  </script>