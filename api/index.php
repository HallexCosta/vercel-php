<?php

// header('content-type: application/json');
header('context-type: text/html;charset=utf-8');
// echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
?>

<h1><?php isset($_GET['name']) ? $_GET['name'] : 'Hállex Costa';  ?></h1>

<?php
if (!isset($_GET['name'])) {
  require_once __DIR__ . '/../index.html';
}
