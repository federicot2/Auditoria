<style>
      a:link, a:visited {
         background-color: #dadada;
         color: black;
         border: 2px solid yellow;
         padding: 10px 20px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
      }

      a:hover, a:active {
         background-color: #FFCC00;
         color: white;   
      }
</style>
<a href="index.php">Regresar al inicio</a>
<a href="cargaBASEgloria.php">Cargar base de datos</a>
<?php
$csv = array_map('str_getcsv', file('uploads/data2.csv'));
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
    foreach ($csv as $key => $value) {
         echo "<tr>";
         //echo $key." has the value". $value;
         foreach ($value as $llave => $valor) 
            { 
                 //echo "<td> ".$llave." : ". $valor."</td> ";
                 //if( $llave < 48 || $llave > 69)
                 if($llave!=7)
                    echo "<td> ". $valor."</td> ";
            }
         echo "</tr>";
    }
echo "</table>";



?>