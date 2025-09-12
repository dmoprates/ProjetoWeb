<?php
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $servicos = Painel::select('tb_site.servicos', 'id = ?', array($id));
} else {
    Painel::alert('erro', 'Você precisa passar o parâmetro ID');
    die();
}
?>

<div class="box-content">
    <h2 class="title"> <i class="fa-solid fa-comment-dots"></i> Editar Serviço</h2>

    <form method="post" enctype="multipart/form-data">

        <?php
        if (isset($_POST['acao'])) {
            if (Painel::update($_POST)) {
                Painel::alert('sucesso', 'O serviço foi editado com sucesso!');
                $servicos = Painel::select('tb_site.servicos', 'id = ?', array($id));
            } else {
                Painel::alert('erro', 'Campos vazios não são permitidos.');
            }
        }
        ?>

        <div class="form-group">
            <label>Serviço: </label>
            <textarea name="servicos"><?php echo $servicos['servicos']; ?></textarea>
        </div><!--form-group-->


        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar">
            <input type="hidden" name="nome_tabela" value="tb_site.servicos">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div><!--form-group-->

    </form>
</div><!--box-content-->