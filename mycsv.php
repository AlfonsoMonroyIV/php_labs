<?php
	//Función fgetcsv - página oficial de PHP
	$fila = 1;
	if (($gestor = fopen("prueba.csv", "r")) !== FALSE) {
	    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
	        $numero = count($datos);
	        echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
	        $fila++;
	        for ($c=0; $c < $numero; $c++) {
	            echo $datos[$c] . "<br />\n";
	        }
	    }
	    fclose($gestor);
	}
?>