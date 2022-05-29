$("#form-desktop").submit(function (event) {
    event.preventDefault();
    $("#submit-desktop").prop('disabled', true);
    $("#nombre").prop('disabled', true);
    $("#email").prop('disabled', true);
    $("#mensaje").prop('disabled', true);
    $("#tel").prop('disabled', true);
    $("#pais").prop('disabled', true);
    $("#localidad").prop('disabled', true);
    if ($("#mensaje").val() != '') {
        $.post("mail.php", {
            nombre: $("#nombre").val(),
            pais: $("#pais").val(),
            localidad: $("#localidad").val(),
            mail: $("#email").val(),
            tel: $("#tel").val(),
            text: $("#mensaje").val()
        }, function (data) {
            console.log(data);
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
                    text: 'El mensaje no pudo ser enviado. Por favor espere un momento y si el error persista, por favor cominiquese al +54 9 2215 95-1010',
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