<?php
class Criatura {
    private $id;
    private $nombre;
    private $descripcion;
    private $avatar;
    private $attackpower;
    private $lifelevel;
    private $weapon;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttackpower() {
        return $this->attackpower;
    }

    public function getLifelevel() {
        return $this->lifelevel;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }


    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setAvatar($avatar): void {
        $this->avatar = $avatar;
    }

    public function setAttackpower($attackpower): void {
        $this->attackpower = $attackpower;
    }

    public function setLifelevel($lifelevel): void {
        $this->lifelevel = $lifelevel;
    }

    public function setWeapon($weapon): void {
        $this->weapon = $weapon;
    }

}

