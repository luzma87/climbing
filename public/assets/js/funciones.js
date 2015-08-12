/**
 * Created by LUZ on 003 03 Aug 15.
 */

/**
 * Abre un dialog que bloquea la interacción del usuario mientras se procesa algo
 * @param msg
 * @param title
 */
function openLoader(msg, title) {
    msg = $.trim(msg);
    title = $.trim(title);
    var $msg = $("<div/>");
    $msg.addClass("text-center");
    if (msg !== undefined && msg != "") {
        $msg.append("<p>" + msg + "</p>");
    }
    if (title === undefined || title == "") {
        title = "Por favor espere";
    }
    $msg.append("<i class='fa fa-spinner fa-pulse fa-3x text-verde'></i>");

    bootbox.dialog({
        id          : 'dlgLoader',
        title       : title,
        message     : $msg,
        closeButton : false,
        class       : "modal-sm"
    });
    $("#dlgLoader").css({zIndex : 1061});
    $(".modal-backdrop").css({zIndex : 1060});
}

/**
 * Cierra el dialog de carga
 */
function closeLoader() {
    $("#dlgLoader").modal('hide');
    $(".modal-backdrop").css({zIndex : 1040});
}

/**
 * retorna true en caso de q la tecla presionada no sea espacio
 * @param ev
 * @returns {boolean}
 */
function validarEspacios(ev) {
    return (ev.keyCode != 32);
}

$(function () {
    //hace q todos los elementos con un atributo title tengan el title bonito de qtip2 -> movido al template
    //$('[title!=""]').qtip({
    //    style    : {
    //        classes : 'qtip-tipsy'
    //    },
    //    position : {
    //        my : "bottom center",
    //        at : "top center"
    //    }
    //});

    //para los dialogs, setea los defaults
    bootbox.setDefaults({
        locale      : "es",
        closeButton : false,
        show        : true
    });

    $(".noEspacios").keydown(function (ev) {
        return validarEspacios(ev);
    });
});