<?php

require_once(dirname(__FILE__) . '/../../utils/sessionHealper.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnAccion'])) {
    if ($_POST['btnAccion'] == 'iniciar') {
        $nombreUsuario = $_POST['nombreUsuario'];
        $contraseña = $_POST['contraseña'];

        if (strtoupper($nombreUsuario) == 'USUARIO33' && $contraseña == 'Contraseña33') {
            sessionHealper::setSession($nombreUsuario);
            echo "<p class='d-flex ms-auto' >Hola $nombreUsuario </p>";
        } else {
            echo "<p class='d-flex ms-auto' > Usuario incorrecto!! </p>";
        }
    }
    else if ($_POST['btnAccion'] == 'cerrar'){
        sessionHealper::destroySession();
        echo "<p class='d-flex ms-auto' > Hasta prontoo!! </p>";
        header("Location: ../../index.php");
    }
}
