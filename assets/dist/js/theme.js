function detectmob() { 
	if( navigator.userAgent.match(/Android/i)
	   || navigator.userAgent.match(/webOS/i)
	   || navigator.userAgent.match(/iPhone/i)
	   || navigator.userAgent.match(/iPad/i)
	   || navigator.userAgent.match(/iPod/i)
	   || navigator.userAgent.match(/BlackBerry/i)
	   || navigator.userAgent.match(/Windows Phone/i)
	  ){
		return true;
	}
	else {
		return false;
	}
}

$(document).ready(function() {
	
    var headerHeight = $('header').outerHeight(); // Target your header navigation here
      
    $('.navbar li a').click(function(e) {
        
        var targetHref   = $(this).attr('href');

        var addHeight = 180;
        if (detectmob()) {
            var addHeight = 300;
            $('.navbar-toggler').trigger('click');
        }
        
      $('html, body').animate({
          scrollTop: $(targetHref).offset().top - (headerHeight + addHeight) // Add it to the calculation here
      }, 1000);
      
      e.preventDefault();
    });
  });


$(function(){
    
    var masksTelefone = ['(00) 00000-0000', '(00) 0000-00009']

    $('.mask-telefone').mask(masksTelefone[1], {
        onKeyPress: function (val, e, field, options) {
            field.mask(val.length > 14 ? masksTelefone[0] : masksTelefone[1], options)
        }
    })
    
    var navbar = $('.navbar');

    $(window).scroll(function () {

        var scroll = $(window).scrollTop();

        if (scroll > 10) {
            navbar.addClass('nav-scroll');
        } else {
            navbar.removeClass('nav-scroll');        
        }
    });


    $('#frmContact').on('submit', function(e){
        
        e.preventDefault();

        var formData = {
            Name: $("#Name").val(),
            Email: $("#Email").val(),
            Whatsapp: $("#Whatsapp").val(),
            Message: $("#Message").val(),
          };
    
        $('#frmContact input').removeClass('has-error');
                
        $('.alert').remove();
    
        $('.input-error').text('');
    
            $.ajax({
                //url: form.attr('action'),
                url: 'sendEmail',
                method: 'POST',
                data: formData,
                cache: false,
                dataType: 'JSON',
                success: function (data) {
                    if (data.success) {
                        $('.cf-msg').html('');
                        $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Sucesso!</strong> ' + data.mensagem + '</div>');
                        setTimeout(function () {
                            $('.cf-msg').fadeOut('slow');
                        }, 5000);
    
                        form.trigger('reset');
    
                    } else {
                        
                        $('.cf-msg').html('');
                        $.each(data.errors, function (key, value) {
                            $("#" + key).addClass("has-error");
                            $(".small-error." + key).text(value);
                            $(".small-error." + key).show();
                        });
    
    
                        if (data.length > 0){
                            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Não foi possível enviar sua mensagem!!</strong> Preencha os dados corretamente ' + data.mensagem  + ' </div > ');
                        }
    
                        if (data.mensagem != undefined && data.mensagem != "") {
                            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Não foi possível enviar sua mensagem!!</strong> ' + data.mensagem + '</div > ');
                            console.log(data.mensagem);
                        }
                    }
                },
                error: function (err) {
                    $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Não foi possível enviar sua mensagem!!</strong> Aguarde alguns instantes e tente novamento</div > ');
                    console.log(err);
                }
            });        
    })
})