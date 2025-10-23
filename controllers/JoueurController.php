<?php
require_once __DIR__ . '/../services/JoueurService.php';
require_once __DIR__ . '/../core/Controller.php';

class JoueurController extends Controller {
    private $service;

    public function __construct() {
        $this->service = new JoueurService();
    }

    public function index() {
        $joueurs = $this->service->listeJoueurs();
        $this->render('joueurs/liste', ['joueurs' => $joueurs]);
    }

    public function ajouter() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $this->service->ajouterJoueur($_POST['nom'], $_POST['poste']);
                echo "✅ Joueur ajouté avec succès.";
            } catch (Exception $e) {
                echo "❌ Erreur : " . $e->getMessage();
            }
        } else {
            $this->render('joueurs/ajouter');
        }
    }
}
?>
