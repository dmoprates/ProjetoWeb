$(
    function(){
        //Aqui vai todo nosso código de javacript
        $('nav.mobile').click(function(){
            //o que vai acontecer quando clicarmos na NAV
            var listaMenu = $('nav.mobile ul');
            //Abrir menu através de FadeIn
            /*
            if(listaMenu.is(':hidden') == true)
                listaMenu.fadeIn();
            else
                listaMenu.fadeOut();
            */
           listaMenu.slideToggle();
           //Abrir ou fechar menu sem efeito
           /*
           if(listaMenu.is(':hidden') == true)
                listaMenu.css('display', 'block');
           else
                listaMenu.css('display', 'none');
            */
        })
    }
)