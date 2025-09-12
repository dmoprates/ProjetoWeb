<?php
    $usuariosOnline = Painel::listarUsuariosOnline();
    $pegarVisitasTotais = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
    $pegarVisitasTotais->execute();

    $pegarVisitasTotais = $pegarVisitasTotais->rowCount();

    $pegarVisitasHoje = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
    $pegarVisitasHoje->execute(array(date('Y-m-d')));

    $pegarVisitasHoje = $pegarVisitasHoje->rowCount();
?>

<div class="box-content left w100">
    <h2 class="title"><i class="fa-solid fa-house-user"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>

    <div class="box-metricas">

        <div class="box-metricas-single">
            <div class="box-metricas-wraper">
                <h2>Usuários Online</h2>
                <p><?php echo count($usuariosOnline); ?></p>
            </div><!--box-metricas-wraper-->
        </div><!--box-metricas-single-->

        <div class="box-metricas-single">
            <div class="box-metricas-wraper">
                <h2>Total de Visitas</h2>
                <p><?php echo $pegarVisitasTotais; ?></p>
            </div><!--box-metricas-wraper-->
        </div><!--box-metricas-single-->

        <div class="box-metricas-single">
            <div class="box-metricas-wraper">
                <h2>Visitas Hoje</h2>
                <p><?php echo $pegarVisitasHoje; ?></p>
            </div><!--box-metricas-wraper-->
        </div><!--box-metricas-single-->

        <div class="clear"></div>
    </div><!--box-metricas-->
</div><!--div.box-content-->

<div class="box-content left w100">
    <h2 class="title"><i class="fa-solid fa-globe"></i> Usuários Online</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div><!--col-->
            <div class="col">
                <span>Última Ação</span>
            </div><!--col-->
            <div class="clear"></div>
        </div><!--row-->
        <?php foreach ($usuariosOnline as $key => $value) { ?>
            <div class="row">
                <div class="col">
                    <span><?php echo $value['ip']; ?></span>
                </div><!--col-->
                <div class="col">
                    <span><?php echo date('d/m/Y H:i:s',strtotime($value['ultima_acao'])); ?></span>
                </div><!--col-->
                <div class="clear"></div>
            </div><!--row-->
        <?php } ?>
    </div><!--table-responsive-->
</div><!--div.box-content-->

<div class="box-content left w100">
    <h2 class="title"><i class="fa-solid fa-users"></i> Usuários do Painel</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>Nome</span>
            </div><!--col-->
            <div class="col">
                <span>Cargo</span>
            </div><!--col-->
            <div class="clear"></div>
        </div><!--row-->
        <?php 
            $usuariosPainel = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`");
            $usuariosPainel->execute();
            $usuariosPainel = $usuariosPainel->fetchAll();
            foreach ($usuariosPainel as $key => $value) { 
        ?>
            <div class="row">
                <div class="col">
                    <span><?php echo $value['user']; ?></span>
                </div><!--col-->
                <div class="col">
                    <span><?php echo pegaCargo($value['cargo']) ?></span>
                </div><!--col-->
                <div class="clear"></div>
            </div><!--row-->
        <?php } ?>
    </div><!--table-responsive-->
</div><!--div.box-content-->