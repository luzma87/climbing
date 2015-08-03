<?php namespace App\Services\Html;

class NthFormBuilder extends \Illuminate\Html\FormBuilder {

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
        return sprintf(
            '<a href="%s" class="%s" id="%s"><i class="fa %s"></i> %s</a>',
            $url,
            $options['class'],
            $options['id'],
            $image,
            $value
        );
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