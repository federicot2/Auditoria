
<?php

session_start();
include 'library/config.php';
include 'library/opendb.php';
?>

<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<form method="post">
  Team Name: 
  <input type="radio" name="team" value="si">Yappa/All Teams
  <input type="radio" name="team" value="no">Todo
  		<br><br>
  		<input type="submit" name="submit" value="Enviar">
  </form>

<script language="javascript" type="text/javascript">


</script>
</head>


<h1>YAPPABUSINESS:</h1>
<br>
<button type="button" onclick="verTABLA1()">Tabla DATA1 (GLORIA)</button>
<br>
<a href="index.php"> regresar al inicio</a>
<br>
<div class="row">
<div class="column">
<?php
include('conect.php');
echo "<div id=\"tabla1\"   >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  

    $sql = "SELECT orderid, type, deliveryfee, subtotal, total, paymentmethod, confirmeddate, deliveryfeetax FROM gloria";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["orderid"]. "</td><td>" . $row["type"]. "</td><td>" . $row["deliveryfee"]. "</td><td>" . $row["subtotal"]. "</td><td>" . $row["total"]. "</td><td>". $row["paymentmethod"]. "</td><td>" . $row["confirmeddate"]. "</td><td>" . $row["deliveryfeetax"]. "</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
  
echo "</table></div></div>";    
?>

<div class="column">
<?php
include('conect.php');
echo "<div id=\"tabla1\"   >";  
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  

    /*$sql = "SELECT taskid, orderid, relationship, teamname, tasktype, notes, agentid, agentname, distance, totaltimetaken, pickupfrom, customername, customeraddress, customerphone, customeremail, startbefore, completebefore, completiontime FROM tookan";*/
    $sql = "SELECT taskid, orderid, relationship, teamname, tasktype, notes, agentid, agentname, distance, totaltimetaken, pickupfrom, customername, customeraddress, customerphone, customeremail, startbefore, completebefore, completiontime ,earning FROM tookan ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
         while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["taskid"]. "</td><td>" . $row["orderid"]. "</td><td>" . $row["relationship"]. "</td><td>" . $row["teamname"]. "</td><td>" . $row["tasktype"]. "</td><td>". $row["notes"]. "</td><td>" . $row["agentid"]. "</td><td>" . $row["agentname"]. "</td><td>" . $row["distance"]. "</td><td>" . $row["totaltimetaken"]. "</td><td>". $row["pickupfrom"]. "</td><td>"  . $row["customername"]. "</td><td>" . $row["customeraddress"]. "</td><td>" . $row["customerphone"]. "</td><td>". $row["customeremail"]. "</td><td>" . $row["startbefore"]. "</td><td>" . $row["completebefore"]. "</td><td>". $row["completiontime"]. "</td><td>" . $row["earning"]. "</td>" ;
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
echo "</table></div></div></div>";    
?>
