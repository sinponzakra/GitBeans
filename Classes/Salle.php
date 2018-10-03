<?php

class Salle {

    private $id;
    private $numero;

    function __construct($id, $numero) {
        $this->id = $id;
        $this->numero = $numero;
    }

    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    public function __toString() {
        return $this->numero;
    }

}
