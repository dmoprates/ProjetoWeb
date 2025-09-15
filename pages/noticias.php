<?php
    $url = explode('/',$_GET['url']);
    if(!isset($url[2]))
	{
?>

<section class="header-noticias">
    <div class="container">
        <h2><i class="fa-regular fa-bell"></i></h2>
        <h2>Acompanhe as últimas notícias do portal</h2>
    </div>
</section><!--header-noticias-->
<section class="container-portal">
    <div class="container">
        <div class="sidebar">
            <div class="box-content-sidebar">
                <h3><i class="fa-solid fa-magnifying-glass"></i> Realizar uma busca</h3>
                <form>
                    <input type="text" name="busca" placeholder="O que voce procura?" required>
                    <input type="submit" value="Pesquisar!" name="acao">
                </form>
            </div><!--box-content-sidebar-->

            <div class="box-content-sidebar">
                <h3><i class="fa-solid fa-list"></i> Selecione a categoria</h3>
                <form>
                    <select name="categoria">
                        <option value="esportes">Esportes</option>
                        <option value="politica">Política</option>
                    </select>
                    <input type="submit" value="Pesquisar!" name="acao">
                </form>
            </div><!--box-content-sidebar-->

            <div class="box-content-sidebar">
                <h3><i class="fa-solid fa-user"></i> Sobre o autor</h3>
                <div class="autor-box-portal">
                    <div class="box-img-autor"></div>
                    <div class="texto-autor-portal text-center">
                        <h3>Lorem Ipsum</h3>
                        <p>Consequat dolore cupidatat consectetur ut fugiat velit non sunt incididunt est quis. Et
                            laboris eiusmod qui commodo occaecat voluptate dolor aliqua consectetur ad minim voluptate
                            elit enim. Do adipisicing laboris proident mollit id labore adipisicing duis cupidatat
                            laborum nulla velit velit exercitation. Mollit sunt amet velit irure ea enim mollit Lorem eu
                            nulla sint non quis. Proident ex amet deserunt dolor irure deserunt. Dolor dolor officia
                            culpa mollit quis consectetur esse dolore aliquip. Sint consectetur sunt ipsum minim.</p>
                    </div><!--texto-autor-portal-->
                </div><!--autor-box-portal-->
            </div><!--box-content-sidebar-->

        </div><!--sidebar-->

        <div class="conteudo-portal">
            <div class="header-conteudo-portal">
                <!--<h2>Visualizando todas as notícias</h2>-->
                <h2>Visualizando as notícias em <span>Esportes</span></h2>
            </div><!--header-conteudo-portal-->
            <?php
                for($i = 0; $i <5; $i++) {
            ?>
            <div class="box-single-conteudo">
                <h2>15/09/2025 - Lorem Ipsum silor amet</h2>
                <p>Dolor cillum nostrud ut laboris adipisicing in velit qui exercitation. Et irure in proident dolore
                    esse consequat nostrud mollit labore enim ea enim mollit. Cillum Lorem irure aliqua laborum
                    exercitation laborum sit quis qui eiusmod officia ullamco. Voluptate incididunt proident qui ullamco
                    ullamco ipsum commodo est laborum sit excepteur laborum culpa. Id est elit enim eu veniam est
                    adipisicing. Minim aliqua tempor anim id officia culpa ex sint eu occaecat enim id deserunt. Sit
                    laboris laboris aliqua ex ullamco minim consequat.</p>
                    <a href="<?php echo INCLUDE_PATH; ?>noticias/esportes/nome-do-post">Leia Mais</a>
            </div><!--box-single-conteudo-->
            <?php } ?>
        </div><!--conteudo-portal-->
        
        <div class="paginator">
            <a class="active-page" href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
        </div><!--paginator-->

        <div class="clear"></div>
    </div><!--container-->
</section><!--container-portal-->

<?php }else{ 
	include('noticia-single.php');
}
?>
