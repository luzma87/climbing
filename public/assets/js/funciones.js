/**
 * Created by LUZ on 003 03 Aug 15.
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

function closeLoader() {
    $("#dlgLoader").modal('hide');
    $(".modal-backdrop").css({zIndex : 1040});
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

});