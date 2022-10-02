 <div class="form-group">
                                                 <label>Current Password</label>
                    <input class="form-control" type="Password" name="Password" id="Password" onkeyup="formValidation()"
                          <?php if(isset($_GET['password'])){ echo "Value=".$_GET['password'];}?> >
                </div>
               <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="Password" name="Password" id="Password" required >
                </div>     
                                               <div class="form-group">
                    <label>Confirm Password </label><span id="passcheck"></span>
                    <input class="form-control" type="Password" name="ConfirmPassword"  id="conf" onkeyup="myPasswordAlert()" required>
         </div>

                  <input type="submit"  class="btn btn-danger" value="Change">