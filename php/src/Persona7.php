<?php
class Persona7 {
    private string $nom;

    private string $cognoms;

    private int $edat;

    public function __construct(string $nom, string $cognoms, ?int $edat = 25) {
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->edat = $edat;
    }

    public function getNombreCompleto(): string {
        return $this->getNom() . " " . $this->getCognoms(); 
    }

    public function estaJubilado(): bool {
        return ($this->getEdat() >= 65) ? true : false;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getCognoms(): string {
        return $this->cognoms;
    }

    public function getEdat(): int {
        return $this->edat;
    }

    public function setEdat(int $edat) {
        $this->edat = $edat;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function setCognoms(string $cognoms) {
        $this->cognoms = $cognoms;
    }
}