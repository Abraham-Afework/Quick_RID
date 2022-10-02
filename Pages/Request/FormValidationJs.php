<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script>
        function ValidaterForm(a)
    
    {
       var rid= document.getElementById(a).value;
       var RidREGX=/[^a-zA-Z0-9\s]/;
       var result=RidREGX.test(rid);
        if(result === true)
         {  
             var row=a+1;
              var error='*****Please Insert Correct Request ID on the ' + row +' Row *****';
                document.getElementById("error").innerHTML=error;
               document.getElementById("submit").disabled=true;
//               document.getElementById(row).disabled=true;//this disables the submit button while the password mismatches 

        
         
         }
           else
         {
             
        document.getElementById("error").innerHTML="";
        document.getElementById("submit").disabled=false;//this disables the submit button while the password mismatches 
//        document.getElementById(row).disabled=false;//this disables the submit button while the password mismatches 

        
         
         }       
        
    }
    
    
    
    
    
    function myPasswordAlert(){

        var passOne= window.formName.Password.value;
   
      var passTwo= window.formName.CPassword.value;
      if (passOne==passTwo)
      {
      	document.getElementById("passcheck").innerHTML="<b> <font color=\"green\">**Password match***</font> </b>"
        document.getElementById("submit").disabled=false;//this enables the submit button while the password matches 

}
else
{
	document.getElementById("passcheck").innerHTML="<b> <font color=\"red\">**Password does not match</font> </b>"
        document.getElementById("submit").disabled=true;//this disables the submit button while the password mismatches 
 }
}
</script>