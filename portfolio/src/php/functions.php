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

function getSkills(){
    global $pdo;
    $stmtCats = $pdo->prepare("SELECT id, name from skills_categories");
    $stmtCats->execute();

    $categories = $stmtCats->fetchAll();

    $stmtSkills = $pdo->prepare("SELECT s.id, s.name, s.icon, s.category_id, c.name as cat_name FROM skills s, skills_categories c WHERE s.category_id = c.id");
    $stmtSkills->execute();

    $skills = $stmtSkills->fetchAll();

    $res = [];

    foreach ($categories as $category) {
        $res[$category['name']] = [];
    }


    foreach ($skills as $skill) {
        $res[$skill['cat_name']][] = $skill;
    }

    return $res;
}


?>
