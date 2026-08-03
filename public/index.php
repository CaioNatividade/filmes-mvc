<?php

require_once __DIR__ . '/../app/controllers/FilmeController.php';

$controller = new FilmeController();
$pagina = $_GET['pagina'] ?? 'home';

switch ($pagina) {
  case 'listar':
    $controller->listar();
    break;

  case 'cadastrar':
    $controller->cadastrar();
    break;

  case 'sobre':
    $controller->sobre();
    break;

  case 'contato':
    $controller->contato();
    break;

  default:
    $controller->home();
    break;
}
