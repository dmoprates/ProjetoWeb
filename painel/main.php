<?php
if (isset($_GET['logout'])) {
    Painel::logout();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fonte Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/ad7ef30e1e.js" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">

    <title>Painel de Controle</title>
</head>

<body>

    <div class="menu-wraper">
        <div class="menu">
            <div class="box-usuario">
                <?php if ($_SESSION['img'] == '') { ?>
                    <div class="avatar-usuario">
                        <i class="fa-solid fa-user"></i>
                    </div><!--avatar-usuario-->
                <?php } else { ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>"
                            alt="Imagem do usuário logado">
                    </div><!--avatar-usuario-->
                <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p class="cargo"><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div><!--nome-usuario-->
                <div class="clear"></div>
            </div><!--box-usuario-->
            <div class="itens-menu">

                <h2>Administração do Painel</h2>
                <a <?php selecionadoMenu('editar-usuario'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
                <a <?php selecionadoMenu('adicionar-usuario'); ?> 
                    <?php verificaPermissaoMenu(2); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>

                <h2>Cadastro</h2>
                <a <?php selecionadoMenu('cadastrar-depoimento'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php selecionadoMenu('cadastrar-servico'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
                <a <?php selecionadoMenu('cadastrar-slides'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>

                <h2>Gestão</h2>
                <a <?php selecionadoMenu('listar-depoimentos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                <a <?php selecionadoMenu('listar-servicos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
                <a <?php selecionadoMenu('listar-slides'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>

                <h2>Configuração Geral</h2>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>

            </div><!--itens-menu-->
        </div><!--menu-->
    </div><!--menu-wraper-->

    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div><!--menu-btn-->
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fa-solid fa-house"></i>
                    Página Inicial</a>

                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fa-solid fa-right-from-bracket"></i>
                    Sair</a>
            </div><!--logout-->
            <div class="clear"></div>
        </div><!--center-->
        <div class="clear"></div>
    </header>

    <div class="content">
        <?php Painel::carregarPagina(); ?>
        <div class="clear"></div>
    </div><!--content-->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/jquery.mask.js"></script>

</body>

</html>