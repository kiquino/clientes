//Evento Scroll
$(document).on('scroll', function () {

    let distanceNav = navDesktop.offset().top;
    let distanceMobileNav = navDesktop.offset().top;

    let posicionY = ($("#counter1").offset().top) - (($("#card-containers").height()));
    let scrolly = $(window).scrollTop();
    let posicionY2 = ($("#counter2").offset().top) - (($("#card-containers").height()));
    let posicionY3 = ($("#counter3").offset().top) - (($("#card-containers").height()));
    let posicionY4 = ($("#counter4").offset().top) - (($("#card-containers").height()));
    let posicionY5 = ($("#counter5").offset().top) - (($("#card-containers").height()));
    let posicionY6 = ($("#counter6").offset().top) - (($("#card-containers").height()));
    if (scrolly >= posicionY) {
        c1.start();
    }
    if (scrolly >= posicionY2) {
        c2.start();
    }
    if (scrolly >= posicionY3) {
        c3.start();
    }
    if (scrolly >= posicionY4) {
        c4.start();
    }
    if (scrolly >= posicionY5) {
        c5.start();
    }
    if (scrolly >= posicionY6) {
        c6.start();
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
                $("#mensaje-result").append("<div class='success' id='ap-men'>Mensaje enviado</div>");

                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);
                $("#mensaje").val('');
                $("#tel").val('');
                $("#email").val('');
                $("#nombre").val('');


            } else {
                $("#mensaje-result").append("<div class='fail' id='ap-men'>Mensaje no enviado</div>");

                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);

            }
        });
    } else {
        $("#mensaje-result").append("<div class='fail' id='ap-men'>Debe escribir un mensaje</div>");

        setTimeout(() => {

            $("#ap-men").remove();
        }, 15000);

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
                $("#mensaje-result").append("<div class='success' id='ap-men'>Mensaje enviado</div>");

                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);
                $("#mensaje-mobile").val('');
                $("#tel-mobile").val('');
                $("#email-mobile").val('');
                $("#nombre-mobile").val('');


            } else {
                $("#mensaje-result").append("<div class='fail' id='ap-men'>Mensaje no enviado</div>");

                setTimeout(() => {

                    $("#ap-men").remove();
                }, 15000);

            }
        });
    } else {
        $("#mensaje-result").append("<div class='fail' id='ap-men'>Debe escribir un mensaje</div>");

        setTimeout(() => {

            $("#ap-men").remove();
        }, 15000);

    }





});
//FIN FORM MOBILE