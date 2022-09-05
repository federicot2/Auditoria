<?php 
    include('conect.php');
    $sql = "SELECT id , nombre , deliveryfee , yappafee FROM datacsv";
        $result = $conn->query($sql);


        echo "<table border='1'>

        <tr>

        <th>Id</th>

        <th>Nombre</th>

        <th>Deliveryfee</th>

        <th>Yappafee</th>

        </tr>";     

        while($row = mysqli_fetch_array($result))

        {
        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['nombre'] . "</td>";

        echo "<td>" . $row['deliveryfee'] . "</td>";

        echo "<td>" . $row['yappafee'] . "</td>";
        echo "</tr>";

        }

        echo "</table>";
?>
