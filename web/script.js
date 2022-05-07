$("#form-desktop").submit(function (event) {
    event.preventDefault();
    $("#submit-desktop").prop('disabled', true);
    $("#nombre").prop('disabled', true);
    $("#email").prop('disabled', true);
    $("#mensaje").prop('disabled', true);
    $("#tel").prop('disabled', true);
    if ($("#mensaje").val() != '') {
        $.post("mail.php", {
            nombre: $("#nombre").val(),

            mail: $("#email").val(),
            tel: $("#tel").val(),
            text: $("#mensaje").val()
        }, function (data, status) {
            console.log(status)
            if (data) {
                Swal.fire({
                    title: '¡Gracias!',
                    text: 'Su mensaje ha sido enviado exitosamente',
                    icon: 'success',

                    confirmButtonText: 'Salir',

                })
                $("#submit-desktop").prop('disabled', false);
                $("#nombre").prop('disabled', false);
                $("#email").prop('disabled', false);
                $("#mensaje").prop('disabled', false);
                $("#tel").prop('disabled', false);
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

// $("#form-mobile").submit(function (event) {
//     event.preventDefault();
//     $("#submit-mobile").prop('disabled', true);
//     $("#nombre-mobile").prop('disabled', true);
//     $("#email-mobile").prop('disabled', true);
//     $("#mensaje-mobile").prop('disabled', true);
//     $("#tel-mobile").prop('disabled', true);

//     if ($("#mensaje-mobile").val() != '') {
//         $.post("mail.php", {
//             nombre: $("#nombre-mobile").val(),

//             mail: $("#email-mobile").val(),
//             tel: $("#tel-mobile").val(),
//             text: $("#mensaje-mobile").val(),

//             agree: $("#agree").val()
//         }, function (data, status) {
//             console.log(status)
//             if (data) {
//                 Swal.fire({
//                     title: '¡Gracias!',
//                     text: 'Su mensaje ha sido enviado exitosamente',
//                     icon: 'success',
//                     confirmButtonText: 'Salir'
//                 })
//                 $("#submit-mobile").prop('disabled', false);
//                 $("#mensaje-mobile").prop('disabled', false);
//                 $("#nombre-mobile").prop('disabled', false);
//                 $("#email-mobile").prop('disabled', false);
//                 $("#tel-mobile").prop('disabled', false);
//                 setTimeout(() => {

//                     $("#ap-men").remove();
//                 }, 15000);
//                 $("#mensaje-mobile").val('');
//                 $("#tel-mobile").val('');
//                 $("#email-mobile").val('');
//                 $("#nombre-mobile").val('');


//             } else {
//                 Swal.fire({
//                     title: 'Error',
//                     text: 'El mensaje no pudo ser enviado. Disculpamos las molestias.',
//                     icon: 'error',

//                     confirmButtonText: 'Adelante!',

//                 })


//                 setTimeout(() => {

//                     $("#ap-men").remove();
//                 }, 15000);

//             }
//         });
//     } else {
//         $("#mensaje-result2").append("<div class='fail' id='ap-men'>Debe escribir un mensaje</div>");

//         setTimeout(() => {

//             $("#ap-men").remove();
//         }, 5000);

//     }





// });
let windowHeight = $(window).height();
let windowWidth = $(window).width();
console.log(windowHeight + " - " + windowWidth)
$(window).resize(function () {
    // This will execute whenever the window is resized
    windowHeight = $(window).height(); // New height
    windowWidth = $(window).width(); // New width

});

let btnBurger = document.querySelector(".burger-menu");
let MobileBody = document.querySelector(".mobile-body");
btnBurger.addEventListener("click", function () {
    MobileBody.classList.toggle("active");
})