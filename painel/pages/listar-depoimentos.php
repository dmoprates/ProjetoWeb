<?php
	
    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 5;
	
	$depoimentos = Painel::selectAll('tb_site.depoimentos',($paginaAtual - 1) * $porPagina,$porPagina);

?>

<div class="box-content">
    <h2 class="title"> <i class="fa-solid fa-comments"></i> Depoimentos Cadastrados</h2>

    <div class="wraper-table">
        <table>
            <tr>
                <td>Nome</td>
                <td>Depoimento</td>
                <td>Data</td>
                <td>#</td>
                <td>#</td>
            </tr>

            <?php
            foreach ($depoimentos as $key => $value) {
                ?>

                <tr>
                    <td><?php echo $value['nome']; ?></td>
                    <td><?php echo $value['depoimento']; ?></td>
                    <td><?php echo $value['data']; ?></td>
                    <td><a class="btn edit" href=""><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
                    <td><a class="btn delete" href=""><i class="fa-solid fa-trash"></i> Excluir</a></td>
                </tr>

            <?php } ?>
        </table>
    </div><!--wraper-table-->

	<div class="paginacao">
		<?php
			$totalPaginas = ceil(count(Painel::selectAll('tb_site.depoimentos')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual)
					echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-depoimentos?pagina='.$i.'">'.$i.'</a>';
				else
					echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-depoimentos?pagina='.$i.'">'.$i.'</a>';
			}

		?>
	</div><!--paginacao-->

</div><!--box-content-->