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
      margin-left: -5px;
      margin-right: -5px;
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

    th,
    td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>

  <script language="javascript" type="text/javascript">


  </script>
</head>


<h1>PROCESSING:</h1>
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

    $sql = "SELECT orderid, taskid, notes, agentname,pickupfrom, customername, earning,taskstatus,distance,agentname,totaltimetaken,totalprice FROM tookan LIMIT 100";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      echo "<tr>";
      while ($row = $result->fetch_assoc()) {

        $sql_1 = "SELECT deliveryfee,confirmeddate, deliveryfeetax FROM gloria WHERE orderid='" . $row["orderid"] . "' LIMIT 10";
        $result_1 = $conn->query($sql_1);
        if ($result_1->num_rows > 0) {
          while ($row_1 = $result_1->fetch_assoc()) {

            echo "<td>" . $row["pickupfrom"] . "</td>";
            echo "<td>" . $row_1["confirmeddate"] . "</td>";
            echo "<td>" . $row["orderid"] . "</td>";
            echo "<td>" . $row["customername"] . "</td>";
            echo "<td>" . $row_1["deliveryfee"] . "$</td>";

            $sql_2 = "SELECT yappafee FROM datacsv WHERE nombre='" . $row["pickupfrom"] . "' AND deliveryfee='" . $row_1["deliveryfee"] . "' LIMIT 10";
            $result_2 = $conn->query($sql_2);
            if ($result_2->num_rows > 0) {
              while ($row_2 = $result_2->fetch_assoc()) {
                echo "<td>" . $row_2["yappafee"] . "USD</td>";
                break;
              }
            } else {
              echo "<td> No yappa FEE</td>";
            }
            echo "<td>" . $row_1["deliveryfeetax"] . "$</td>";
            echo "<td>" . $row["earning"] . "$</td>";
            echo "<td>" . $row["taskstatus"] . "</td>";
            echo "<td>" . $row["distance"] . "</td>";
            echo "<td>" . $row["agentname"] . "</td>";
            echo "<td>" . $row["totalprice"] . "</td>";
            echo "<td>" . $row["totaltimetaken"] . "</td>";

            break;
          }
        } else {
          echo "<td> No delivery FEE</td>";
        }

        //echo "<td>" . $row["pickupfrom"] . "</td><td>" . $row["taskid"] . "</td><td>" . $row["notes"] . "</td><td>" . $row["agentname"] . "</td><td>" . $row["taskid"] . "</td><td>" . $row["agentname"] . "</td><td>" . $row["notes"] . "</td><td>" . $row["pickupfrom"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "0 results";
    }

    echo "</table></div></div>";



    ?>