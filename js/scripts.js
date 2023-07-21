$(function(){
    //Aqui vai todo nosso codigo javascript
    $('nav.mobile').click(function(){
        // O que vai acontecer quando clicarmos na nav.mobile
        var listaMenu = $('nav.mobile ul');

        //Abrir menu atráves do fadeIn
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        } else {
            listaMenu.fadeOut();
        }
        */

       //Abrir ou fechar sem efeitos
       /*
       if(listaMenu.is(':hidden') == true){
        //listaMenu.show();
        listaMenu.css('display','block');
        } else {
        //listaMenu.hide();
        listaMenu.css('display','none');
        }
        */
        if(listaMenu.is(':hidden') == true){
                //fa fa-times
                //fa fa-bars
                //var icone = $('.botao-menu-mobile i');
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa fa-bars');
                icone.addClass('fa fa-times');
                listaMenu.slideToggle();
            } else {
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa fa-times');
                icone.addClass('fa fa-bars');
                listaMenu.slideToggle();
            }

        //Abrir ou fechar o menu com jquery
        //listaMenu.slideToggle();

    })
})