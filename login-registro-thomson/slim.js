$('input').focusin(function () {
    $(this).parent('div').addClass("b-i");
})
$('input').focusout(function () {
    $(this).parent('div').removeClass("b-i");
})