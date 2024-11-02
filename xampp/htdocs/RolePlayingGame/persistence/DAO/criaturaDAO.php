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
}

