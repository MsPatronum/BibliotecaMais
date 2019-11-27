//var lw = $(window).width();

//<![CDATA[
jQuery(document).ready(function() {
    //Inicio Mascara Telefone
    jQuery('#phone').mask("(99) 99999-999?9").ready(function(event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();
        if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    });
    //Fim Mascara Telefone
   
});
(jQuery);
//]]>
   






// resize window
$(window).resize(function(){
var lw = $(window).width();
//$('#w').html(lw);
if(lw>767){
  $('#menu-main,#nav-fixed').css('display','block');
  $("#logotipo").attr("src","img/logotipo.png");
  }else{
    $('#menu-main,#nav-fixed').css('display','none');
     $("#logotipo").attr("src","img/logotipo-small.png");
  }
});//----------

// menu responsivo
$('.icon-menu').click(function(){

  $('#menu-main').toggle('slow');
  //$('.icon-menu span').toggleClass('glyphicon glyphicon-remove');
  
});//------------------

// menu fixed responsivo
$('#fixed-icon-menu').click(function(){

  $('#fixed-top #nav-fixed').toggle('slow');
  //$('.icon-menu span').toggleClass('glyphicon glyphicon-remove');
});

$('#fixed-top #nav-fixed li a').click(function(){
    var lg = $(window).width();
    if(lg<768){
      $('#nav-fixed,#menu-main').hide();  
    }
    
});
//------------------


// efeito parallax
$('div.parallax').each(function(){
  var $obj = $(this);
 
  $(window).scroll(function() {

    var yPos = -($(window).scrollTop() / $obj.data('speed')); 
 
    var bgpos = '50% '+ yPos + 'px';
 
    $obj.css('background-position', bgpos );
 
  }); 
});//-----------------------

// header show scroll
$(window).scroll(function(){
var scroll = $(window).scrollTop();
var header_height = $('#container-header').height();
  if(scroll>header_height){
    $('#fixed-top').fadeIn('slow');
    
  }else{
     $('#fixed-top').fadeOut('slow');
  }
});//---------------






$(document).ajaxStart(function(){
  $(".loader").html('<img src="img/loader.gif" /> Enviando...');
});

$(document).ajaxComplete(function(){
  $(".loader").css("display","none");
});

// ------------------------------ funcao duvida -----

$('#form_duvidas').submit(function(){
            
            var dados = $( this ).serialize();
            
            
            $.ajax({
                type: "POST",
                url: "envia-duvidas.php",
                data: dados,
                success: function(data){
                  var resultado = data;
                         
                         if(resultado!=1){
           dados = resultado.split("-");
           $(dados[0]).focus();
           $(dados[1]).html(dados[2]);
                      //alert(resultado);
                      }
                      else{
                      $('#email-ok').html("<span class='glyphicon glyphicon-ok'></span> e-mail enviado com sucesso, em breve entraremos em contato!");
                       // alert(resultado);   
                            }

                                        }, // fim success
    
                    complete:function(){
                        
                    /*$('#email').css("display","none");
                    $('#email-ok').css("display","block");*/
                                   }
            });
            
            return false;
        }); // fim da função








// img logo responsive

function img_logo(){

var janela = $(window).width();

if(janela<768){
  $("#logotipo").attr("src","img/logotipo-small.png");
}else{
   $("#logotipo").attr("src","img/logotipo.png");
    }
}

img_logo();
//-------------------

//---- links

$(function(){
  $(".link-menu").click(function (event) {
    event.preventDefault();
    var idElemento = $(this).attr("href");
    var deslocamento = ($(idElemento).offset().top)-80;
   // alert(deslocamento);
   $('html, body').animate({ scrollTop: deslocamento }, 'slow');
   });
});

//----------

//slides----


      jQuery("#gallery").unitegallery();
      

   
//----------




