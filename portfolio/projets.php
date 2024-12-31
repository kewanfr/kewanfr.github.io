<?php

require_once 'src/php/db.php';
require_once 'src/php/functions.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_GET['id'])) {
  $projet = getProject($_GET['id']);
  header('Content-Type: application/json');
  echo json_encode($projet);
  exit;
}

$projets = getProjects();

header('Content-Type: application/json');
echo json_encode($projets);

?>