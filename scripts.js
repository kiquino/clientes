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