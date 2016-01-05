$(document).ready(function() {
  var contenedor = $('#contenedor_1').html();
  var i = 2;
  $("#btn").on('click', function(e){
    e.preventDefault();

    // contenedor.attr('id', 'contenedor_' + i);
    
    $('#contenedor_' + (i -1)).after('<div id="contenedor_' + i + '" class="contenedor"> ' + contenedor + '</div>');
    $('#contenedor_' + i + ' label').text('Interes ' + i);
    $('#contenedor_' + i + ' input').attr({
      id: 'interes' + i,
      name: 'interes' + i
    });
    // alert(contenedor.html());
    // $('body').append(contenedor.html());
    i++;
  });

  $('#btn_eliminar').on('click', function(e) {
    e.preventDefault();
    if(i > 2){
      $('#contenedor_' + (i -1)).remove();
      i--;
    } else {
      alert("no se puede eliminar el ultimo elemento");
    }
  });
  
  
});