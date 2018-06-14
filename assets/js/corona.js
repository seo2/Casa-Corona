// The scroll-up function
function scrollUp() {
  var vheight = $(window).height();
  $('html, body').animate({
    scrollTop: (Math.ceil($(window).scrollTop() / vheight)-1) * vheight
  }, 500);
};

// The scroll-down function
function scrollDown() {
  var vheight = $(window).height();
  $('html, body').animate({
    scrollTop: (Math.floor($(window).scrollTop() / vheight)+1) * vheight
  }, 500);  
};

// Do stuff when document is ready
$(document).ready(function(){
  
  // Resize Container Function
//   resize(); 
  
  // Click to Scroll DOWN Functions
  $('.baja').click(function(event){
    scrollDown();
    event.preventDefault();
  });
  
  // Click to Scroll UP Functions
  $('.scroll-prev').click(function(event){
    scrollUp();
    event.preventDefault();
  });
  
});
var fecha = '';

$('.btn-fecha.on').on('click',function(){
	$('.btn-fecha').removeClass('active');
	$(this).addClass('active');
	fecha  = $(this).data('fecha');
	$('#fecha').val(fecha);
	$('#formulario').removeClass('d-none');
	$('html, body').animate({
        scrollTop: $("#formulario").offset().top
    }, 2000);
});


$(".rut")
  .rut({formatOn: 'keyup', validateOn: 'keyup'})
  .on('rutInvalido', function(){ 
    $(this).removeClass("valid");
    $(this).addClass("invalid");
    error = 1;
  })
  .on('rutValido', function(){ 
    $(this).removeClass("invalid");
    $(this).addClass("valid");
    error = 0;
  });
  
var v1 = $("form").validate({
	submitHandler: function(form) {
		
		if(fecha != ''){
			$(form).ajaxSubmit({
			beforeSubmit: function() { 
// 				$('#form1 form button').html('Enviar <span class="fa-li"><i class="fas fa-spinner fa-pulse"></i></span>');					
			},
			 success:    function(data) { 
		        console.log(data);
		        if(data == "error"){
		        	$('.alert').fadeIn();
		        	$('.alert').removeClass('alert-success');
		        	$('.alert').removeClass('alert-warning');
		        	$('.alert').addClass('alert-danger');
		        	$('.alert span#alerta').html('Existen errores en el formulario. Favor corregir y vuelve a intentarlo.');
		        }else if(data == "ok"){
/*
		        	gtag('config', 'UA-116961218-1', {
		        	 'page_path': '/inscrito'
		        	});
*/
/*
		        	$('.alert').fadeIn();
		        	$('.alert').removeClass('alert-warning');
		        	$('.alert').removeClass('alert-danger');
		        	$('.alert').addClass('alert-success');
*/
		        	//$('.alert span#alerta').html('Gracias, los datos han sido enviados con éxito.');
		        	window.location.replace("gracias.php#landing-form");
// 		        	v1.resetForm();
		       
		        }else if(data == "existe"){
		        	$('.alert').fadeIn();
		        	$('.alert').removeClass('alert-success');
		        	$('.alert').removeClass('alert-danger');
		        	$('.alert').addClass('alert-warning');
		        	$('.alert span#alerta').html('Sólo te puedes inscribir una vez por fecha.');
		        }
// 		        	$('#form1 form button').html('Enviar');
// 		        	setTimeout(function(){ $('.alert-success').fadeOut() }, 3000);
		    } 
		});
		}else{
        	$('.alert').fadeIn();
        	$('.alert').removeClass('alert-success');
        	$('.alert').removeClass('alert-danger');
        	$('.alert').addClass('alert-warning');
        	$('.alert span#alerta').html('Debes seleccionar una fecha arriba primero.');
		}
	}
});  


        
            
            
            
  