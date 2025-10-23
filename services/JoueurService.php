<?php
require_once __DIR__ . '/../repositories/JoueurRepository.php';

class JoueurService {
    private $repo;

    public function __construct() {
        $this->repo = new JoueurRepository();
    }

    public function ajouterJoueur($nom, $poste) {
        if (empty($nom)) throw new Exception("Le nom est obligatoire !");
        $joueur = new Joueur($nom, $poste);
        return $this->repo->save($joueur);
    }

    public function listeJoueurs() {
        return $this->repo->findAll();
    }
}
?>
