<?php include_once '../Header&Footer/Header.php';
  include_once 'FormValidationJs.php';
$i=0;

     
     ?>
 <section id="main-content">
     <section class="wrapper">            
              <div class="col-md-7 col-md-offset-2 col-sm-10 col-xs-12">
                  <?php if (isset($_GET['sucess'])) { ?> <div class="container">
  
  <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You have successfully added RID click <a href="#">here</a> to see
  </div>
                  </div> <?php } if (isset($_GET['$emptyRID'])){ ?>
                <div class="container">
  
  <div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>ERROR!</strong> Please Enter A valid Request ID <a href="#">here</a> to see
                  </div> <?php } ?>
                    
               <div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
    <div class="panel-body"> <form action="../../Connector/StoreConnector.php" method="post">
   <div class="form-group">
       <label>Aircraft</label> 
   <select class="form-control" name="Aircraft" required>
       
       <option value="" disabled selected >Select Aircraft</option>
       <?php $fp= fopen("AircraftList.txt", r);
               while(!feof($fp)){ ?>
       <option> <?php echo fgets($fp);?></option>
               <?php } fclose($fp);?>
       
   </select>
                        </div>
   
   <div class="form-group">
       <label>Request ID </label> <a href="#" id='rid'  title="add RID"><i class='icon_plus'></i>add</a> <div id="RID"></div> <span id="error"></span>
       <input type="text" class="form-control"  id='0' name="RequestID[]" placeholder='Paste RID here'  required  onkeyup="ValidaterForm(0)" style="text-transform: uppercase " ><br>
         <div id="input"></div>
     </div>
   

<input type="hidden" name="Requested_Time" Value="<?php print(date('H:i:s'))?>">
<input type="hidden" name="Date" Value="<?php print(date('d-M-y'))?>">
<input type="hidden" name="Status" value="Pending">
<div class="col-md-offset-5">
<input class="btn btn-primary" id="submit" type="submit" value="Submit" name="Submit">
                    </div>
  </form></div>
    <div class="panel-footer"></div>
  </div>     
                    
                    
                    
                    
                   
                        
              </div>
                   </div>
           </section>
  </section>
<?php include_once '../Header&Footer/footer.php'; ?>
<script>
    var a=0;
$(document).ready(function(){
    $("#rid").click(function(){
            a++;
           $("#input").append('<b><input class="form-control" id='+a+' type="text" placeholder="Paste RID here" name="RequestID[]" required onkeyup="ValidaterForm('+a+')" style="text-transform: uppercase"><br>');
       
    });

    });
</script>
 
        