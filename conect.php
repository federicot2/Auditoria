<?php
    $dbhost = 'localhost';
    $dbuser = 'dajtrwmy_paya';
    $dbpass = 'PayA*2022';
    $db = "dajtrwmy_paya";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
    if($conn){
        echo"Conexion exitosa";
    }else{
        echo"No se conecto!";
    }
?>
<?php
/*
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = "hp";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
    if($conn){
        echo"Conexion exitosa";
    }else{
        echo"No se conecto!";
    }
    */
?>