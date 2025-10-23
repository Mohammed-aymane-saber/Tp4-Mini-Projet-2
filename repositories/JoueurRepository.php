<?php
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../models/Joueur.php';

class JoueurRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function findAll() {
        $stmt = $this->db->query("SELECT * FROM joueurs");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(Joueur $joueur) {
        $stmt = $this->db->prepare("INSERT INTO joueurs (nom, poste) VALUES (?, ?)");
        return $stmt->execute([$joueur->nom, $joueur->poste]);
    }
}
?>
