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

    <!--jQuery UI-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/jquery-ui.min.css">

    <!-- CSS DatePicker-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/stefangabos/Zebra_Datepicker/dist/css/default/zebra_datepicker.min.css">

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">

    <!--TinyMCE-->
    <script src="https://cdn.tiny.cloud/1/sp6p50q0nnkpcz2sad0koa68or56sgjjgw12jlrjqplse91d/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>


    <title>Painel de Controle</title>
</head>

<body>

<base base="<?php echo INCLUDE_PATH_PAINEL; ?>" />

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
                <a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>

                <h2>Cadastro de Conteúdo</h2>
                <a <?php selecionadoMenu('cadastrar-depoimento'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php selecionadoMenu('cadastrar-servico'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
                <a <?php selecionadoMenu('cadastrar-slides'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>

                <h2>Gestão de Conteúdo</h2>
                <a <?php selecionadoMenu('listar-depoimentos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                <a <?php selecionadoMenu('listar-servicos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
                <a <?php selecionadoMenu('listar-slides'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>

                <h2>Notícias</h2>
                <a <?php selecionadoMenu('cadastrar-categoria'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-categoria">Cadastrar Categoria</a>
                <a <?php selecionadoMenu('gerenciar-categorias'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias">Gerenciar Categorias</a>
                <a <?php selecionadoMenu('cadastrar-noticia'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-noticia">Cadastrar Notícia</a>
                <a <?php selecionadoMenu('gerenciar-noticias'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-noticias">Gerenciar Notícias</a>

                <h2>Gestão de Clientes</h2>
                <a <?php selecionadoMenu('cadastrar-clientes'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-clientes">Cadastrar Clientes</a>
                <a <?php selecionadoMenu('gerenciar-clientes'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-clientes">Gerenciar Clientes</a>

                <h2>Controle Financeiro</h2>
                <a <?php selecionadoMenu('visualizar-pagamentos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>visualizar-pagamentos">Visualizar Pagamentos</a>
                
                <h2>Controle de Estoque</h2>
                <a <?php selecionadoMenu('cadastrar-produtos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-produtos">Cadastrar Produtos</a>
                <a <?php selecionadoMenu('visualizar-produtos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>visualizar-produtos">Visualizar Produtos</a>

                <h2>Gestão de Imóveis</h2>
                <a <?php selecionadoMenu('cadastrar-empreendimento'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-empreendimento">Cadastrar Empreendimento</a>
                <a <?php selecionadoMenu('listar-empreendimentos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-empreendimentos">Listar Empreendimentos</a>

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
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>chat"><i class="fa-solid fa-comments"></i>
                    Chat Online</a>

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

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <?php Painel::loadJS(array('jquery-ui.min.js'), 'listar-empreendimentos'); ?>
    <script src="https://cdn.jsdelivr.net/gh/stefangabos/Zebra_Datepicker/dist/zebra_datepicker.min.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.maskMoney.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.ajaxform.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/helperMask.js"></script>
    <?php Painel::loadJS(array('ajax.js'), 'gerenciar-clientes'); ?>
    <?php Painel::loadJS(array('ajax.js'), 'cadastrar-clientes'); ?>
    <?php Painel::loadJS(array('ajax.js'), 'editar-cliente'); ?>
    <?php Painel::loadJS(array('controleFinanceiro.js'),'editar-cliente'); ?>
    <?php Painel::loadJS(array('empreendimentos.js'),'listar-empreendimentos'); ?>
    <?php Painel::loadJS(array('chat.js'),'chat'); ?>

</body>

</html>