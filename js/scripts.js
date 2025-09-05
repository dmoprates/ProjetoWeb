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
        });
        if($('target').length > 0){
            //O elemento existe, portanto precisamos dar o scroll em algum elemento.
            var elemento = '#'+$('target').attr('target');
            var divScroll =  $(elemento).offset().top;
            $('html, body').animate({'scrollTop': divScroll}, 2000);
        }
    
        carregarDinamico();
        function carregarDinamico(){
            $('[realtime]').click(function(){
                var pagina = $(this).attr('realtime');
                $('.container-principal').hide();
                $('container-principal').load(include_path+'pages/'+pagina+'.php');
                initialize();
                window.history.pushState('', '',pagina);
                return false;
            })

        }
    
    }
)