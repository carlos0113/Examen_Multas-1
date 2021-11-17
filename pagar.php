<?php

include 'head.php';
session_start();
$codigo=0;

if(isset($_REQUEST['pagar']))
{
  $matricula=$_REQUEST['matricula'];
  $fecha_hora=$_REQUEST['fecha_hora'];

  $codigo=$matricula.' '.$fecha_hora;
  //como el valor que tenemos que cambiar es pagada, sustituimos el valor de pagado:
  $reemplazo=array('pagada' => "SI");
  
  $_SESSION['multas'][$codigo]=array_replace($_SESSION['multas'][$codigo], $reemplazo);
//var_dump($_SESSION['multas']);
}

echo' 
Introduce los datos de la Multa a Pagar <mark>(1.5 Puntos)<br><br>
                         
<div   class="postcontent"><form action="pagar.php" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
  <td align="right">
  <strong>Matricula :</strong></td><td>
  <div align="left">
        <input type="text" name="matricula" size="10"/>
  </div>
  </td>
  </tr>
  <tr>
    <td align="right"><strong>Fecha y Hora :</strong></td>
     <td>
        <input  type="datetime-local" name="fecha_hora" size="20" required />
     </td>
  </tr>
  
 <tr>
  <td colspan="2">
    <div align="center">
       <input name="pagar" type="submit"  value="Pagar Multa"/>
    </div>
  </td>
</tr>
</table>
</form>
</div>';              
include 'pie.php';
