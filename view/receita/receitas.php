<?php

    if (!defined('INDEX')) {
      die("Erro no sistema!");
    }
?>
<?php if($_SESSION['user'] == $this->id):?>
<br><br>
<div class="container">
    <div class="row">
        <a href="<?= PROTOCOLO ?>://<?= PATH ?>/receita/new" class="btn btn-primary btn-lg">Cadastrar Receita</a>
    </div>
</div>
<?php endif; ?>
<br><br>

<div class="container">
    <div class="row">
        <?php
        if(count($this->receitas)==0) {
            echo "<h2>Não há nenhuma receita cadastrada!</h2>";
        } else {
        foreach ($this->receitas as $receita) :
        ?>
            <div class="col-md-3 col-sm-4 col-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?=PROTOCOLO.'://'.PATH.'/'. $receita['foto_receita'] ?>" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $receita['titulo'] ?></h5>
                        <p class="card-text"><?= substr($receita['mododefazer'], 0, 100) ?></p>
                        <a href="<?= PROTOCOLO ?>://<?= PATH ?>/receita/single/<?= $receita['id_receita'] ?>" class="btn btn-primary">Ver Receita</a>
                    </div>
                </div>
            </div>
        <?php endforeach; }?>
    </div>
</div>