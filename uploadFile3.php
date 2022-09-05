<a href="index.php">Regresar al inicio</a>
<?php
    echo "Ingrese el CSV:<br>";
    $target_dir = "uploads/";
    
    $temp = explode(".", $_FILES["file"]["name"]);
    $data = "database";
    $newfilename = $data . '.' . end($temp);
    
    $subir_archivo = $target_dir . $newfilename;
    $allowedExts = array("csv");
    $value =explode(".", $_FILES["file"]["name"]);
    $extension = end($value);
    $uploadOk = 1;
    $csvFileType = strtolower(pathinfo($subir_archivo,PATHINFO_EXTENSION));
    
    // Check if csv file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["file"]["tmp_name"]);
      if($check !== false) {
         echo "El File es un CSV - " . $check["mime"] . ".";
         $uploadOk = 1;
      } else {
         echo "File is not an image.";
         $uploadOk = 0;
      }
    }
    
    // Check file size
    if ($_FILES["file"]["size"] > 10000000) {
       echo "El archivo es muy grande.";
       $uploadOk = 0;
    }
    // Allow certain file formats
    if($csvFileType != "csv"  ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

            //if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $subir_archivo)) {
                 echo "<br>El archivo ". htmlspecialchars( basename( $_FILES["file"]["name"])). " ha sido subido.<br>";
                 echo "<br>Por favor seguir haciendo los PASOS: <a href=\"index.php\">CONTINUAR <br>";
                    
            } else {
                echo "<br>Hubo un error subiendo el archivo.<br>";
            }
        }
?>