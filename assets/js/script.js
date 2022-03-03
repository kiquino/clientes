$(document).ready(function() {
            $('.menu').click(function() {
                $('ul').slideToggle('active');
            });


            $(window).scroll(function() {

                    var wScroll = $(this).scrollTop();

                    if (wScroll > $('.contenedor-tarjetas-main').offset().top - ($(window).height() / 1.2)) {

                        $('.tarjetas-info-main').each(function(i) {

                            setTimeout(function() {
                                $('.tarjetas-info-main').eq(i).addClass('aparece');
                            }, 150 * (i + 1));
                        });



                        
                    });
            });