<?php

/** @var array $filmes */
?>


<h1>Lista de Filmes</h1>

<ul>
  <?php foreach ($filmes as $filme): ?>
    <li>
      <?= $filme['titulo']; ?>

      <?= $filme['ano']; ?>
    </li>
  <?php endforeach; ?>
</ul>