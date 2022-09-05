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
<h1>SISTEMA DE TABLAS:</h1>
<br>
<button type="button" onclick="verTABLA1()">Tabla DATABASE </button>
<br>

<?php

$csv = array_map('str_getcsv', file('uploads/database.csv'));
//print_r($csv);
echo "<div id=\"tabla1\"   style=\"display:none;\" >";
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
foreach ($csv as $key => $value) {
	echo "<tr>";
	//echo $key." has the value". $value;
	foreach ($value as $llave => $valor) {
		//echo "<td> ".$llave." : ". $valor."</td> ";
		if ($llave < 48 || $llave > 69)
			echo "<td> " . $valor . "</td> ";
	}
	echo "</tr>";
	//echo "<br>";
}
echo "</table></div>";
echo "<br><br><a href=\"cargaBASEdatabase.php\">CARGAR EN DB la tabla DATABASE</a> ";


?>