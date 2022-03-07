$("#login").submit(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../actions/login-ajax.php",
        data: $(this).serialize(),
        dataType: "json",
        beforeSend: function () {
        }
        })
        .done( function (response) {
          
            
        })
        .fail( function (res) {
            console.log(res);
       
        })
       
    });
