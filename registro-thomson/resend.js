$(function() {



    $("#exit-form").on("click", function() {

        $(".tarjeta").animate({

            right: -$(".tarjeta").width()

        });
    });
    $(".boton-registro").on("click", function() {

        $(".tarjeta").animate({

            right: $(".tarjeta").width() / ($(".tarjeta").width() / 2)

        });
    });

    $(".solapa-registro").on("click",function () {
        $(".tarjeta").animate({

            right: $(".tarjeta").width() / ($(".tarjeta").width() / 2)

        });
    })
})


/*$(function() {
    $("#form4529").on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'forward.php',
            data: $("#form4529").serialize(),
            beforeSend: function() {


            },

            success: function(respond) {

                if (respond == true) {

                } else {

                }


            }
        })
    })

})*/