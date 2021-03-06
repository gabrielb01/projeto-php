<?php

if (isset($_SESSION['permissao'])) {
  $permissão = explode(";", $_SESSION['permissao']);
}
if (!defined('INDEX')) {
  die("Erro no sistema!");
}
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a href="<?= PROTOCOLO ?>://<?= PATH ?>/" class="navbar-brand h1 mb-0"> Conscious Vegan</a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSite">

      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?= PROTOCOLO ?>://<?= PATH ?>/">Inicio</a>
        </li>

        <?php if (!isset($_SESSION['user'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= PROTOCOLO ?>://<?= PATH ?>/accounts/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= PROTOCOLO ?>://<?= PATH ?>/accounts/cadastro">Cadastre-se</a>
          </li>

        <?php endif; ?>

        <?php if (isset($_SESSION['permissao']) && in_array("admin", $permissão)) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= PROTOCOLO ?>://<?= PATH ?>/categoria">Categoria</a>
          </li>

        <?php endif; ?>


        <?php if (isset($_SESSION['user'])) : ?>


          <li class="nav-item">
            <a class="nav-link" href="<?= PROTOCOLO ?>://<?= PATH ?>/u/profile/<?= $_SESSION['usuario'] ?>">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= PROTOCOLO ?>://<?= PATH ?>/accounts/logout">Sair</a>
          </li>

        <?php endif; ?>



      </ul>
      <?php if (isset($_SESSION['user'])) : ?>

        <form class="form-inline form" method="post" action="<?= PROTOCOLO ?>://<?= PATH ?>/receita/search">
          <input class="form-control ml-4 mr-2" name="search" placeholder="Buscar..." required>
          <input type="submit" class="btn btn-outline-dark btn-submit" value="Pesquisar">
        </form>
      <?php endif; ?>
    </div>

  </div>
</nav>