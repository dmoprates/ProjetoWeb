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
           //Abrir ou fechar menu sem efeito
           /*
           if(listaMenu.is(':hidden') == true)
                listaMenu.css('display', 'block');
           else
                listaMenu.css('display', 'none');
            */
           //Abrir ou fechar menu com efeito e substituindo o icone do menu
           if(listaMenu.is(':hidden') == true){
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa-bars');
                icone.addClass('fa-xmark');
                listaMenu.slideToggle();
           }else{var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa-xmark');
                icone.addClass('fa-bars');
                listaMenu.slideToggle();
           }
        })
    }
)