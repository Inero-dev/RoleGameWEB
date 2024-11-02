<?php
$criaturaDAO = new criaturaDAO();
function validar() {
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST['inNombre'];
        $descripcion = $_POST['inDescripcion'];
        $avatar = $_POST['inAvatar'];
        $nombre = $_POST['inAttack'];
        $descripcion = $_POST['inLifeLevel'];
        $avatar = $_POST['inWeapon'];
        
    }
}

function existeCriatura($criatura){
    $criaturasBD=$criaturaDAO->selectAll();
    return "";
}
