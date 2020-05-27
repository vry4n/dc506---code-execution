<?php

$file = $_GET['log'];
// Accion 1: inspeccionar el input, quitar cualqui tipo de \ caracteres
$file = stripslashes($file);
// Accion 2: Permitir solo ciertos caracteres, en este caso solo quiero letras, y una vez el punto
$file = preg_replace('/[^a-zA-Z].{1}[^a-zA-Z]/', '', $file);
if ($file == "error.log" or $file == "access.log") {
    readfile('/var/log/apache2/'. $file);
}
else {
    echo "Archivo " . $file . " incorrecto. Seleccione un archivo correcto";
}

