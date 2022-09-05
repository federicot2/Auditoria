<?php
    include('conect.php');
    /*$sql ="DELETE FROM gloria";*/
    $sql ="DELETE FROM tookan";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>