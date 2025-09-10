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
                <a href="">Editar Usuário</a>
                <a href="">Adicionar Usuários</a>

                <h2>Cadastro</h2>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a href="">Cadastrar Serviço</a>
                <a href="">Cadastrar Slides</a>

                <h2>Gestão</h2>
                <a href="">Listar Depoimentos</a>
                <a href="">Listar Serviços</a>
                <a href="">Listar Slides</a>

                <h2>Configuração Geral</h2>
                <a href="">Editar Site</a>

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

</body>

</html>