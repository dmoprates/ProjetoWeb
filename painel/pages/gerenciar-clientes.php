<div class="box-content">
    <h2 class="title"><i class="fa-solid fa-users-gear"></i> Clientes Cadastradas</h2>

    <div class="boxes">
        <?php for($i = 0; $i < 6; $i++){ ?>
        <div class="box-single-wraper">
            <div class="box-single">
                <div class="topo-box">
                    <h2><i class="fa-solid fa-user-tie"></i></h2>
                </div><!--topo-box-->
                <div class="body-box">
                    <p><b>Nome:</b> Diego</p>
                    <p><b>E-mail:</b> diego@teste.com.br</p>
                    <p><b>Tipo:</b> Físico</p>
                    <p><b>CPF:</b> 999.999.999-99</p>		
                </div><!--body-box-->
                <div class="group-btn">
                    <a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-cliente?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a>
                    <a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-clientes?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a>
                </div><!--group-btn-->
            </div><!--box-single-->
        </div><!--box-single-wraper-->
        <?php } ?>
        <div class="clear"></div>
    </div><!--boxes-->

</div><!--box-content-->