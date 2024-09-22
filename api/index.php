<?php

// header('content-type: application/json');
header('context-type: text/html;charset=utf-8');
// echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);


if (isset($_GET['name'])) {
?>
  <h1><?= $_GET['name'] ?></h1>
<?php
}
?>

<?php
if (!isset($_GET['name'])) {
  require_once __DIR__ . '/../index.html';
}
