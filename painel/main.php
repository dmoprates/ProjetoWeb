<?php
	if(isset($_GET['logout'])){
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

    <div class="menu">
        
    </div>

    <header>
        <div class="center">
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL?>?logout"><i class="fa-solid fa-right-from-bracket"></i>
                    Sair</a>
            </div><!--logout-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    <div class="clear"></div>

</body>

</html>