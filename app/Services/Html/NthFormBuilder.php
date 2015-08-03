<?php namespace App\Services\Html;

class NthFormBuilder extends \Illuminate\Html\FormBuilder {

    public function nth_textfield($name, $label, $errors, $labelOptions = array(), $inputOptions = array()) {
        $labelOptions['class'] = 'form-label';
        $inputOptions['class'] = 'form-control';
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
        $labelOptions['class'] = 'form-label';
        $inputOptions['class'] = 'form-control';
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
        $options['id'] = '' . (isset($options['id']) ? ' ' . $options['id'] : '');
        return sprintf(
            '<a href="%s" class="btn btn-verde %s" id="%s"><i class="fa %s"></i> %s</a>',
            $url,
            $options['class'],
            $options['id'],
            $image,
            $value
        );

//        return parent::submit($value, $options);
    }

}