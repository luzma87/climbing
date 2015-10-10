<?php namespace App\Services\Html;

use App\Frase;
use App\FraseFoto;
use Illuminate\Support\Facades\URL;

class NthFormBuilder extends \Illuminate\Html\FormBuilder {

    public function nth_frase_editar($codigo, $idioma, $fraseEs, $default = '') {
        $frase = Frase::codigo($codigo)->idioma($idioma)->get()->first();
        $fraseTxt = $frase ? $frase->contenido : $default;
        $fraseId = $frase ? $frase->id : $fraseEs->id;
        $clase = "warning btn-edit-frase";
        $texto = "Editar";
        $icon = "pencil";
        if ($fraseTxt == $default) {
            $clase = "success btn-create-frase";
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

    public function nth_frase_foto_editar($fotoId, $idioma) {
        $frase = FraseFoto::porFoto($fotoId)->idioma($idioma->codigo)->get()->first();

        $id = "";
        $titulo = "";
        $descripcion = "";

        $clase = "success btn-create-frase-foto";
        $title = "Crear";
        $icon = "file-o";

        if ($frase) {
            $id = $frase->id;
            $titulo = $frase->titulo;
            $descripcion = $frase->descripcion;

            $clase = "warning btn-edit-frase-foto";
            $title = "Editar";
            $icon = "pencil";
        }

        $ret = sprintf("<tr data-id='%s' data-foto='%s' data-lang='%s'>", $id, $fotoId, $idioma->codigo);
        $ret .= "<td class='info'>";
        $ret .= sprintf('%s <a href="" class="btn btn-xs btn-%s qtip-top pull-right" title="%s"><i class="fa fa-%s"></i></a>',
                        $idioma->nombre,
                        $clase,
                        $title,
                        $icon);
        $ret .= "</td>";
        $ret .= sprintf("<td>%s</td>", $titulo);
        $ret .= sprintf("<td>%s</td>", $descripcion);
        $ret .= "</tr>";
        return $ret;
    }

    public function nth_textfield($name, $label, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $inputOptions['placeholder'] = $label;
        $value = (isset($inputOptions['value']) ? '' . $inputOptions['value'] : null);
//        dd($value);
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::text($name, $value, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_passfield($name, $label, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $inputOptions['placeholder'] = $label;

        $inputOptions2['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $inputOptions2['placeholder'] = 'Repita ' . $label;
        $inputOptions2['equalTo'] = '#' . $name;
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group --><div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::password($name, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : '',

            parent::label($name . '2', 'Repita ' . $label, $labelOptions),
            $errors->has($name . '2') ? ' class="error-control"' : '',
            parent::password($name . '2', $inputOptions2),
            $errors->has($name . '2') ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_file($name, $label, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
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
        $value = (isset($inputOptions['value']) ? '' . $inputOptions['value'] : null);
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::textarea($name, $value, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_select($name, $label, $contents, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $value = (isset($inputOptions['value']) ? '' . $inputOptions['value'] : null);
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::select($name, $contents, $value, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_select_default($name, $label, $contents, $default, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label' . (isset($labelOptions['class']) ? ' ' . $labelOptions['class'] : '');
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            $this->nth_select_default_noLbl($name, $contents, $default, $inputOptions),
            $errors->has($name) ? '<div class="alert alert-danger"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></div>' : ''
        );
    }

    public function nth_select_default_noLbl($name, $contents, $default, $inputOptions = null) {
        $inputOptions['class'] = 'form-control' . (isset($inputOptions['class']) ? ' ' . $inputOptions['class'] : '');
        $id = isset($inputOptions['id']) ? $inputOptions['id'] : $name;
        $selected = (isset($inputOptions['value']) ? '' . $inputOptions['value'] : null);
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
        $data = "";
        if (isset($options["data"])) {
            $data = $options["data"];
        }
        return sprintf(
            '<a href="%s" class="%s" id="%s" %s><i class="fa %s"></i> %s</a>',
            $url,
            $options['class'],
            $options['id'],
            $data,
            $image,
            $value
        );
    }

    public function nth_img_button_clase($value = null, $url = null, $image = null, $options = []) {
        $options['class'] = 'btn ' . (isset($options['class']) ? ' ' . $options['class'] : 'btn-verde');
        $options['id'] = '' . (isset($options['id']) ? '' . $options['id'] : '');
        $label = isset($options['label']) ? $options['label'] : true;
        $data = isset($options['data']) ? $options['data'] : '';
        $target = isset($options['target']) ? $options['target'] : '';
        if ($target != "") {
            $target = " target='" . $target . "'";
        }
        $id = "";
        if ($options['id'] != "") {
            $id = " id='" . $options['id'] . "'";
        }
        if ($label) {
            return sprintf(
                '<a href="%s" class="%s" %s %s %s><i class="fa %s"></i> %s</a>',
                $url,
                $options['class'],
                $id,
                $data,
                $target,
                $image,
                $value
            );
        } else {
            return sprintf(
                '<a href="%s" class="%s" %s title="%s" %s %s><i class="fa %s"></i></a>',
                $url,
                $options['class'],
                $id,
                $value,
                $data,
                $target,
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

    public function nth_traducir_frase($tipo, $frase, $fraseEs, $lang, $campo, $label, $errors) {
        $name = $campo . "__" . $lang;
        $label = getFrase($label, $lang, $label) . " (" . $lang . ")";
        $labelOptions = null;
        $inputOptions = array('class' => 'required', 'value' => getFrasePrograma($frase, $campo));
        $out = "";
        if ($tipo == "textfield") {
            $out = $this->nth_textfield($name, $label, $errors, $labelOptions, $inputOptions);
        } elseif ($tipo == "textarea") {
            $inputOptions['class'] .= " editor";
            $out = $this->nth_textarea($name, $label, $errors, $labelOptions, $inputOptions);
        } elseif ($tipo == "file") {
            $out = $this->nth_file($name, $label, $errors, $labelOptions, $inputOptions);

            if ($frase && $frase->$campo) {
                $cont = getFrasePrograma($frase, $campo);
                $cont = sprintf('<a href="%s" class="btn btn-xs btn-verde" target="_blank"><i class="fa fa-download"></i> Descargue el archivo de <em>%s</em> (%s) aquí</a>',
                                URL::asset($cont),
                                $label,
                                $lang);
                $out .= sprintf('<div class="row margin-bottom"><div class="col-md-12">%s</div></div>',
                                $cont);
            }
        }

        if ($fraseEs) {
            $cont = getFrasePrograma($fraseEs, $campo);

            if ($tipo == "file") {
                $cont = sprintf('<a href="%s" class="btn btn-xs btn-verde" target="_blank"><i class="fa fa-download"></i> Descargue el archivo de <em>%s</em> (es) aquí</a>',
                                URL::asset($cont),
                                $label);
                $out .= sprintf('<div class="row margin-bottom"><div class="col-md-12">%s</div></div>',
                                $cont);
            } else {
                $id = "collapse_" . $campo . "_" . date("Ymdhis");
                $out .= sprintf('<div class="row margin-bottom"><div class="col-md-12"><a class="collapsible" data-toggle="collapse" href="#%s" aria-expanded="false" aria-controls="%s"><i class="fa fa-caret-down"></i> <em>%s</em> en español</a><div class="collapse border ui-corner-all" id="%s">%s</div></div></div>',
                                $id,
                                $id,
                                $label,
                                $id,
                                $cont
                );
            }
        }

        return $out;
    }

}