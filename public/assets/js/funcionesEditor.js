/**
 * Created by LUZ on 010 10 Aug 15.
 */

function openFormFoto(tipo, $btn, url, urlRedirect) {
    openLoader();
    var title = "";
    var id = $btn.data("id");
    var galeria = $btn.data("galeria");
    var galeriaName = $btn.data("galeria-name");
    if (tipo == "create") {
        title = "Agregar foto a <span class='text-verde'>" + galeriaName + "</span>";
    } else if (tipo == "edit") {
        title = "Modificar foto de <span class='text-verde'>" + galeriaName + "</span>";
    }
    $.ajax({
        type    : "POST",
        url     : url,
        data    : {
            id         : id,
            galeria    : galeria,
            redirectme : urlRedirect
        },
        success : function (msg) {
            closeLoader();
            bootbox.dialog({
                title   : title,
                message : msg,
                buttons : {
                    success : {
                        label     : "<i class='fa fa-floppy-o'></i> Guardar",
                        className : "btn-verde",
                        callback  : function () {
                            var $frm = $("#frmFoto");
                            $frm.submit();
                            return false;
                        }
                    },
                    danger  : {
                        label     : "Cancelar",
                        className : "btn-default",
                        callback  : function () {
                        }
                    }
                }
            });
        },
        error   : function () {

        }
    });
}

function openFormFraseFoto(tipo, $btn, url, urlRedirect) {
    openLoader();
    var title = "";
    if (tipo == "create") {
        title = "Crear frases";
    } else if (tipo == "edit") {
        title = "Modificar frases";
    }
    var $tr = $btn.parents("tr");
    var id = $tr.data("id");
    var lang = $tr.data("lang");
    var foto = $tr.data("foto");
    $.ajax({
        type    : "POST",
        url     : url,
        data    : {
            id         : id,
            lang       : lang,
            foto       : foto,
            redirectme : urlRedirect
        },
        success : function (msg) {
            closeLoader();
            bootbox.dialog({
                title   : title,
                message : msg,
                buttons : {
                    success : {
                        label     : "<i class='fa fa-floppy-o'></i> Guardar",
                        className : "btn-success",
                        callback  : function () {
                            var $frm = $("#frmFraseFoto");
                            $frm.submit();
                            return false;
                        }
                    },
                    danger  : {
                        label     : "Cancelar",
                        className : "btn-default",
                        callback  : function () {
                        }
                    }
                }
            });
        },
        error   : function () {

        }
    });
}

function openFormFrase(tipo, $btn, url, urlRedirect) {
    openLoader();
    var title = "";
    if (tipo == "create") {
        title = "Traducir frase";
    } else if (tipo == "edit") {
        title = "Modificar frase";
    }
    var id = $btn.data("id");
    var lang = $btn.data("lang");
    $.ajax({
        type     : "POST",
        url      : url,
        data     : {
            id         : id,
            lang       : lang,
            redirectme : urlRedirect
        },
        complete : function () {
            closeLoader();
        },
        success  : function (msg) {
            bootbox.dialog({
                title   : title,
                message : msg,
                class   : "modal-lg",
                buttons : {
                    success : {
                        label     : "<i class='fa fa-floppy-o'></i> Guardar",
                        className : "btn-success",
                        callback  : function () {
                            var $frm = $("#frmFrase");
                            $frm.submit();
                            return false;
                        }
                    },
                    danger  : {
                        label     : "Cancelar",
                        className : "btn-default",
                        callback  : function () {
                        }
                    }
                }
            });
        },
        error    : function () {
            bootbox.alert("Ha ocurrido un error interno");
        }
    });
}

function deleteFoto($btn) {
    var $frm = $btn.parents("form");
    bootbox.confirm("¿Está seguro de querer eliminar esta foto y todas sus frases?", function (res) {
        if (res) {
            openLoader("Eliminando");
            $frm.submit();
        }
    });
}