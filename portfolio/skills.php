<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'src/php/db.php';
require_once 'src/php/functions.php';

$skills = getSkills();

header('Content-Type: application/json');
echo json_encode($skills);

?>