<?php

    return [

        /*
        |--------------------------------------------------------------------------
        | Validation Language Lines
        |--------------------------------------------------------------------------
        |
        | The following language lines contain the default error messages used by
        | the validator class. Some of these rules have multiple versions such
        | as the size rules. Feel free to tweak each of these messages here.
        |
        */

        'accepted' => 'El atributo :attribute debe ser aceptado.',
        'active_url' => 'El atributo :attribute no es un URL válido.',
        'after' => 'El atributo :attribute debe ser una fecha posterior a :date.',
        'alpha' => 'El atributo :attribute debe contener solamente letras.',
        'alpha_dash' => 'El atributo :attribute debe contener solamente letras, números o guiones.',
        'alpha_num' => 'El atributo :attribute dee contener solamente letras y números.',
        'array' => 'El atributo :attribute debe ser un arreglo.',
        'before' => 'El atributo :attribute debe ser una fecha anterior a :date.',
        'between' => [
            'numeric' => 'El atributo :attribute debe estar entre :min y :max.',
            'file' => 'El atributo :attribute debe tener entre :min y :max kilobytes.',
            'string' => 'El atributo :attribute debe tener entre :min y :max caracteres.',
            'array' => 'El atributo :attribute debe tener entre :min y :max items.',
        ],
        'boolean' => 'El atributo :attribute debe ser verdadero o false.',
        'confirmed' => 'La confirmación del atributo :attribute no concuerda.',
        'date' => 'El atributo :attribute no es una fecha válida.',
        'date_format' => 'El atributo :attribute no concuerda con el formato :format.',
        'different' => 'Los atributos :attribute y :other deben ser diferentes.',
        'digits' => 'El atributo :attribute debe tener :digits dígitos.',
        'digits_between' => 'El atributo :attribute debe tener entre :min y :max dígitos.',
        'email' => 'El atributo :attribute debe ser un email válido.',
        'filled' => 'El atributo :attribute es obligatorio',
        'exists' => 'El atributo :attribute es incorrecto.',
        'image' => 'El atributo :attribute debe ser una imágen.',
        'in' => 'El atributo :attribute es incorrecto.',
        'integer' => 'El atributo :attribute debe ser un entero.',
        'ip' => 'El atributo :attribute debe ser una dirección IP válida.',
        'max' => [
            'numeric' => 'El atributo :attribute debe ser inferior a :max.',
            'file' => 'El atributo :attribute debe tener menos de :max kilobytes.',
            'string' => 'El atributo :attribute debe tener menos de :max caracteres.',
            'array' => 'El atributo :attribute debe tener menos de :max items.',
        ],
        'mimes' => 'El atributo :attribute debe ser un archivo de tipo: :values.',
        'min' => [
            'numeric' => 'El atributo :attribute debe ser al menos :min.',
            'file' => 'El atributo :attribute debe tener al menos :min kilobytes.',
            'string' => 'El atributo :attribute debe tener al menos :min caracteres.',
            'array' => 'El atributo :attribute debe tener al menos :min items.',
        ],
        'not_in' => 'El atributo :attribute es incorrecto.',
        'numeric' => 'El atributo :attribute debe ser un número.',
        'regex' => 'El formato del atributo :attribute es incorrecto.',
        'required' => 'El atributo :attribute es requerido.',
        'required_if' => 'El atributo :attribute es requerido cuando :other contiene :value.',
        'required_with' => 'El atributo :attribute cuando existe :values.',
        'required_with_all' => 'El atributo :attribute es requerido cuando existen :values.',
        'required_without' => 'El atributo :attribute field es requerido cuando :values no existe.',
        'required_without_all' => 'El atributo :attribute es requerido cuando no existe ninguno de :values.',
        'same' => 'Los atributos :attribute y :other deben ser iguales.',
        'size' => [
            'numeric' => 'El atributo :attribute debe ser :size.',
            'file' => 'El atributo :attribute debe tener :size kilobytes.',
            'string' => 'El atributo :attribute debe tener :size caracteres.',
            'array' => 'El atributo :attribute debe tener :size items.',
        ],
        'string' => 'El atributo :attribute debe ser una cadena de texto.',
        'timezone' => 'El atributo :attribute debe ser una zona horaria.',
        'unique' => 'El atributo :attribute ya ha sido ingresado.',
        'url' => 'El formato del atributo :attribute es incorrecto.',

        /*
        |--------------------------------------------------------------------------
        | Custom Validation Language Lines
        |--------------------------------------------------------------------------
        |
        | Here you may specify custom validation messages for attributes using the
        | convention "attribute.rule" to name the lines. This makes it quick to
        | specify a specific custom language line for a given attribute rule.
        |
        */

        'custom' => [
            'attribute-name' => [
                'rule-name' => 'custom-message',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Custom Validation Attributes
        |--------------------------------------------------------------------------
        |
        | The following language lines are used to swap attribute place-holders
        | with something more reader friendly such as E-Mail Address instead
        | of "email". This simply helps us make messages a little cleaner.
        |
        */

        'attributes' => [],

    ];
