//Declaracion de elementos

let navDesktop = $("#nav-desktop");
let carDesktop = $("#carousel-desktop");
let navMobile = $("#nav-mobile");
let carMobile = $("#carousel-mobile");
//Fin Declaracion de elementos

let servicios = $('#servicios');
let cvimg = $('#cvimg');
let frase = $('#frase');
let clientes1 = $('#clientes-carousel-1');
let clientes2 = $('#clientes-carousel-2');
let clientes3 = $('#clientes-carousel-3');

const breakpoint = 800;

if ($(window).width() <= breakpoint) {
    cvimg.attr('src', '/assets/VERSION_MOVIL/cv2.jpg');
    frase.attr('src', '/assets/VERSION_MOVIL/frase.jpg');
    clientes1.attr('src', '/assets/VERSION_MOVIL/clientes1.jpg');
    clientes2.attr('src', '/assets/VERSION_MOVIL/clientes2.jpg');
    clientes3.attr('src', '/assets/VERSION_MOVIL/clientes1.jpg');

} else {
    cvimg.attr('src', '/assets/PC/BANNER_BIO/BIO.jpg');
    frase.attr('src', '/assets/PC/BANNER_FRASE/FRASE.png');
    clientes1.attr('src', '/assets/PC/BANNERS_CLIENTES/C1.jpg');
    clientes2.attr('src', '/assets/PC/BANNERS_CLIENTES/C2.jpg');
    clientes3.attr('src', '/assets/PC/BANNERS_CLIENTES/C3.jpg');

}
//Evento Scroll
$(document).on('scroll', function () {


    let distanceNav = navDesktop.offset().top;
    let distanceMobileNav = navDesktop.offset().top;

    let distanceServicio = servicios.offset().top;

    let scrolly = $(window).scrollTop();
    if (scrolly > (distanceServicio) / 2) {
        servicios.addClass('animate__animated animate__fadeInLeft');
    }
    //sticky Navs
    if (scrolly > distanceNav) {
        navDesktop.addClass("fixed-top");
    } else if (scrolly < carDesktop.height()) {
        navDesktop.removeClass("fixed-top");
    }
    if (scrolly > carMobile.height()) {
        navMobile.addClass("fixed-top");

    }
    if (scrollY == 0) {
        navMobile.removeClass("fixed-top");

    }

})

//FIN EVENTO SCROLL
//Envio de Mail - FORM DESKTOP

$("#form-desktop").submit(function (event) {
    event.preventDefault();

    if ($("#mensaje").val() != '') {
        $.post("email.php", {
            nombre: $("#nombre").val(),

            mail: $("#email").val(),
            tel: $("#tel").val(),
            text: $("#mensaje").val()
        }, function (data, status) {
            if (data) {
                Swal.fire({
                    title: '¡Gracias!',
                    text: 'Su mensaje ha sido enviado exitosamente',
                    icon: 'success',

                    confirmButtonText: 'Salir',

                })

                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);
                $("#mensaje").val('');
                $("#tel").val('');
                $("#email").val('');
                $("#nombre").val('');


            } else {
                // $("#mensaje-result").append("<div class='fail' id='ap-men'>Mensaje no enviado</div>");
                Swal.fire({
                    title: 'Error',
                    text: 'El mensaje no pudo ser enviado. Disculpamos las molestias.',
                    icon: 'error',

                    confirmButtonText: 'Adelante!',

                })

                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);

            }
        });
    } else {
        $("#mensaje-result").append("<div class='fail' id='ap-men'>Debe escribir un mensaje</div>");

        setTimeout(() => {

            $("#ap-men").remove();
        }, 5000);

    }





});
//FIN FORM DESKTOP


//Envio de Mail - FORM MOBILE

$("#form-mobile").submit(function (event) {
    event.preventDefault();

    if ($("#mensaje-mobile").val() != '') {
        $.post("email.php", {
            nombre: $("#nombre-mobile").val(),

            mail: $("#email-mobile").val(),
            tel: $("#tel-mobile").val(),
            text: $("#mensaje-mobile").val(),

            agree: $("#agree").val()
        }, function (data, status) {
            if (data) {
                Swal.fire({
                    title: '¡Gracias!',
                    text: 'Su mensaje ha sido enviado exitosamente',
                    icon: 'success',
                    confirmButtonText: 'Salir'
                })

                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);
                $("#mensaje-mobile").val('');
                $("#tel-mobile").val('');
                $("#email-mobile").val('');
                $("#nombre-mobile").val('');


            } else {
                Swal.fire({
                    title: 'Error',
                    text: 'El mensaje no pudo ser enviado. Disculpamos las molestias.',
                    icon: 'error',

                    confirmButtonText: 'Adelante!',

                })


                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);

            }
        });
    } else {
        $("#mensaje-result2").append("<div class='fail' id='ap-men'>Debe escribir un mensaje</div>");

        setTimeout(() => {

            $("#ap-men").remove();
        }, 5000);

    }





});
//FIN FORM MOBILE


//cambiar imagen en mobile
$(window).resize(function () {

    if ($(window).width() <= breakpoint) {
        cvimg.attr('src', '/assets/VERSION_MOVIL/cv2.jpg');
        frase.attr('src', '/assets/VERSION_MOVIL/frase.jpg');
        clientes1.attr('src', '/assets/VERSION_MOVIL/clientes1.jpg');
        clientes2.attr('src', '/assets/VERSION_MOVIL/clientes2.jpg');
        clientes3.attr('src', '/assets/VERSION_MOVIL/clientes1.jpg');

    } else {
        cvimg.attr('src', '/assets/PC/BANNER_BIO/BIO.jpg');
        frase.attr('src', '/assets/PC/BANNER_FRASE/FRASE.png');
        clientes1.attr('src', '/assets/PC/BANNERS_CLIENTES/C1.jpg');
        clientes2.attr('src', '/assets/PC/BANNERS_CLIENTES/C2.jpg');
        clientes3.attr('src', '/assets/PC/BANNERS_CLIENTES/C3.jpg');

    }
})