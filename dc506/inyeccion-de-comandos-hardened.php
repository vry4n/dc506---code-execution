<?php
// function crea un bloque de código que ejecuta una acción
function start() {
    // asigne el valor de $_GET['input'] a una variable llamada $value
    $value = $_GET['input'];
    // Accion 1: inspeccionar el input, quitar cualqui tipo de \ caracteres
    $value = stripslashes($value);
    // Accion 2: Permitir solo ciertos caracteres, en este caso solo quiero letras
    $value = preg_replace('/[^A-Za-z\-]/', '', $value);
    // Verifica que haya data recibida via post y que la variable se llame input, si existe haga lo siguiente
    if ($value) {
        // switch ejecuta acciones basado en alguna condicion, en este caso tenemos dos paabras clave que ejecutan un comando especifico, y una
        //accion por defecto
        switch ($value) {
            case "mem":
                echo shell_exec("free -h");
                break;
            case "cpu":
                echo shell_exec("mpstat");
                break;
            default:
                // Accion opcional: Quitar el echo y usar un mensaje por defecto
                $mensaje = "echo 'Comando " . $value . " es invalido, ingrese alguno de los comandos: mem, cpu'";
                echo shell_exec($mensaje);
        }
    }
    // si el valor de $_GET['input'] no es valido, entonces, ejecute este mensaje
    else {
        echo "Intenta de nuevo";
    }
}

start();