<?php 

     $consulta = "SELECT grupo from list;";
                
     $resultado = $conexion->query($consulta);
    
    
    //echo '<table  class="table table-hover" border="0" cellspacing="1" cellpadding="45"> 
    //  <tr> 
      
    //      <td>  <font color = "#ffffff"> <font face="Arial"></font></font> </td> 
    //      <td  font color = "#000000">  <font face="Arial"></font> </td> 
          
    //  </tr>';

    
        
    echo '<table class="table table-hover" border="0" cellspacing="1" cellpadding="45" > ';

        if ($resultado) {
            while ($row = $resultado->fetch_assoc()) {
                $field1name = $row["grupo"];
                //$field2name = $row["col2"];

                echo '<tr> 
                
                          <td><font color = "#ffffff"> <font face="Arial"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$field1name.'</font></font></td> 
                          <td>
                          <a href="regasistencia.php">
                            <input name="asistencia" id="asistencia" class="btn btn-outline-danger"  type="submit" style=" padding: 3px 7px" value="Iniciar asistencia">
                          </a>
                          </td>
                          
                      </tr>';
                
            }
            
            $resultado->free();
            
            
        } else {
            
          echo ' <img style="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-fwa4b1WDMhxFahTql1-zzsw_xqRFqbOlkA&usqp=CAU"> ';
            
        }

         
?>
