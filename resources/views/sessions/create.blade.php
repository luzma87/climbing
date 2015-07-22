@extends('layouts.default')

@section('title', 'Entrar')

@section('header')
    {!! HTML::style('assets/css/login.css')  !!}
@stop

@section('content')
    <div id="fullscreen_bg" class="fullscreen_bg"/>

    <div class="container">
        {!! Form::open(array('route' => 'auth.store', 'class'=>'form-signin', 'id'=>'frmLogin'))  !!}
        <h1 class="form-signin-heading text-muted">Entrar</h1>

        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

        <div class="form-group">
            <div class="input-group email">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i> </span>
                <input type="text" name="email" class="form-control required email"
                       placeholder="Email" required="" autofocus="" value="{{ Session::get('email') }}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group password">
                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i> </span>
                <input type="password" name="password" class="form-control required" placeholder="Password" required="">
            </div>
        </div>
        <a href="#" id="btnSubmit" class="btn btn-lg btn-primary btn-block btn-submit"
           data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Procesando...">
            <i class="fa fa-sign-in"></i> Entrar
        </a>
        {!! Form::close() !!}
    </div>
@stop

@section('scripts')

    {!! HTML::script('assets/js/plugins/jquery-validation-1.14.0/dist/jquery.validate.min.js')  !!}
    {!! HTML::script('assets/js/plugins/jquery-validation-1.14.0/dist/localization/messages_es.min.js')  !!}

    <script type="text/javascript">

        var $form = $("#frmLogin");

        function doSubmit() {
            if ($form.valid()) {
                $("#btnSubmit").button('loading');
                $form.submit();
            }
        }
        $(function () {
            $form.validate({
                errorElement: "div",
                errorClass: "label label-danger",
                errorPlacement: function (error, element) {
                    if (element.parent().hasClass("input-group")) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass) {
                    $(element).parents(".form-group").addClass("has-error");
                },
                unhighlight: function (element, errorClass) {
                    $(element).parents(".form-group").removeClass("has-error");
                }
            });
            $("#btnSubmit").click(function () {
                doSubmit();
                return false;
            });
            $("input").keyup(function (ev) {
                if (ev.keyCode == 13) {
                    doSubmit();
                }
            });
        })
    </script>
@stop