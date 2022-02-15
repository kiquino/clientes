let items = document.querySelectorAll('.hover-element');
items.forEach(element => {
    element.addEventListener('click', function () {
        let dir = element.getAttribute('id');
        switch (dir) {

            case 'p-2':
                window.location.href = window.location.origin + "/products/nuematica";
                break;
            case 'p-3':
                window.location.href = window.location.origin + "/products/hidraulica";
                break;
            case 'p-4':
                window.location.href = window.location.origin + "/products/filtros-y-aceites";
                break;
            case 'p-5':
                window.location.href = window.location.origin + "/products/aceites";
                break;
            case 's2':
                window.location.href = window.location.origin + "/servicios/mantenimiento-de-sistemas-hidraulicos";
                break;
            case 's1':
                window.location.href = window.location.origin + "/servicios/mantenimiento-de-compresores";
                break;
            case 's3':
                window.location.href = window.location.origin + "/servicios/desarrollo-e-instalaciones";
                break;
            case 'sm2':
                window.location.href = window.location.origin + "/servicios/mantenimiento-de-sistemas-hidraulicos";
                break;
            case 'sm1':
                window.location.href = window.location.origin + "/servicios/mantenimiento-de-compresores";
                break;
            case 'sm3':
                window.location.href = window.location.origin + "/servicios/desarrollo-e-instalaciones";
                break;
        }
    })
});
//agarrar elementos//



//FIN agarrar elementos //

//scroll NAV//
$(document).on('scroll', function () {
    let altura1 = $("#1").height();
    let scrolly = $(window).scrollTop();
    let navDesktop = $("#nav-desktop");
    if (scrolly >= altura1) {

        navDesktop.addClass("fixed-top");
    } else if (scrolly < altura1) {
        navDesktop.removeClass("fixed-top");
    }
})

//email
$("#form").submit(function (event) {
    event.preventDefault();

    if ($("#mensaje").val() != '') {
        $.post("email.php", {
            nombre: $("#nombre").val(),

            mail: $("#exampleInputEmail1").val(),
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
                $("#exampleInputEmail1").val('');
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