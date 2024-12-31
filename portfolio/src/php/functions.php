<?php
// src/functions.php
require_once 'src/php/db.php';


function getProjects() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT id, name, description, page, repo_url, demo_url, banner, date FROM projets");
    $stmt->execute();

    $projets = $stmt->fetchAll();

    foreach ($projets as &$projet) {
        $projet['tags'] = getProjectTags($projet['id']);
        $projet['tags_pinned'] = getPinnedProjectTags($projet['id']);
    }

    return $projets;
}

function getProject($project_id){
    global $pdo;
    $stmt = $pdo->prepare("SELECT id, name, description, page, repo_url, demo_url, banner, date FROM projets WHERE id = ?");
    $stmt->execute([$project_id]);

    $projet = $stmt->fetch();

    $projet['tags'] = getProjectTags($projet['id']);

    return $projet;
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

function sendMail($name, $email, $message) {
    ini_set( 'display_errors', 1);
    error_reporting( E_ALL );
    $to = "contact@kewan.fr";

    $headers = array(
        'From' => "contact@kewan.fr",
        'Reply-To' => $email,
        'Cc' => $email,
        'X-Mailer' => 'PHP/' . phpversion(),
    );

    $subject = "Contact Kéwan.fr | $name";
    $message = "Nouveau message du formulaire contact\n\nNom: $name\nEmail: $email\n\nMessage: $message";
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
}


?>
