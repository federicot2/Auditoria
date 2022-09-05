<?php
    include('conect.php');
    $sql = "SELECT id, nombre, apellido, email, latitud, longitud, telefono FROM tookan_order_sent";
        $result = $conn->query($sql);


        echo "<table border='1'>

        <tr>

        <th>Order_Id</th>

        <th>Nombre</th>

        <th>Apellido</th>

        </tr>";     

        while($row = mysqli_fetch_array($result))

        {
        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['nombre'] . "</td>";

        echo "<td>" . $row['apellido'] . "</td>";

        echo "<td>" . $row['email'] . "</td>";

        echo "<td>" . $row['latitud'] . "</td>";

        echo "<td>" . $row['longitud'] . "</td>";

        echo "<td>" . $row['telefono'] . "</td>";

        echo "</tr>";

        }

        echo "</table>";
?>