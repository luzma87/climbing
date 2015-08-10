/**
 * Created by LUZ on 010 10 Aug 15.
 */

function openFormFoto(tipo, $btn, urlCreate, urlEdit, urlRedirect) {
    openLoader();
    var url = "", title = "";
    var id = $btn.data("id");
    var galeria = $btn.data("galeria");
    var galeriaName = $btn.data("galeria-name");
    if (tipo == "create") {
        url = urlCreate;
        title = "Agregar foto a <span class='text-verde'>" + galeriaName + "</span>";
    } else if (tipo == "edit") {
        url = urlEdit;
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