<?php 
echo "
<script src='jquery.min.js'></script>
<center><h1>Subneteo</h1></center>";
echo "<center>
     <form method='post' id='formContacto1' class='review_form' >
      <table border='0'>
          <tr>
             <td>
                   <label><b>Identificador de red:</b></label>
            </td>
             <td>    
                   <input type='text'  name='oct1' style='height: 16; width: 30;' max='223' min='0' required >.
                   <input type='text'  name='oct2' style='height: 16; width: 30;' max='255' min='0' required >.
                   <input type='text'  name='oct3' style='height: 16; width: 30;' max='255' min='0' required >.
                   <input type='text'  name='oct4' style='height: 16; width: 30;' max='255' min='0' required > 
                   <label><b>/</b></label> 
                   <input type='text'  name='pre' style='height: 16; width: 30;'  max='30' min='8' required >
              </td>

      
             <td>  <button id='boton1' type='submit' class='review_form_button'>Crear</button> </td>
      </form>
             <td>
                  <label><b>Host:</b></label>
                  <input type='text'  name='' style='height: 16; width: 30;' >
                  <input type='text'  name='' style='height: 16; width: 30;' >
                  <input type='text'  name='' style='height: 16; width: 30;' >
                  <input type='text'  name='' style='height: 16; width: 30;' > 
             </td>
             <td> </td>
             <td>
                 <label><b>Subnet:</b></label>
                 <input type='text'  name='' style='height: 16; width: 30;' >
             </td>
          </tr>
          <tr>
             <td>
                  
                    
             </td>
             <td>
                    
                  
             </td>
             <td>
                  <label><b>n</b></label> 
             </td>
             <td> 
                ip id subnet
             </td>
             <td>
                 <label><b>n</b></label>
             </td>
             <td>
                ip id subnet
             </td>
          </tr>
           <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td>
                 ip id broadcast
             </td>
             <td> </td>
             <td>
                 ip id broadcast
              </td>
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
          </tr>
          <tr>
             <td> 
                  
                  <div id='mostrardatos1'>
                  </div>
             </td>
             
          </tr>
          <tr>
             
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td>
                  <label><b>Rangos de subredes</b></label>
             </td>
             <td> </td>
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> 
                 <label><b>0</b></label>
             </td>
             <td> 
                 ip id subnet
             </td>
             <td> </td>
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> 
                ip id broadcast
             </td>
             <td> </td>
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
          </tr>
           <tr>
             <td> </td>
             <td> </td>
             <td> 
                 <label><b>n</b></label>
             </td>
             <td> 
                 ip id subnet
             </td>
             <td> </td>
          </tr>
          <tr>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> 
                ip id broadcast
             </td>
             <td> </td>
          </tr>
          <tr>
             <td>
                 
             </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
          </tr>
          <tr>
             <td>
                  Todos los rangos de las subredes
             </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
          </tr>

     </table>

     

     </center>";


?>
<script>  
 $('#formContacto1').submit(function(e) {
    event.preventDefault();
    document.getElementById('boton1').style.display='none';
  $.ajax(
  {
    type:"post",
    url:'form1.php',
    data:$( '#formContacto1').serialize(),
    success:function(datos){
      $("#mostrardatos1").html(datos);
      document.getElementById('boton1').style.display='block';
    
    }
  });
});  
</script> 