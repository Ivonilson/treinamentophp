$(document).ready(function() {
    var alturaViewport  = $(window).height();
    var alturaElemento  = $("#posts").height();
    var distanciaTopo   = $("#posts").offset().top;
    var chegou          = false;
 
    var diferenca       = alturaElemento - alturaViewport;
 
    $(window).scroll(function() {
 
        var posicaoScroll   = $(window).scrollTop();
 
        if(!chegou){
            if (posicaoScroll >= (distanciaTopo + diferenca)) {
                alert('Barra de Rolagem chegou ao fim.');
                chegou = true;
            }
        }
    });
});