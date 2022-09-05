<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Gloria</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #FFF;
            font-family: 'Karla', sans-serif;
        }
        body{
            /*background:grey;*/
            background-color: var(--bgcolor);
        }
        :root {
            --bgcolor : #1C1C1C;
            --accentcolor: #FFCC00;
        }
        .box{
            position:absolute;
            top:150px;
            left:60px;
            
        }
        #choose_file{
            width:300px;
            background:grey;
            border:none;
            outline:none;
            box-shadow: 2px 5px 2px black;
            border-radius:50px;
        }
        ::-webkit-file-upload-button{
            border:none;
            /*background:#8a1702fa;*/
            background:#FFCC00;

            border-radius:50px;
            height:40px;
            color:white;
            width:100px;
            box-shadow: 2px 0px 0px grey;
        }
        input[type=submit] {
            background-color: #FFCC00;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size:16px;
            font-weight: bold;
            line-height: 1.4;
            padding: 10px;
            width: 180px;
        }
        a:link, a:visited {
            background-color: white;
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
</head>
<body>
<form enctype="multipart/form-data" method="post" action="uploadFile2.php">
    <div class="box">
        Inserte csv:
        <input type="file" name="file" id="choose_file">
        <input type="submit" value="Enviar" name="enviar">
    </div>
</form>
<a href="index.php">Regresar al inicio</a>
</body>
</html>