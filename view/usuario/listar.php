<!-- Listar todas as receitas salvas pelo usuário. -->
<?php

    if (!defined('INDEX')) {
      die("Erro no sistema!");
    }
?>
<div class="container mt-4">
    <div class="row">
        <?php
        foreach ($this->dados as $receita) :
        ?>
            <div class="col-md-3 col-sm-4 col-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= PROTOCOLO . '://' . PATH . '/' . $receita['foto_receita'] ?>" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $receita['titulo'] ?></h5>
                        <p class="card-text"><?= substr($receita['mododefazer'], 0, 100) ?></p>
                        <a href="<?= PROTOCOLO ?>://<?= PATH ?>/receita/single/<?= $receita['id_receita'] ?>" class="btn btn-primary">Ver Receita</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>