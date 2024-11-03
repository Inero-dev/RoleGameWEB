<?php
require_once(dirname(__FILE__) . '..\..\conf\PersistentManager.php');
require_once(dirname(__FILE__) . '..\..\..\app\models\Criatura.php');
 class criaturaDAO{
    
    private $USER_TABLE = "criaturas";
    
     private $conn = null;
     
     public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    
    public function selectAll() {
        $query = "SELECT * FROM " . $this->USER_TABLE;
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
        $query = "SELECT NAME, DESCRIPTION, AVATAR, ATTACKPOWER, LIFELEVEL, WEAPON FROM " . $this->USER_TABLE . " WHERE IDCRIATURE=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nombre, $descripcion, $avatar, $attakPower, $lifelevel, $weapon);

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
    
    
    public function insert($criaturaNew) {
        $query = "INSERT INTO " . $this->USER_TABLE .
                " (NAME, DESCRIPTION, AVATAR, ATTACKPOWER, LIFELEVEL, WEAPON) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $nombre=$criaturaNew->getNombre();
        $descripcion=$criaturaNew->getDescripcion();
        $avatar=$criaturaNew->getAvatar();
        $attakPow=$criaturaNew->getAttackpower();
        $lifeLevel=$criaturaNew->getLifelevel();
        $weapon=$criaturaNew->getWeapon();
        mysqli_stmt_bind_param($stmt, 'sssiis', $nombre, $descripcion, $avatar, $attakPow, $lifeLevel, $weapon);
        return $stmt->execute();
    }
    
    public function update($criaturaNew, $id) {
        $query = "UPDATE " . $this->USER_TABLE .
                " SET NAME=?, DESCRIPTION=?, AVATAR=?, ATTACKPOWER=?, LIFELEVEL=?, WEAPON=?"
                . " WHERE IDCRIATURE=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $nombre=$criaturaNew->getNombre();
        $descripcion=$criaturaNew->getDescripcion();
        $avatar=$criaturaNew->getAvatar();
        $attakPow=$criaturaNew->getAttackpower();
        $lifeLevel=$criaturaNew->getLifelevel();
        $weapon=$criaturaNew->getWeapon();
        mysqli_stmt_bind_param($stmt, 'sssiisi', $nombre, $descripcion, $avatar, $attakPow, $lifeLevel, $weapon, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->USER_TABLE . " WHERE IDCRIATURE =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }
}

