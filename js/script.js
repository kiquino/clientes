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

    // $(window).scroll(function() {
    //
    //     var wScroll = $(this).scrollTop();
    //
    //     if (wScroll > $('.contenedor-tarjetas-main').offset().top - ($(window).height() / 1.2)) {
    //
    //         $('.tarjetas-info-main').each(function(i) {
    //
    //             setTimeout(function() {
    //                 $('.tarjetas-info-main').eq(i).addClass('aparece');
    //             }, 150 * (i + 1));
    //         });
    //
    //     };
    //     if (wScroll > $('.bloque-texto-sede').offset().top - ($(window).height() / 1.2)) {
    //
    //         $('.imagen-sede').each(function(i) {
    //
    //             setTimeout(function() {
    //                 $('.imagen-sede').eq(i).addClass('aparece');
    //             }, 150 * (i + 1));
    //         });
    //         $('.bloque-texto-sede p').each(function(i) {
    //
    //             setTimeout(function() {
    //                 $('.bloque-texto-sede p').eq(i).addClass('aparece-izq');
    //             }, 150 * (i + 1));
    //         });
    //
    //     };
    //
    //
    // });

    window.scroll({
        top: 2500,
        left: 0,
        behavior: 'smooth'
    });

    // Scroll certain amounts from current position 
    window.scrollBy({
        top: 100, // could be negative value
        left: 0,
        behavior: 'smooth'
    });

    // Scroll to a certain element
    document.querySelector('.hello').scrollIntoView({
        behavior: 'smooth'
    });

});
var acc = document.getElementsByClassName("turnos-prof");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
};