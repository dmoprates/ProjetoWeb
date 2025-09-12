<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-01.jpg');" class="banner-single"></div>
    <!--baner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-02.jpg');" class="banner-single"></div>
    <!--baner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-03.jpg');" class="banner-single"></div>
    <!--baner-single-->
    <div class="overlay"></div>
    <div class="container">
        <form>
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" required>
            <input type="submit" value="Cadastrar!">
        </form>
        <div class="bullets">

        </div><!--bullets-->
    </div><!--container-->

</section><!--banner-container-->

<section class="descricao-autor">

    <div id="sobre" class="container">

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

        <div id="depoimentos" class="w50 left depoimentos-container">

            <h2 class="title">Depoimentos dos nossos clientes</h2>

            <?php
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3 ");
            $sql->execute();
            $depoimentos = $sql->fetchAll();
            foreach ($depoimentos as $key => $value) {
                ?>

                <div class="depoimento-single">
                    <p class="depoimento-descricao"><?php echo $value['depoimento']; ?></p>
                    <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                </div><!--depoimento-single-->

            <?php } ?>

        </div><!--w50-->

        <div id="servicos" class="w50 left sevicos-container">
            <h2 class="title">Serviços</h2>

            <div class="servicos">
                <ul>

                    <?php
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 3 ");
                    $sql->execute();
                    $servicos = $sql->fetchAll();
                    foreach ($servicos as $key => $value) {
                        ?>
                        <li><?php echo $value['servicos']; ?></li>

                    <?php } ?>

                </ul>
            </div><!--servicos-->

        </div><!--w50-->
        <div class="clear"></div>
    </div><!--container-->

</section><!--extras-->