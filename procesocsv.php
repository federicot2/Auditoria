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
<a href="cargaBASEtookan.php">Cargar base de datos</a>
<?php
$csv = array_map('str_getcsv', file('uploads/data.csv'));
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
$cont_tabla = 0;
$relacion_fin = 0;
$cuenta_restaurantes = 0;

foreach ($csv as $key => $value) {
    $relacion_ini = $value[2];
    if ($relacion_ini != $relacion_fin   ||  $cont_tabla == 0 ) {
        if ($value[1] != "-" ||  $cont_tabla == 0){
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
            echo "</tr>";
            }
        }
        $relacion_fin = $relacion_ini;
    }
}
echo "</table>";
echo "<br>";
echo "<br>";
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
$cont_tabla = 0;
$relacion_fin = 0;
$cuenta_restaurantes = 0;

foreach ($csv as $key => $value) {
    $relacion_ini = $value[2];
    if ($relacion_ini != $relacion_fin   ||  $cont_tabla == 0) {
        if ($value[1] == "-" ||  $cont_tabla == 0) {
            $cont_tabla++;
            echo "<tr>";
            foreach ($value as $llave => $valor) {
                if ($llave < 48 || $llave > 69) {
                    if ($llave == 10 && $cont_tabla != 1) {
                        echo "<td> " . $restaurantes[$cont_tabla - 2] . "    </td> ";
                    } else {
                        echo "<td> " . $valor . "    </td> ";
                    }
                }
            }
            echo "</tr>";
        }
        $relacion_fin = $relacion_ini;
    }
}
echo "</table>";
echo "<br>";
echo "<br>";

echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";

foreach ($csv as $key => $value) {
    $relacion_ini = $value[2];
    //Filtramos para sacar solo del interior
    if (($relacion_ini != $relacion_fin   ||  $cont_tabla == 0) &&  ($value[3] != "Yappa")) {
        if ($value[3] != "Yappa") {
            echo "<tr>";
            foreach ($value as $llave => $valor) {
                if ($llave < 48 || $llave > 69) {
                    echo "<td> " . $valor . "</td> ";
                }
            }
            echo "</tr>";
        }
        $relacion_fin = $relacion_ini;
    }
}



echo "</table>";
