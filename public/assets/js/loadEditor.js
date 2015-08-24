/**
 * Created by luz on 24/08/15.
 */

$(function () {
    $('textarea.editor').ckeditor({
        toolbar : [
            ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'],
            ['SelectAll', 'Scayt'],
            ['Link', 'Unlink'],
            ['Table', 'HorizontalRule', 'lineheight', '-', 'SpecialChar', 'Smiley', 'FontAwesome', 'Glyphicons'],
            ['Bold', 'Italic', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'],
            '/',
            ['NumberedList', 'BulletedList', '-', 'Indent', 'Outdent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
            ['FontSize', 'TextColor', 'BGColor'],
            ['About']
        ]
    });
});