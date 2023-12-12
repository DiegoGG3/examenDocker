<?php
class Persona {
    private $nombre;
    private $email;
    private $jamon;

    public function __construct($nombre, $email, $jamon) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->jamon = $jamon;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getJamon() {
        return $this->jamon;
    }
    public static function crearPersona($nombre, $email, $jamon) {
        return new Persona($nombre, $email, $jamon);
    }
}
?>