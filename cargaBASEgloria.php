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
<?php
include('conect.php');
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
            $sql="INSERT INTO gloria( orderid , type , deliveryfee , subtotal,total,paymentmethod,confirmeddate,confirmedtime,deliveryfeetax) VALUES ('$value[0]','$value[1]','$value[2]','$value[3]','$value[4]','$value[5]','$value[6]','$value[7]','$value[8]')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
         echo "</tr>";
    }
echo "</table>";



?>