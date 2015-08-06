<?php namespace App\Services\Html;

use App\Frase;

class NthFormBuilder extends \Illuminate\Html\FormBuilder {

    public function nth_frase_editar($codigo, $idioma, $fraseEs, $default = '') {
        $frase = Frase::codigo($codigo)->idioma($idioma)->get()->first();
        $fraseTxt = $frase ? $frase->contenido : $default;
        $fraseId = $frase ? $frase->id : $fraseEs->id;
        $clase = "warning btn-edit";
        $texto = "Editar";
        $icon = "pencil";
        if ($fraseTxt == $default) {
            $clase = "success btn-create";
            $texto = "Crear";
            $icon = "file-o";
        }
        return sprintf(
            '<a href="" class="btn btn-xs btn-%s qtip-top" title="%s" data-id="%s" data-lang="%s"><i class="fa fa-%s"></i></a> %s',
            $clase,
            $texto,
            $fraseId,
            $idioma,
            $icon,
            $fraseTxt
        );
    }

    public function nth_textfield($name, $label, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $inputOptions['placeholder'] = $label;
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::text($name, null, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_file($name, $label, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $inputOptions['placeholder'] = $label;
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::file($name, null, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_textarea($name, $label, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $inputOptions['placeholder'] = $label;
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::textarea($name, null, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_select($name, $label, $contents, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label';
        $inputOptions['class'] = 'form-control';
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::select($name, $contents, null, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_select_default($name, $contents, $selected, $default, $inputOptions = null) {
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $id = isset($inputOptions['id']) ? $inputOptions['id'] : $name;
        $sel = sprintf('<select name="%s" id="%s" class="%s">',
                       $name,
                       $id,
                       $inputOptions['class']
        );
        $sele = $selected === '' ? 'selected' : '';
        $sel .= sprintf('<option value="%s" %s>%s</option>',
                        '',
                        $sele,
                        $default
        );
        foreach ($contents as $key => $value) {
            $sele = $selected === $key ? 'selected' : '';
            $sel .= sprintf('<option value="%s" %s>%s</option>',
                            $key,
                            $sele,
                            $value
            );
        }
        $sel .= "</select>";
//        dd($sel);
        return $sel;
    }

    public function nth_submit($value = null, $options = []) {
        $options['class'] = 'btn btn-verde' . (isset($options['class']) ? ' ' . $options['class'] : '');
        return parent::submit($value, $options);
    }

    public function nth_img_button($value = null, $url = null, $image = null, $options = []) {
        $options['class'] = 'btn btn-verde' . (isset($options['class']) ? ' ' . $options['class'] : '');
        $options['id'] = '' . (isset($options['id']) ? '' . $options['id'] : '');
        return sprintf(
            '<a href="%s" class="%s" id="%s"><i class="fa %s"></i> %s</a>',
            $url,
            $options['class'],
            $options['id'],
            $image,
            $value
        );
    }

    public function nth_img_button_clase($value = null, $url = null, $image = null, $options = []) {
        $options['class'] = 'btn ' . (isset($options['class']) ? ' ' . $options['class'] : '');
        $options['id'] = '' . (isset($options['id']) ? '' . $options['id'] : '');
        $label = isset($options['label']) ? $options['label'] : true;
        if ($label) {
            return sprintf(
                '<a href="%s" class="%s" id="%s"><i class="fa %s"></i> %s</a>',
                $url,
                $options['class'],
                $options['id'],
                $image,
                $value
            );
        } else {
            return sprintf(
                '<a href="%s" class="%s" id="%s" title="%s"><i class="fa %s"></i></a>',
                $url,
                $options['class'],
                $options['id'],
                $value,
                $image
            );
        }
    }

    public function nth_menu_li($value = null, $url = null, $image = null, $tipo = null, $options = []) {
        $options['class'] = 'menu-item' . (isset($options['class']) ? ' ' . $options['class'] : '');
        //session('pag') == 'admin' ? 'active' : 'non-active'
        if (session('pag') == $tipo) {
            $options['class'] = $options['class'] . ' active';
        } else {
            $options['class'] = $options['class'] . ' non-active';
        }
        $options['id'] = '' . (isset($options['id']) ? ' ' . $options['id'] : '');
        return sprintf(
            '<li class="%s"><a href="%s" title="%s"><i class="fa %s"></i> <span class="toggle-menu">%s</span></a></li>',
            $options['class'],
            $url,
            $value,
            $image,
            $value
        );
    }

}