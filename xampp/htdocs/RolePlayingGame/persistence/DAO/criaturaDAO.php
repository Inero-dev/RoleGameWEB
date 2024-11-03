<?php
class criaturaDAO{
    
    private $USER_TABLE = "criaturas";
    
    public function selectAll() {
        $query = "SELECT * FROM " . UserDAO::USER_TABLE;
        $result = mysqli_query($this->conn, $query);
        $criaturas = array();
        while ($criaturaBD = mysqli_fetch_array($result)) {

            $criatura = new Criatura();
            $criatura->setId($criaturaBD["IDCRIATURE"]);
            $criatura->setNombre($criaturaBD["NAME"]);
            $criatura->setDescripcion($criaturaBD["DESCRIPTION"]);
            $criatura->setAvatar($criaturaBD["AVATAR"]);
            $criatura->setAttackpower($criaturaBD["ATTACKPOWER"]);
            $criatura->setLifelevel($criaturaBD["LIFELEVEL"]);
            $criatura->setWeapon($criaturaBD["WEAPON"]);

            array_push($criaturas, $criatura);
        }
        return $criaturas;
    }
    
    public function selectById($id) {
        $query = "SELECT NAME, DESCRIPTION, AVATAR, ATTACKPOWER, LIFELEVEL, WEAPON FROM " . criaturaDAO::$USER_TABLE . " WHERE IDCRIATURE=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $nombre, $descripcion, $avatar, $attakPower, $lifelevel, $weapon);

        $criatura = new Criatura();
        while (mysqli_stmt_fetch($stmt)) {
            $criatura->setId($id);
            $criatura->setNombre($nombre);
            $criatura->setDescripcion($descripcion);
            $criatura->setAvatar($avatar);
            $criatura->setAttackpower($attakPower);
            $criatura->setLifelevel($lifelevel);
            $criatura->setWeapon($weapon);
        }

        return $criatura;
    }
}

