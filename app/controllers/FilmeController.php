<?php
require_once __DIR__ . '/../models/Filme.php';

class FilmeController
{
  public function home()
  {
    require_once __DIR__ . '/../views/home.php';
  }

  public function listar()
  {
    $filmes = Filme::listar();
    require_once __DIR__ . '/../views/listar.php';
  }

  public function cadastrar()
  {
    require_once __DIR__ . '/../views/cadastrar.php';
  }

  public function contato()
  {
    require_once __DIR__ . '/../views/contato.php';
  }

  public function sobre()
  {
    require_once __DIR__ . '/../views/sobre.php';
  }
}
