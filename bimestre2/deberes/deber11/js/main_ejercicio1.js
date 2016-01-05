$(document).ready(function(){

  /*Crear un documento HTML con un encabezado, dos párrafos y un
  botón. Al pulsar el botón se debe ocultar todo el HTML.*/
  // $('#btn').on('click',function(e){
  //   $('*').hide();
  // });

  /*Basado en el anterior. Ahora al pulsar el botón debe ocultarse dicho
  botón.*/
  // $('#btn').on('click',function(e){
  //   $('#btn').hide();
  // });

  /*Basado en el ejercicio anterior. Suponemos que el encabezado y el
  primer párrafo tienen el atributo class=“intro”.Deberás ocultar dicho
  párrafo al darle clic al botón.*/
  // $('#btn').on('click',function(e){
  //   $('p.intro').hide();
  // });


  /*Seleccionar el primer elemento de la primera lista y ocultarlo al darle
  click a este elemento.*/
  //event.preventDefault();
  // $('#elemento1').on('click',function(e){
  //   $('#elemento1').hide();
  // });

  /*Ahora ocultar los primeros elementos de las dos listas.*/
  $('.ocultar').on('click',function(e){
     event.preventDefault();
     $('#elemento'+$(this).attr('target')).hide();
  });

});