<?php namespace App\Services\Html;

class NthHtmlServiceProvider extends \Illuminate\Html\HtmlServiceProvider {

    /**
     * Register the form builder instance.
     */
    protected function registerFormBuilder() {
        $this->app->bindShared('form', function ($app) {
            $form = new NthFormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

}