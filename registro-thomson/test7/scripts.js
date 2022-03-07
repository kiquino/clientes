$(function () {



  $("#exit-form").on("click", function () {

    $(".tarjeta").animate({

      right: -$(".tarjeta").width()

    });
  });
  $(".boton-registro").on("click", function () {

    $(".tarjeta").animate({

      right: $(".tarjeta").width() / ($(".tarjeta").width() / 2)

    });
  });

  $(".solapa-registro").on("click", function () {
    $(".tarjeta").animate({

      right: $(".tarjeta").width() / ($(".tarjeta").width() / 2)

    });
  })
})

function handleFormSubmit(ele) {
  $(function () {
    $.ajax({
      type: 'post',
      url: 'forward.php',
      data: $("#form4529").serialize(),
      beforeSend: function () {


      },

      success: function (respond) {

        window.open('https://webinarbms.com/thomson/test6/sendmail.php?email=' + $(".email_ajax").val(), '_parent');




      },
      fail: function (respond) {

      }
    });
  });

  var submitButton = ele.querySelector('input[type=submit]');

  var spinner = document.createElement('span');

  spinner.setAttribute('class', 'loader');

  submitButton.setAttribute('disabled', true);

  submitButton.style.cursor = 'wait';

  submitButton.parentNode.appendChild(spinner);

  $(function () {
    $.ajax({
      type: 'post',
      url: 'forward.php',
      data: $("#form4529").serialize(),
      beforeSend: function () {


      },

      success: function (respond) {

        window.open('https://webinarbms.com/thomson/test6/sendmail.php?email=' + $(".email_ajax").val(), '_parent');




      },
      fail: function (respond) {

      }
    })
  })

  return true;

}

function resetSubmitButton(e) {

  var submitButtons = e.target.form.getElementsByClassName('submit-button');

  for (var i = 0; i < submitButtons.length; i++) {

    submitButtons[i].disabled = false;

  }

}

function addChangeHandler(elements) {

  for (var i = 0; i < elements.length; i++) {

    elements[i].addEventListener('change', resetSubmitButton);

  }

}

var form = document.getElementById('form4529');

addChangeHandler(form.getElementsByTagName('input'));

addChangeHandler(form.getElementsByTagName('select'));

addChangeHandler(form.getElementsByTagName('textarea'));

var nodes = document.querySelectorAll('#form4529 input[data-subscription]');

if (nodes) {

  for (var i = 0, len = nodes.length; i < len; i++) {

    var status = nodes[i].dataset ? nodes[i].dataset.subscription : nodes[i].getAttribute('data-subscription');

    if (status === 'true') {

      nodes[i].checked = true;

    }

  }

};

var nodes = document.querySelectorAll('#form4529 select[data-value]');

if (nodes) {

  for (var i = 0; i < nodes.length; i++) {

    var node = nodes[i];

    var selectedValue = node.dataset ? node.dataset.value : node.getAttribute('data-value');

    if (selectedValue) {

      for (var j = 0; j < node.options.length; j++) {

        if (node.options[j].value === selectedValue) {

          node.options[j].selected = 'selected';

          break;

        }

      }

    }

  }

}

this.getParentElement = function (list) {

  return list[list.length - 1].parentElement
};

var dom0 = document.querySelector('#form4529 #fe52859');

var fe52859 = new LiveValidation(dom0, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52859.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom1 = document.querySelector('#form4529 #fe52860');

var fe52860 = new LiveValidation(dom1, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52860.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom2 = document.querySelector('#form4529 #fe52861');

var fe52861 = new LiveValidation(dom2, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52861.add(Validate.Format, {

    pattern: /^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i,
    failureMessage: "A valid email address is required"
  }

);

fe52861.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom3 = document.querySelector('#form4529 #fe52862');

var fe52862 = new LiveValidation(dom3, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52862.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom4 = document.querySelector('#form4529 #fe52863');

var fe52863 = new LiveValidation(dom4, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52863.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom5 = document.querySelector('#form4529 #fe52864');

var fe52864 = new LiveValidation(dom5, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52864.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom6 = document.querySelector('#form4529 #fe52865');

var fe52865 = new LiveValidation(dom6, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52865.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom7 = document.querySelector('#form4529 #fe52866');

var fe52866 = new LiveValidation(dom7, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52866.add(Validate.Custom, {

    against: function (value) {

        return !value.match(/(telnet|ftp|https?):\/\/(?:[a-z0-9][a-z0-9-]{0,61}[a-z0-9]\.|[a-z0-9]\.)+[a-z]{2,63}/i);

      }

      ,
    failureMessage: "Value must not contain any URL's"
  }

);

fe52866.add(Validate.Custom, {

    against: function (value) {

        return !value.match(/(<([^>]+)>)/ig);

      }

      ,
    failureMessage: "Value must not contain any HTML"
  }

);

fe52866.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom8 = document.querySelector('#form4529 #fe53365');

var fe53365 = new LiveValidation(dom8, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe53365.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom10 = document.querySelector('#form4529 #fe52869');

var fe52869 = new LiveValidation(dom10, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

fe52869.add(Validate.Presence, {

    failureMessage: "This field is required"
  }

);

var dom17 = document.querySelector('#form4529 #fe53364');

var fe53364 = new LiveValidation(dom17, {

    validMessage: "",
    onlyOnBlur: false,
    wait: 300
  }

);

$(document).ready(function () {
  if (Modernizr.mq('(min-width:1024px)')) {

    $('.carrousel-speaks').slick({
      lazyLoad: 'ondemand',
      arrows: true,
      slidesToShow: 3,
      dots: true,
      focusOnSelect: false,
      slidesToScroll: 1

    });
    $('.contenedor-imagenes').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 3,
      arrows: true,
      dots: true,
      focusOnSelect: false,
      slidesToScroll: 1
    });
    $('.carrousel-artics').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 2,
      arrows: true,
      dots: true,
      focusOnSelect: false,
      slidesToScroll: 1
    });
    $('.carrousel-expositores').slick({
      lazyLoad: 'ondemand',
      arrows: true,
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      focusOnSelect: false
    });
    $('.agenda2-gral').slick({
      centerMode: true,
      centerPadding: '60px',
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 3,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        }
      ]
    });
  } else if (Modernizr.mq('(max-width: 800px)')) {
    $('.carrousel-speaks').slick({
      lazyLoad: 'ondemand',
      arrows: true,
      slidesToShow: 1,
      dots: true,
      focusOnSelect: false,
      slidesToScroll: 1

    });
    $('.contenedor-imagenes').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 1,
      arrows: true,
      dots: true,
      focusOnSelect: false,
      slidesToScroll: 1
    });
    $('.carrousel-artics').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 1,
      arrows: true,
      dots: true,
      focusOnSelect: false,
      slidesToScroll: 1
    });
    $('.carrousel-expositores').slick({
      lazyLoad: 'ondemand',
      arrows: true,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      focusOnSelect: false
    });
    $('.agenda2-gral').slick({
      centerMode: true,
      centerPadding: '60px',
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 1,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });

  } else {
    $('.agenda2-gral').slick({
      centerMode: true,
      centerPadding: '60px',
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 3,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
    $('.carrousel-speaks').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 2,
      focusOnSelect: false,
      slidesToScroll: 1
    });
    $('.contenedor-imagenes').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 3,
      focusOnSelect: false,
      slidesToScroll: 1
    });
    $('.carrousel-expositores').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 3,
      focusOnSelect: true,
      accessibility: true,
      slidesToScroll: 1
    });
    $('.carrousel-artics').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 2,
      focusOnSelect: false,
      autoPlay: true,
      slidesToScroll: 1
    });
  }

});

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