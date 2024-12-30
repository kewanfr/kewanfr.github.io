<?php
// src/functions.php
require_once 'src/php/db.php';


function getProjects() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT id, name, description, page, repo_url, demo_url, banner FROM projets");
    $stmt->execute();

    $projets = $stmt->fetchAll();

    foreach ($projets as &$projet) {
        $projet['tags'] = getProjectTags($projet['id']);
    }

    return $projets;
}

?>
