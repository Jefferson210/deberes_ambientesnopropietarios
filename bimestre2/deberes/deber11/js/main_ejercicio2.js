$(document).ready(function(){

  /*Crear un documento con una tabla. Poner el fondo de las filas pares
  en rojo. A continuación poner el fondo de las filas impares en verde*/
  $('.fila_par').css("background-color", "red");
  $('.fila_impar').css("background-color", "green");

  $(".fila_par").hover(
    function(){
        $(this).css("background-color", "green");
    }, 
    function(){
      $(this).css("background-color", "red");
    }
  );

  $(".fila_impar").hover(
    function(){
        $(this).css("background-color", "red");
    }, 
    function(){
      $(this).css("background-color", "green");
    }
  );

  /*Utilizar el evento hover para mostrar un mensaje en un d#mensaje
  cuando nos posicionamos sobre un el y otro cuando salgamos de el.*/
  $("#div2").hover(
    function(){
        $(this).html("<p style='color:red;'>Dentro</p>");
    }, 
    function(){
      $(this).html("<p style='color:red;'>Fuera</p>");
    }
  );

  /*Utilizar los métodos focus() y blur() para cambiar el color de dos
  cuadros de texto cuando posicionamos el foco y cuando lo retiramos*/
  $("input").focus(function(){
        $(this).css("background-color", "green");
    });

  $("input").blur(function(){
        $(this).css("background-color", "red");
    });

});