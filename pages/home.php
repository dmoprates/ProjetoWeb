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
            <h2><?php echo $infoSite['nome_autor'] ?></h2>
            <p>
                <?php echo $infoSite['descricao'] ?>
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
            <h3><i class="<?php echo $infoSite['icone1'] ?>"></i></h3>
            <h4><?php echo $infoSite['titulo1'] ?></h4>
            <p><?php echo $infoSite['descricao1'] ?></p>
        </div><!--box-especialidades-->

        <div class="w33 left box-especialidade">
            <h3><i class="<?php echo $infoSite['icone2'] ?>"></i></h3>
            <h4><?php echo $infoSite['titulo2'] ?></h4>
            <p><?php echo $infoSite['descricao2'] ?></p>
        </div><!--box-especialidades-->

        <div class="w33 left box-especialidade">
            <h3><i class="<?php echo $infoSite['icone3'] ?>"></i></h3>
            <h4><?php echo $infoSite['titulo3'] ?></h4>
            <p><?php echo $infoSite['descricao3'] ?></p>
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