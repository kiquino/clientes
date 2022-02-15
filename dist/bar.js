let lbar = new ldBar(".ldBar", {
    value: 0
})
window.onload = function () {

    bar(100);
    end();




}

function bar(param) {
    lbar.set(param);

}

function end() {
    setTimeout(function () {
        $('#contenedor-bar').fadeOut("slow", function () {
            $('#contenedor-bar').addClass('d-none')
        })
    }, 3000);

};