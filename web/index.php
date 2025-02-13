<?php
require_once __DIR__ . '/controllers/PageController.php';

$page = new PageController();
$page->handleRequest();
?>
