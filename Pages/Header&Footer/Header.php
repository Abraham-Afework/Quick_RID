<?php session_start();


If(!isset($_SESSION['User_Name'])&&!isset($_SESSION['Account_ID']))
  {
    $msg="Please log in ";
    header('Location:../../');
       }
       include_once '../../Class/DBConnection.php';
       $sql_request="SELECT * FROM `part_request` ORDER BY ID";
         $req= new DBConnection();
                            $result=$req->executeQuery($sql_request);
                            $counter= mysqli_num_rows($result);
                            $_SESSION['count']=$counter;
     ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Payment Managment Sys">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Some school to work ">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Quick RID</title>

    <!-- Bootstrap CSS -->    
    <link href="../../Assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../Assets/js/ajax.js"></script>
    <!-- bootstrap theme -->
    <link href="../../Assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../../Assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../../Assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="../../Assets/css/style.css" rel="stylesheet">
    <link href="../../Assets/css/style-responsive.css" rel="stylesheet" />
    <link href="../../Assets/css/w3.css" rel="stylesheet" />

    </head>
    <div id="internal_loading">
  <body onload=display_ct();>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Quick <span class="lite">RID</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                                      
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="../../Assets/img/active_user.png">
                            </span>
                             <?php if($_SESSION['Account_Type']=="Stores"){ ?>
                            <span class="username">Store Clerk</span> 
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Change Password</a>
                            </li>
                         <li >
                                    <a href="../Logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li></ul>
                             <?php } else { ?> 
                            <span class="username">User</span> 
                            <b class="caret"></b>
                           
                             <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           <li >
                                    <a href="../Logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li> </ul>
                             <?php } ?>
                            
                               </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="../Home/Home.Php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="../Request/RequestForm.php" class="">
                          <i class="icon_question"></i>
                          <span>Request Form</span>
                         </a>
                      
                  </li> 
                  <li class="sub-menu">
                      <a href="../Request/RequestList.php?counter=0" class="">
                          <i class="icon_table"></i>
                          Request List <sup><span class="badge"><?php if(@$_GET['counter']==0){echo $counter; } ?></span></sup>
                      </a>
                      
                  </li> 
                      <?php if($_SESSION['Account_Type']=="Stores"){ ?>
                        <li class="sub-menu">
                            <a href="../Request/StoresControl.php" class="">
                          <i class="icon_globe"></i>
                          <span>Stores Control</span>
                      </a>
                            
                      
                      </li>
                            <li class="sub-menu">
                      <a href="#" class="">
                          <i class="icon_calendar"></i>
                          <span>History</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="../Payment/Payment.php">Yesterday</a></li>
                          <li><a class="" href="../Payment/SchoolFee.php">Delivery Report</a></li>
                          <li><a class="" href="../Payment/PaymentStatus.php">Part </a></li>
                         
                      </ul>
                  </li>  <?php } ?>                       
                  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
     