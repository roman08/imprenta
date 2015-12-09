/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $(function () {
        $("#search").autocomplete({
            source: "{!!URL::route('ventas')!!}",
            minLength: 2,
            type: "GET",
            dataType: "json",
            select: function (event, ui) {
                $('#response').val(ui.item.id);
            }
        });
    });
});



//buscardor completo
//autocompleter para la RFC de los copropietarios
        $('body').on('keyup','#search',function () {
             //Estas son las opciones con las que se construye el autocomplete, como son comunes a los dos inputs rfc y curp se sacan para reutlizar
            var autoCompleteOptsAdquiriente = {
                source: "/ofvirtual/notario/registro/adquiriente", //Ruta al controlador que provee los resultados de la busqueda
                minLength: 5, //Empezamos a mandar los teclazos si han tecleado 8 caracteres
                select: function (event, ui) {
                    //Al seleccionar un valor de los desplegados rellenamos los campos
                var rfc = 'copropietario[0][rfc]';
                var nombres = 'copropietario[0][nombres]';
                var num = parseInt($(this).prop("name").match(/\d+/g), 10) ;
                rfc = rfc.replace(/(\w+)\[(\d+)\]\[(\w+)\]/, "$1[" + num + "][$3]");
                nombres = nombres.replace(/(\w+)\[(\d+)\]\[(\w+)\]/, "$1[" + num + "][$3]");
                $('#' +  rfc.replace( /(:|\.|\[|\]|,)/g, "\\$1" )).val(ui.item.rfc);
                $('#' +  nombres.replace( /(:|\.|\[|\]|,)/g, "\\$1" )).val(ui.item.nombres);

                    return false;
                }
            };
            //Se crea autocompleter de CURP
            $('#search).autocomplete(autoCompleteOptsAdquiriente).autocomplete("instance")._renderItem = function (ul, item) {
                return $("<li>")
                        .append("<a>" + item.id + "<br>" + "<span class='nombre-coincidencia'><i class='glyphicon glyphicon-user'></i><small> " + item.id + "</small><span></a>")
                        .appendTo(ul);
            };

