<?php
// function crea un bloque de código que ejecuta una acción
function start() {
    // Verifica que haya data recibida via post y que la variable se llame input, si existe haga lo siguiente
    if (isset($_GET['input'])) {
        // asigne el valor de $_GET['input'] a una variable llamada $value
        $value = $_GET['input'];
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