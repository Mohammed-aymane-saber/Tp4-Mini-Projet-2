<?php
class Joueur {
    public $id;
    public $nom;
    public $poste;

    public function __construct($nom, $poste) {
        $this->nom = $nom;
        $this->poste = $poste;
    }
}
?>
