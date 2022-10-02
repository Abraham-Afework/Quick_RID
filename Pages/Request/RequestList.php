<?php include_once 'DBConnection.php'; 
                            $count=1;
                            $sql_request="SELECT * FROM `request` ORDER BY ID";
                            $req= new DBConnection();
                            $result=$req->executeQuery($sql_request);
                            $counter= mysqli_num_rows($result);
/* 
Template Name: RequestList */
 get_header(); 

 ?>


 <section id="main-content">
     
     <section class="wrapper"> 
              
         <div class="col-md-10 col-md-offset-1 col-sm-6 col-xs-12">
             <!--<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">-->

           <div class="panel panel-warning">
        <div class="panel-heading" style="padding:5px;">
            Part Request List rows: <select name="row"><option><?php echo $counter ?></option><option>30</option>   </select>
                                                       
          <div class="navbar-right">
                <input class="form-control input-success"   id="myInput" onkeyup="myFunction()" placeholder="Search for RID..">

           </div>
        </div>
    
<div class="table-responsive ">
    <div id="print_div">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>N<u>o</ul></</th>
                            <th>Name </th>
                            <th>Department</th>
                            <th>Requested Issue</th>
                             <th>Status</th>
                             <!--<th>Details</th>-->
                             
		     </tr>
                    </thead>                    


			  <tbody>
                              <?php
                               while ($row = mysqli_fetch_object($result)) { ?>
                              <tr>
                                <td><?php print($count);?></td>
                                <td><?php print($row->Name);?></td>
                                <td><?php print($row->Dpt.'   </a> </B>');?></td>
                                <td><?php print($row->Issue);?></td>
                                <td><?php print($count)?></td>
                                <!--<td><a href="#">Details</a> </td>-->
                              </tr>            
                            <?php $count++; }?>
                         

</tbody>
					



</table>
        </div></div>
        </div>       
              <?php include_once '../Header&Footer/Footer.php'
        ?>
              <script>

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td,td1, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
       if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>