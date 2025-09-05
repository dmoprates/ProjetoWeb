<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--SEO-->
    <meta name="description" content="Site dinâmico com gerenciamento através de painel de Controle em PHP">
    <meta name="keywords" content="Projeto Web, CMS, PHP, HTML">
    <meta name="author" content="Diego Prates">

    <!--Fonte Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/ad7ef30e1e.js" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">

    <title>ProjetoWeb</title>

</head>

<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        switch ($url){
            case 'sobre':
                echo '<target target="sobre" />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                break;
            
        }
    ?>

    <header>
        <div class="container">

            <div class="logo left"><a href="/">ation<span>dev</span></a></div>

            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->

            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--container-->

    </header>

    <?php
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        } else {
            //Redirecionar para uma página de erro
            if($url != 'sobre' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>

        <div class="container">
            <p>Todos os direitos reservados</p>
        </div><!--container-->

    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/mail.js"></script>

</body>

</html>