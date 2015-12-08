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




