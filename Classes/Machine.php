<?php


class Machine {

    private $id;
    private $marque;
    private $salle;

    function __construct($id, $marque, $salle) {
        $this->id = $id;
        $this->marque = $marque;
        $this->salle = $salle;
    }

    function getSalle() {
        return $this->salle;
    }

    function setSalle($salle) {
        $this->salle = $salle;
    }

    function getId() {
        return $this->id;
    }

    function getMarque() {
        return $this->marque;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }

    public function __toString() {
        return $this->marque;
    }

}
