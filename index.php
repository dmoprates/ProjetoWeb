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

    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="container">

            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" value="Cadastrar!">
            </form>

        </div><!--container-->

    </section><!--banner-principal-->

    <section class="descricao-autor">

        <div class="container">

            <div class="w50 left">
                <h2>Lorem Ipsum</h2>
                <p>
                    Tempor consectetur adipisicing exercitation eu aliqua qui incididunt et ex mollit magna sint. Sint
                    elit ad et laboris eiusmod dolor est aliqua. Laborum est pariatur eu ex ea nisi voluptate qui
                    consectetur eu non Lorem.
                </p>
                <p>
                    Elit enim sint ex amet aliquip culpa do ea enim. Id velit cupidatat excepteur eiusmod ipsum duis
                    laboris et sit consequat sint et. Ipsum officia consequat anim minim anim aute nostrud culpa tempor
                    amet excepteur. Elit non reprehenderit sint anim sunt laboris excepteur. Incididunt Lorem in
                    occaecat nisi.
                </p>
            </div><!--w50-->

            <div class="w50 right">
                <img src="<?php echo INCLUDE_PATH; ?>images/foto.jpg" alt="Fotografia do autor do site.">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--container-->

    </section><!--descricao-autor-->

    <section class="especialidades">

        <div class="container">

            <h2 class="title">Especialidades</h2>

            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-css3"></i></h3>
                <h4>CSS</h4>
                <p>Labore consectetur ipsum incididunt excepteur irure reprehenderit. Ipsum laboris magna do laboris
                    elit Lorem. Non consectetur enim ex mollit nulla in ea adipisicing reprehenderit eu id do minim
                    velit.</p>
            </div><!--box-especialidades-->

            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h4>HTML2</h4>
                <p>Labore consectetur ipsum incididunt excepteur irure reprehenderit. Ipsum laboris magna do laboris
                    elit Lorem. Non consectetur enim ex mollit nulla in ea adipisicing reprehenderit eu id do minim
                    velit.</p>
            </div><!--box-especialidades-->

            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h4>JavaScript</h4>
                <p>Labore consectetur ipsum incididunt excepteur irure reprehenderit. Ipsum laboris magna do laboris
                    elit Lorem. Non consectetur enim ex mollit nulla in ea adipisicing reprehenderit eu id do minim
                    velit.</p>
            </div><!--box-especialidades-->
            <div class="clear"></div>
        </div><!--container-->

    </section><!--especialidades-->

    <section class="extras">

        <div class="container">

            <div class="w50 left depoimentos-container">

                <h2 class="title">Depoimentos dos nossos clientes</h2>

                <div class="depoimento-single">
                    <p class="depoimento-descricao">Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat
                        aliqua Lorem proident ad. Occaecat velit et quis reprehenderit. Quis elit tempor do
                        reprehenderit excepteur. Minim ad aute nulla sit nisi incididunt consequat ipsum labore. Culpa
                        exercitation aliquip dolore non dolore voluptate fugiat enim. Reprehenderit proident id aute
                        magna officia voluptate ea elit excepteur nostrud.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat
                        aliqua Lorem proident ad. Occaecat velit et quis reprehenderit. Quis elit tempor do
                        reprehenderit excepteur. Minim ad aute nulla sit nisi incididunt consequat ipsum labore. Culpa
                        exercitation aliquip dolore non dolore voluptate fugiat enim. Reprehenderit proident id aute
                        magna officia voluptate ea elit excepteur nostrud.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat
                        aliqua Lorem proident ad. Occaecat velit et quis reprehenderit. Quis elit tempor do
                        reprehenderit excepteur. Minim ad aute nulla sit nisi incididunt consequat ipsum labore. Culpa
                        exercitation aliquip dolore non dolore voluptate fugiat enim. Reprehenderit proident id aute
                        magna officia voluptate ea elit excepteur nostrud.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->

            </div><!--w50-->

            <div class="w50 left sevicos-container">
                <h2 class="title">Serviços</h2>

                <div class="servicos">
                    <ul>
                        <li>Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat
                            aliqua Lorem proident ad.</li>
                        <li>Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat
                            aliqua Lorem proident ad.</li>
                        <li>Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat
                            aliqua Lorem proident ad.</li>
                    </ul>
                </div><!--servicos-->

            </div><!--w50-->
            <div class="clear"></div>
        </div><!--container-->

    </section><!--extras-->

    <footer>

        <div class="container">
            <p>Todos os direitos reservados</p>
        </div><!--container-->

    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

</body>

</html>