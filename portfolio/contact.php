<?php


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0);


require_once 'src/php/db.php';
require_once 'src/php/functions.php';

header('Content-Type: application/json');


if (isset($_POST['message'])) {
  $message = $_POST['message'];
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $name = isset($_POST['name']) ? $_POST['name'] : '';

  $stmt = $pdo->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
  $stmt->execute([$name, $email, $message]);

  sendMail($name, $email, $message);

  http_response_code(200);
  echo json_encode(['message' => 'Message sent!']);
  // header('Location: kewan.fr');
}else {
  http_response_code(400);
  echo json_encode(['error' => 'Message not sent!']);
}

?>