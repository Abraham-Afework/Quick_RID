<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="Assets/css/bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Quick RID</a>
    </div>
  </nav>
        <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-danger">
  <div class="panel-heading"> Login </div>
  <div class="panel-body">
        <form action="Connector/LoginConnector.php" method="POST">
     <?php if(isset($_GET['usrfailed'])){?>
     <div class="alert alert-warning">
    <strong>Error!! </strong> Wrong User Name or Password.
    </div>
            <?php }  ?>             <div class="col-md-12 col-sm-6">
                                <!--/.col-md-4-->
           <div class="form-group">
      <label for="email">User Name:</label>
      <input type="text" class="form-control" name="UserName" placeholder="Enter User Name" required >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="Password" placeholder="Enter password" required >
    </div>
                                 <hr/>
      <button type="submit" class="col-md-6 col-sm-6 col-sm-offset-3  col-md-offset-3 btn btn-info" name="submit"  value="Login">Submit</button>
                           </div>

                    </form>
      </div>
  </div>
        </div>
    </body>
</html>
