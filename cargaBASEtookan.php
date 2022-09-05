<a href="index.php"> regresar al inicio</a>
<?php
/*
include('conect.php');
$csv = array_map('str_getcsv', file('uploads/data.csv'));
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
$cont_tabla = 0;
$relacion_fin = 0;
$cuenta_restaurantes = 0;

foreach ($csv as $key => $value) {
    $relacion_ini = $value[2];
    if ($relacion_ini != $relacion_fin   ||  $cont_tabla == 0) {
        if ($value[1] != "-" ||  $cont_tabla == 0) {
            if($value[3] != "Rapidito" && $value[3] != "Penonome"){
                $cont_tabla++;
                echo "<tr>";
                foreach ($value as $llave => $valor) {
                    if ($llave < 48 || $llave > 69) {
                        if ($llave == 10 && $cont_tabla != 1) {

                            echo "<td> " . $valor . "    </td> ";
                        } else {
                            echo "<td> " . $valor . "    </td> ";
                        }
                    }
                }
            }
            /*$date = date_create($value[15]);
            $datetimestartbefore = date_format($date, "Y-m-d H:i:s");
            $date = date_create($value[16]);
            $datetimecompletebefore = date_format($date, "Y-m-d H:i:s");
            $date = date_create($value[17]);
            $datetimecompletiontime = date_format($date, "Y-m-d H:i:s");*/
            /*$sql = "INSERT INTO tookan (taskid, orderid, relationship, teamname, tasktype, notes, agentid, agentname, distance, totaltimetaken, pickupfrom, customername, customeraddress, customerphone, customeremail, startbefore, completebefore, completiontime, taskstatus, refimages, rating, review, latitude ) VALUES ('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]', '$value[5]', '$value[6]', '$value[7]', '$value[8]', '$value[9]','$value[10]', '$value[11]', '$value[12]', '$value[13]', '$value[14]', '$datetimestartbefore', '$datetimecompletebefore', '$datetimecompletiontime', '$value[18]', '$value[19]', '$value[20]', '$value[21]', '$value[22]')";*/

            /*$sql = "INSERT INTO tookan (taskid, orderid) VALUES ('$value[0]', '$value[1]')";*/
            /*$sql ="DELETE FROM tookan";*/
            /*$sql = "INSERT INTO tookan(taskid, orderid, relationship) VALUES ('$value[0]', '$value[1]', '$value[2]')";*/
            /*$sql = "INSERT INTO tookan(taskid,orderid, relationship, teamname, tasktype, notes, agentid,Agentname, Distance,totaltimetaken,pickupfrom, customername, customeraddress,customerphone,customeremail,startbefore, completebefore, completiontime, taskstatus,refimages, rating, review, latitude, longitude, tags, promoapplied, customtemplateid, totalprice, instructions, payment, restaurantphone, restaurantaddress, deliveryfee, itemsid, itemsname, itemsquantity, itemsprice, itemstaxrate, itemstaxvalue, itemsitemdiscount, itemstotalitemprice, itemsinstructions, itemsitemoptions,earning, pricing) VALUES ('$value[0]','$value[1]','$value[2]','$value[3]','$value[4]','$value[5]','$value[6]','$value[7]','$value[8]','$value[9]','$value[10]','$value[11]','$value[12]','$value[13]','$value[14]','$value[15]','$value[16]','$value[17]','$value[18]','$value[19]','$value[20]','$value[21]','$value[22]','$value[23]','$value[24]','$value[25]','$value[26]','$value[27]','$value[33]','$value[34]','$value[35]','$value[36]','$value[37]','$value[38]','$value[39]','$value[40]','$value[41]','$value[42]','$value[43]','$value[44]','$value[45]','$value[46]','$value[47]','$value[48]','$value[49]')";*/ 
            /*if($conn->query($sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            /*$date = date_create($value[15]);
            echo date_format($date, "Y-m-d H:i:s");
            echo "<br>";
            echo "</tr>";
        }*/
        /*$relacion_fin = $relacion_ini;
    }
}
*/
?>

<?php

include 'library/config.php';
include 'library/opendb.php';
?>


<script language="javascript" type="text/javascript">

function verTABLA1() {
		 var x = document.getElementById("tabla1");
		 if (x.style.display === "none") {
				x.style.display = "block";
	     } else {
		x.style.display = "none";
		}
}

function verTABLA2() {
		 var x = document.getElementById("tabla2");
		 if (x.style.display === "none") {
				x.style.display = "block";
	     } else {
		x.style.display = "none";
		}
}

function verTABLA3() {
		 var x = document.getElementById("tabla3");
		 if (x.style.display === "none") {
				x.style.display = "block";
	     } else {
		x.style.display = "none";
		}
}

function verTABLA4() {
		 var x = document.getElementById("tabla4");
		 if (x.style.display === "none") {
				x.style.display = "block";
	     } else {
		x.style.display = "none";
		}
}

function verTABLA5() {
		 var x = document.getElementById("tabla5");
		 if (x.style.display === "none") {
				x.style.display = "block";
	     } else {
		x.style.display = "none";
		}
}

function verTABLA6() {
		 var x = document.getElementById("tabla6");
		 if (x.style.display === "none") {
				x.style.display = "block";
	     } else {
		x.style.display = "none";
		}
}


</script>
<h1>SISTEMA DE TABLAS:</h1>
<br>
<br>
<a href="index.php"> regresar al inicio</a>
<br>
<br><br>
<button type="button" onclick="verTABLA6()">Todas Juntas</button>
<?php
include('conect.php');
$csv = array_map('str_getcsv', file('uploads/data.csv'));
//print_r($csv);
echo "<div id=\"tabla1\"   style=\"display:none;\" >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
    foreach ($csv as $key => $value) {
         echo "<tr>";
         //echo $key." has the value". $value;
         foreach ($value as $llave => $valor) 
            { 
                 //echo "<td> ".$llave." : ". $valor."</td> ";
                 if( $llave < 48 || $llave > 69)
                    echo "<td> ". $valor."</td> ";
            }
         echo "</tr>";
         //echo "<br>";
    }
echo "</table></div>";    

// PEDIDOS DEL INTERIOR  /*--------------------------------------------------------------

// ESTE RECORRIDO ES PARA PONER LOS RESTAURANTES:
  $restaurantes = array();
  $cont_tabla =0;
  $relacion_fin=0;
   foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         if($value[3] != "Yappa"){
                 if($relacion_ini != $relacion_fin   ||  $cont_tabla ==0){
                     if($value[1] == "-" ||  $cont_tabla ==0){
                         $cont_tabla++;
                         //echo "<br>";
                        foreach ($value as $llave => $valor) 
                        { 
                                 if( $llave ==10){
                                 //   echo "<td> ". $valor."    </td> ";
                                 }
                        }
                        //echo "<br>";
                     }
                     $relacion_fin= $relacion_ini;
                 }
                 else{
                     
                     if($value[1] == "-" ||  $cont_tabla ==0){
                         $cont_tabla++;
                         //echo "<br>";
                        foreach ($value as $llave => $valor) 
                        { 
                                 if( $llave ==10){
                                    array_push($restaurantes,$valor); 
                                   // echo "<td> ". $valor."    </td> ";
                                 }
                        }
                        //echo "<br>";
                     }
                     $relacion_fin= $relacion_ini;
                     
                 }
         }
    }

echo "<div id=\"tabla2\"    style=\"display:none;\"  >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
/*
    foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         if(  ($relacion_ini != $relacion_fin   ||  $cont_tabla ==0) &&  ($value[3] != "Yappa") ){
             if($value[1] == "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                 echo "<tr>";
                foreach ($value as $llave => $valor) 
                { 
                          if( $llave < 48 || $llave > 69){
                             if($llave==10 && $cont_tabla!=1){
                                 echo "<td> ". $restaurantes[$cont_tabla-2]."    </td> ";
                             }
                             else{
                                 echo "<td> ". $valor."    </td> ";
                             }
                         }
                }
                echo "</tr>";
             }
             $relacion_fin= $relacion_ini;
         }
    }
*/

    foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         //Filtramos para sacar solo del interior
         if(  ($relacion_ini != $relacion_fin   ||  $cont_tabla ==0) &&  ($value[3] != "Yappa") ){
             if($value[3] != "Yappa"){
                 echo "<tr>";
                foreach ($value as $llave => $valor) 
                { 
                          if( $llave < 48 || $llave > 69){
                            echo "<td> ". $valor."</td> ";
                         }
                }
                echo "</tr>";
             }
             $relacion_fin=$relacion_ini;
         }
    }
    
echo "</table></div>";    

// PEDIDOS DEL INTERIOR  /*--------------------------------------------------------------


// PEDIDOS DEL ORDENES MANUALES SIn FILTRO  /*--------------------------------------------------------------


echo "<div id=\"tabla3\"    style=\"display:none;\"  >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
$cont_tabla =0;
    foreach ($csv as $key => $value) {
         
         //Tabla sin ORDER ID
         if($value[1] == "-" ||  $cont_tabla ==0){
             $cont_tabla++;
             echo "<tr>";
            foreach ($value as $llave => $valor) 
            { 
          //       if($llave == 3 && ($valor == "RAPIDITO" || $valor == "PENONOME" )){
                      if( $llave < 48 || $llave > 69){
                        //echo "<td> ".$llave." : ". $valor."</td> "; 
                        echo "<td> ". $valor."</td> ";
                     }
         //        }
            }
            echo "</tr>";
         }
         //echo "<br>";
    }
echo "</table></div>";    
// PEDIDOS DEL ORDENES MANUALES SIN FILTRO  /*--------------------------------------------------------------


// PEDIDOS DEL ORDENES MANUALES CON FILTRO RELATION  Y EL PICKUP ORDER  FILTRO  /*--------------------------------------------------------------
// ESTE RECORRIDO ES PARA PONER LOS RESTAURANTES:
//  $restaurantes = array();
  $cont_tabla =0;
  $relacion_fin=0;
   foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];

         if($relacion_ini != $relacion_fin   ||  $cont_tabla ==0){
             if($value[1] == "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                 //echo "<br>";
                foreach ($value as $llave => $valor) 
                { 
                         if( $llave ==10){
                         //   echo "<td> ". $valor."    </td> ";
                         }
                }
                //echo "<br>";
             }
             $relacion_fin= $relacion_ini;
         }
         else{
             
             if($value[1] == "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                 //echo "<br>";
                foreach ($value as $llave => $valor) 
                { 
                         if( $llave ==10){
                            array_push($restaurantes,$valor); 
                           // echo "<td> ". $valor."    </td> ";
                         }
                }
                //echo "<br>";
             }
             $relacion_fin= $relacion_ini;
             
         }
    }




echo "<div id=\"tabla4\"   style=\"display:none;\"   >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
$cont_tabla =0;
$relacion_fin=0;
$cuenta_restaurantes=0;

   


    foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         if($relacion_ini != $relacion_fin   ||  $cont_tabla ==0){
             if($value[1] == "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                 echo "<tr>";
                foreach ($value as $llave => $valor) 
                { 
                          if( $llave < 48 || $llave > 69){
                             if($llave==10 && $cont_tabla!=1){
                                 echo "<td> ". $restaurantes[$cont_tabla-2]."    </td> ";
                             }
                             else{
                                 echo "<td> ". $valor."    </td> ";
                             }
                         }
                }
                echo "</tr>";
             }
             $relacion_fin= $relacion_ini;
         }
    }
    
echo "</table></div>";    

// PEDIDOS DEL ORDENES MANUALES CON FILTRO RELATION  Y EL PICKUP ORDER  FILTRO  /*--------------------------------------------------------------




// PEDIDOS DEL ORDENES MANUALES  Y REGULARES CON FILTRO RELATION  Y EL PICKUP ORDER  FILTRO  /*--------------------------------------------------------------
// ESTE RECORRIDO ES PARA PONER LOS RESTAURANTES:
  $restaurantes_tabla5 = array();
  $cont_tabla =0;
  $relacion_fin=0;
   foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];

         if($relacion_ini != $relacion_fin   ||  $cont_tabla ==0){
             if($value[1] != "-" ||  $cont_tabla ==0){
                $cont_tabla++;
                foreach ($value as $llave => $valor) 
                { 
                         if( $llave ==10){
                         }
                }
             }
             $relacion_fin= $relacion_ini;
         }
         else{
             
             if($value[1] != "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                foreach ($value as $llave => $valor) 
                { 
                         if( $llave ==10){
                            array_push($restaurantes_tabla5,$valor); 
                         }
                }
             }
             $relacion_fin= $relacion_ini;
             
         }
    }




echo "<div id=\"tabla5\"   style=\"display:none;\"   >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
$cont_tabla =0;
$relacion_fin=0;
$cuenta_restaurantes=0;

   


    foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         if($relacion_ini != $relacion_fin   ||  $cont_tabla ==0){
             if($value[1] != "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                 echo "<tr>";
                foreach ($value as $llave => $valor) 
                { 
                          if( $llave < 48 || $llave > 69){
                             if($llave==10 && $cont_tabla!=1){
                                 
                                 //echo "<td> ". $restaurantes_tabla5[$cont_tabla-2]."    </td> ";
                                 echo "<td> ". $valor."    </td> ";
                             }
                             else{
                                 echo "<td> ". $valor."    </td> ";
                             }
                         }
                }
                echo "</tr>";
             }
             $relacion_fin= $relacion_ini;
         }
    }
    
echo "</table></div>";    

// PEDIDOS DEL ORDENES MANUALES CON FILTRO RELATION  Y EL PICKUP ORDER  FILTRO  /*--------------------------------------------------------------

// TABLA COMPLETA  /*--------------------------------------------------------------

echo "<div id=\"tabla6\"   style=\"display:none;\"   >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
$cont_tabla =0;
$relacion_fin=0;
$cuenta_restaurantes=0;

   


    foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         if($relacion_ini != $relacion_fin   ||  $cont_tabla ==0){
             if($value[1] != "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                 echo "<tr>";
                foreach ($value as $llave => $valor) 
                { 
                          if( $llave < 48 || $llave > 69){
                             if($llave==10 && $cont_tabla!=1){

                                 echo "<td> ". $valor."    </td> ";
                             }
                             else{
                                 echo "<td> ". $valor."    </td> ";
                             }
                         }
                }
                $date=date_create($value[15]);
                $datetimestartbefore = date_format($date,"Y-m-d H:i:s");
                $date=date_create($value[16]);
                $datetimecompletebefore = date_format($date,"Y-m-d H:i:s");
                $date=date_create($value[17]);
                $datetimecompletiontime = date_format($date,"Y-m-d H:i:s");
                $rest=$value[5];
                $rest=preg_replace('/[^\w\d]/',' ',$rest);
                $team=$value[3];
                $team=preg_replace('/[^\w\d]/',' ',$team);
                $address=$value[12];
                $address=preg_replace('/[^\w\d]/',' ',$address);


                //$sql = "INSERT INTO tookan (taskid, orderid, relationship, teamname, tasktype, notes, agentid, agentname, distance, totaltimetaken, pickupfrom, customername, customeraddress, customerphone, customeremail, startbefore, completebefore, completiontime, taskstatus, refimages, rating, review, latitude ) VALUES ('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]', '$value[5]', '$value[6]', '$value[7]', '$value[8]', '$value[9]','$value[10]', '$value[11]', '$value[12]', '$value[13]', '$value[14]', '$datetimestartbefore', '$datetimecompletebefore', '$datetimecompletiontime', '$value[18]', '$value[19]', '$value[20]', '$value[21]', '$value[22]')";
                /*$sql ="DELETE FROM tookan";*/
                $sql = "INSERT INTO tookan (taskid, orderid, relationship, teamname, tasktype, notes, agentid, agentname, distance, totaltimetaken, pickupfrom, customername, customeraddress, customerphone, customeremail, startbefore, completebefore, completiontime, taskstatus, refimages, rating, review, latitude, longitude, tags, promoapplied, customtemplateid, totalprice, restaurantname, clientname, phoneno, clientaddress, instructions, payment, restaurantphone, restaurantaddress, deliveryfee, itemsid, itemsname, itemsquantity, itemsprice, itemstaxrate, itemstaxvalue, itemsitemdiscount, itemstotalitemprice, itemsinstructions, itemsitemoptions, earning, pricing   ) VALUES ('$value[0]', '$value[1]', '$value[2]', '$team', '$value[4]', '$rest', '$value[6]', '$value[7]', '$value[8]', '$value[9]','$value[10]', '$value[11]', '$address', '$value[13]', '$value[14]', '$datetimestartbefore', '$datetimecompletebefore', '$datetimecompletiontime', '$value[18]', '$value[19]', '$value[20]', '$value[21]', '$value[22]', '$value[23]', '$value[24]', '$value[25]', '$value[26]', '$value[28]' , '$value[29]', '$value[30]', '$value[31]', '$value[32]', '$value[33]' , '$value[34]', '$value[35]', '$value[36]', '$value[37]', '$value[38]' , '$value[39]', '$value[40]', '$value[41]', '$value[42]', '$value[43]', '$value[44]', '$value[45]', '$value[46]', '$value[47]', '$value[93]', '$value[94]')";
                
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $date=date_create($value[15]);
                echo date_format($date,"Y-m-d H:i:s");
                echo "<br>";
                echo "</tr>";
             }
             $relacion_fin= $relacion_ini;
         }
    }
    
    $cont_tabla =0;
    $relacion_fin=0;
    $cuenta_restaurantes=0;
    
    foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         if($relacion_ini != $relacion_fin   ||  $cont_tabla ==0){
             if($value[1] == "-" ||  $cont_tabla ==0){
                 $cont_tabla++;
                 echo "<tr>";
                foreach ($value as $llave => $valor) 
                { 
                          if( $llave < 48 || $llave > 69){
                             if($llave==10 && $cont_tabla!=1){
                                 echo "<td> ". $restaurantes[$cont_tabla-2]."    </td> ";
                             }
                             else{
                                 echo "<td> ". $valor."    </td> ";
                             }
                         }
                }
                $rest=$value[5];
                $rest=preg_replace('/[^\w\d]/',' ',$rest);
                $team=$value[3];
                $team=preg_replace('/[^\w\d]/',' ',$team);
                $address=$value[12];
                $address=preg_replace('/[^\w\d]/',' ',$address);
                $sql = "INSERT INTO tookan (taskid, orderid, relationship, teamname, tasktype, notes, agentid, agentname, distance, totaltimetaken, pickupfrom, customername, customeraddress, customerphone, customeremail, startbefore, completebefore, completiontime, taskstatus, refimages, rating, review, latitude, longitude, tags, promoapplied, customtemplateid, totalprice, restaurantname, clientname, phoneno, clientaddress, instructions, payment, restaurantphone, restaurantaddress, deliveryfee, itemsid, itemsname, itemsquantity, itemsprice, itemstaxrate, itemstaxvalue, itemsitemdiscount, itemstotalitemprice, itemsinstructions, itemsitemoptions, earning, pricing   ) VALUES ('$value[0]', '$value[1]', '$value[2]', '$team', '$value[4]', '$rest', '$value[6]', '$value[7]', '$value[8]', '$value[9]','$value[10]', '$value[11]', '$address', '$value[13]', '$value[14]', '$datetimestartbefore', '$datetimecompletebefore', '$datetimecompletiontime', '$value[18]', '$value[19]', '$value[20]', '$value[21]', '$value[22]', '$value[23]', '$value[24]', '$value[25]', '$value[26]', '$value[28]' , '$value[29]', '$value[30]', '$value[31]', '$value[32]', '$value[33]' , '$value[34]', '$value[35]', '$value[36]', '$value[37]', '$value[38]' , '$value[39]', '$value[40]', '$value[41]', '$value[42]', '$value[43]', '$value[44]', '$value[45]', '$value[46]', '$value[47]', '$value[93]', '$value[94]')";
              
                //$sql = "INSERT INTO tookan (taskid, orderid, relationship, teamname, tasktype) VALUES ('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
               // mysqli_close($conn);
                echo "</tr>";
             }
             $relacion_fin= $relacion_ini;
         }
    }
    /*
    foreach ($csv as $key => $value) {
         $relacion_ini = $value[2];
         //Filtramos para sacar solo del interior
         if(  ($relacion_ini != $relacion_fin   ||  $cont_tabla ==0) &&  ($value[3] != "Yappa") ){
             if($value[3] != "Yappa"){
                 echo "<tr>";
                foreach ($value as $llave => $valor) 
                { 
                          if( $llave < 48 || $llave > 69){
                            echo "<td> ". $valor."</td> ";
                         }
                }
                
                $sql = "INSERT INTO tookan (taskid, orderid, relationship, teamname, tasktype, notes, agentid, agentname, distance, totaltimetaken, pickupfrom, customername, customeraddress, customerphone, customeremail, startbefore, completebefore, completiontime, taskstatus, refimages, rating, review, latitude, longitude, tags, promoapplied, customtemplateid, totalprice, restaurantname, clientname, phoneno, clientaddress, instructions, payment, restaurantphone, restaurantaddress, deliveryfee, itemsid, itemsname, itemsquantity, itemsprice, itemstaxrate, itemstaxvalue, itemsitemdiscount, itemstotalitemprice, itemsinstructions, itemsitemoptions, earning, pricing   ) VALUES ('$value[0]', '$value[1]', '$value[2]', '$team', '$value[4]', '$rest', '$value[6]', '$value[7]', '$value[8]', '$value[9]','$value[10]', '$value[11]', '$address', '$value[13]', '$value[14]', '$datetimestartbefore', '$datetimecompletebefore', '$datetimecompletiontime', '$value[18]', '$value[19]', '$value[20]', '$value[21]', '$value[22]', '$value[23]', '$value[24]', '$value[25]', '$value[26]', '$value[27]' , '$value[28]', '$value[29]', '$value[30]', '$value[31]', '$value[32]' , '$value[33]', '$value[34]', '$value[35]', '$value[36]', '$value[37]' , '$value[38]', '$value[39]', '$value[40]', '$value[41]', '$value[42]', '$value[43]', '$value[44]', '$value[45]', '$value[46]', '$value[70]', '$value[71]')";
              
                //$sql = "INSERT INTO tookan (taskid, orderid, relationship, teamname, tasktype) VALUES ('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                echo "</tr>";
             }
             $relacion_fin=$relacion_ini;
         }
    }
    */
echo "</table></div>";  


?>
