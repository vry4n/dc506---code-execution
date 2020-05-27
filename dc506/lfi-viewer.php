<?php
// asigna el valor ingresado a una variable
$file = $_GET['log'];
//abre un archivo basado en el nombre seleccionado
include('/var/log/apache2/'. $file);


