<?php

include 'head.php';
session_start();



echo'Analisis de las Multas por Radares <mark>(1.5 Puntos)<br><br>
<table>
  <thead>
    <tr>
      <th>Radar 1</th>
      <th>Radar 2</th>
      <th>Radar 3</th>
      <th>Radar 4</th>
    </tr>
  </thead>
  <tbody>';
  foreach($_SESSION['multas'] as $_SESSION['radar'])
        {
            echo'<tr>
                <td>'.$_SESSION['radar'].'</td>
                <td>'.$_SESSION['radar'].'</td>
                <td>'.$_SESSION['radar'].'</td>
                <td>'.$_SESSION['radar'].'</td>
            </tr>';
        }
    //<tr>
    //  <td>10</td>
    //  <td>20</td>
    //  <td>15</td>
    //  <td>67</td>
    //</tr>
    
  echo '</tfoot>
</table>

';
include 'pie.php';

