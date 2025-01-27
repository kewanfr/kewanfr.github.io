<?php
// src/functions.php
require_once 'src/php/db.php';


function getPosts() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT p.id, p.title, p.content, p.slug, p.banner, p.created_at, p.status, u.fullName FROM posts p, users u WHERE p.author_id = u.id");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getProjectTags($project_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT t.name FROM tags t, projet_tag pt WHERE pt.tag_id = t.id AND pt.projet_id = ?");
    $stmt->execute([$project_id]);

    $tags = $stmt->fetchAll();


    return array_map(function($tag) {
        return $tag['name'];
    }, $tags);
}

function getPinnedProjectTags($project_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT t.name FROM tags t, projet_tag pt WHERE pt.tag_id = t.id AND pt.projet_id = ? AND pt.pin = 1");
    $stmt->execute([$project_id]);

    $tags = $stmt->fetchAll();


    return array_map(function($tag) {
        return $tag['name'];
    }, $tags);
}

function insertVisit($path, $IP, $country, $browser, $deviceBrand, $deviceModel, $os){


    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO access (path, IP, country, browser, deviceBrand, deviceModel, os) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$path, $IP, $country, $browser, $deviceBrand, $deviceModel, $os]);

    incrementStat('visits');

    return $pdo->lastInsertId();

}

function getVisits() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM access");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getStat($name){
    global $pdo;
    $stmt = $pdo->prepare("SELECT value FROM stats WHERE name = ?");
    $stmt->execute([$name]);
    return $stmt->fetch()['value'];
}

function incrementStat($name){
    global $pdo;
    $stmt = $pdo->prepare("UPDATE stats SET value = value + 1 WHERE name = ?");
    $stmt->execute([$name]);
}

function getProjects() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT id, name, description, page, repo_url, demo_url, banner, date FROM projets ORDER BY ordre ASC");
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
