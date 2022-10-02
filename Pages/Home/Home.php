<?php include_once '../Header&Footer/Header.php';
include_once './GeneralInfo.php';?>

<script type="text/javascript">
    function display_time()
    { var refresh=1000;
        mytime=setTimeout('display_ct()',refresh) 
    }
 function display_ct()
 {var x = new Date()
     
     document.getElementById('ct').innerHTML=x;
     display_time();
 }
     </script>
<section id="main-content" onload=display_ct();>
          <section class="wrapper">            
              
                                 
             <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count"><?php echo $TotalRequst?></div>
						<div class="title">Request</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box linkedin-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count"><?php echo $Sent?></div>
						<div class="title">Delivery</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count"><?php echo $Pending?></div>
						<div class="title">Pending</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box red-bg">
						<i class="fa fa-cubes"></i>
						<div class="count"><?php echo $Poreq?></div>
						<div class="title">POREQ</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div>
              <div class="container col-md-offset-2">
  <div class='row'>
    <h2><span id='ct'></span></h2>
  </div>
              </div>
               
          </section>
   
      </section>

</section>
<?php include_once '../Header&Footer/Footer.php';
