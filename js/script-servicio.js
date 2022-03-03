$(document).ready(function() {
    $('.menu').click(function() {
        $('ul').slideToggle('active');
    });

    $("#infopacientes").addClass("isVisible");
    $("#turnospaciente").addClass("NotVisible");
    $(".turnos-per").click(function() {
        $("#turnospaciente").removeClass("NotVisible").addClass("isVisible");
        $("#infopacientes").addClass("NotVisible");
    });
    $(".info-per").click(function() {
        $("#turnospaciente").addClass("NotVisible").removeClass("isVisible");
        $("#infopacientes").addClass("isVisible");
    });

    $(window).scroll(function() {

        var wScroll = $(this).scrollTop();


        if (wScroll > $('.contenedor-tarjetas-servicio').offset().top - ($(window).height() / 1.2)) {

            $('.tarj-servicios').each(function(i) {

                setTimeout(function() {
                    $('.tarj-servicios').eq(i).addClass('aparece');
                }, 150 * (i + 1));
            });

        };
        if (wScroll > $('.bloque-texto-sede').offset().top - ($(window).height() / 1.2)) {

            $('.imagen-sede').each(function(i) {

                setTimeout(function() {
                    $('.imagen-sede').eq(i).addClass('aparece');
                }, 150 * (i + 1));
            });
            $('.bloque-texto-sede p').each(function(i) {

                setTimeout(function() {
                    $('.bloque-texto-sede p').eq(i).addClass('aparece-izq');
                }, 150 * (i + 1));
            });

        };



    });

});