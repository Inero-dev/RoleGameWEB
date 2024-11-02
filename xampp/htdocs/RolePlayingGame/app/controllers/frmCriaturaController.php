<?php

$criaturaDAO = new criaturaDAO();
$criaturaNew = new Criatura();
$nombre = $_POST['inNombre'];
$descripcion = $_POST['inDescripcion'];
$avatar = $_POST['inAvatar'];
$attakPow = $_POST['inAttack'];
$lifeLevel = $_POST['inLifeLevel'];
$weapon = $_POST['inWeapon'];

$criaturaNew->getNombre($nombre);
$criaturaNew->getDescripcion($descripcion);
$criaturaNew->getAvatar($avatar);
$criaturaNew->getAttackpower($attakPow);
$criaturaNew->getLifelevel($lifeLevel);
$criaturaNew->getWeapon($weapon);

