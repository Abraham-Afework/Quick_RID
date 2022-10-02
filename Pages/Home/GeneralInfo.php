<?php 
include_once '../../Class/DBConnection.php';
   $sql_Request="SELECT * FROM `part_request`";
   $sql_Pending="SELECT * FROM `part_request` where Status='Pending'";
   $sql_Sent="SELECT * FROM `part_request` where Status='Sent'";
   $sql_Poreq="SELECT * FROM `part_request` where Status='POREQ'";
    echo $sql_Poreq;
         $req= new DBConnection();
                            $result_Request=$req->executeQuery($sql_Request);
                            $result_Pending=$req->executeQuery($sql_Pending);
                            $result_Sent=$req->executeQuery($sql_Sent);
                            $result_Poreq=$req->executeQuery($sql_Poreq);
                           $TotalRequst=mysqli_num_rows($result_Request );
                           $Pending= mysqli_num_rows($result_Pending);
                           $Sent=mysqli_num_rows($result_Sent);
                           $Poreq=mysqli_num_rows($result_Poreq);
//                            echo "<br> total request".$TotalRequst."<br>"."Pending items". 
//                                    $Pending."<br> sent items".$Sent."<br>".$Poreq;
//                            $row = mysqli_fetch_object($result);
                           
                                    
                              ?>                 
