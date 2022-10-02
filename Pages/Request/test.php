<script> 
    var a=0;
    function dynamicID(){
           
           a++;
//                            doucument.getElementById("here").innerHTML=a;
                              document.getElementById("here").innerHTML=a;
                        
    }
                             </script>
                             <input type="submit" name='add' onclick="dynamicID()">
                             <span id="here"></span>