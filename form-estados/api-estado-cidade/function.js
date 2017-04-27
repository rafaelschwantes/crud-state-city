/**
 * Created by rafaelschwantes on 21/03/2017.
 */
$(function(){

    // Lista de Continentes
    $.post( './api-estado-cidade/api-estados.php' ).done( function(respuesta)
    {
        $( '#estados' ).html( respuesta );
    });

    // lista de Cidades
    $('#estados').change(function()
    {
        var el_continente = $(this).val();

        // Lista de Paises
        $.post( './api-estado-cidade/api-cidades.php', { estado: el_continente} ).done( function( respuesta )
        {
            $( '#cidades' ).html( respuesta );
        });
    });

    /* Lista de Ciudades
     /$( '#cidades' ).change( function()
     {
     var pais = $(this).children('option:selected').html();
     alert( 'Lista de Ciudades de ' + pais );
     });*/

})