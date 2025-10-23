<?php
require_once __DIR__ . '/../controllers/JoueurController.php';

$controller = new JoueurController();

$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Action introuvable.";
}
?>
