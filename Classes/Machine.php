<?php


class Machine {

    private $id;
    private $marque;
    private $reference;
    private $salle;

    function __construct($id, $marque, $reference, $salle) {
        $this->id = $id;
        $this->marque = $marque;
        $this->reference = $reference;
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
    
    function getReference() {
        return $this->reference;
    }

    function setReference($reference) {
        $this->reference = $reference;
    }

    
    public function __toString() {
        return $this->marque;
    }

}
