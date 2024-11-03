<?php

require_once(dirname(__FILE__) . '\..\..\persistence\DAO\criaturaDAO.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $criaturaNew = new Criatura();
    $criaturaDAO = new criaturaDAO();
    $nombre = $_POST['inNombre'];
    $descripcion = $_POST['inDescripcion'];
    $avatar = $_POST['inAvatar'];
    $attakPow = $_POST['inAttack'];
    $lifeLevel = $_POST['inLifeLevel'];
    $weapon = $_POST['inWeapon'];
    
    $criaturaNew->setNombre($nombre);
        $criaturaNew->setDescripcion($descripcion);
        $criaturaNew->setAvatar($avatar);
        $criaturaNew->setAttackpower($attakPow);
        $criaturaNew->setLifelevel($lifeLevel);
        $criaturaNew->setWeapon($weapon);

    if ($paginaInicial == 'insertar') {
        $criaturaDAO->insert($criaturaNew);
    } 
    else if ($paginaInicial == 'editar'){
        $criaturaDAO->update($criaturaNew, $id);
    }
    else if ($paginaInicial == 'eliminar'){
        $criaturaDAO->delete($id);
    }
}




