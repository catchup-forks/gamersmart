<?php namespace App\Services\Html;

class HtmlServiceProvider extends \Collective\Html\HtmlServiceProvider {

	public function register()
	{}

	/**
	 * Register the form builder instance.
	 *
	 * @return void
	 */
	protected function registerFormBuilder()
	{
		$this->app->singleton('form', function($app)
		{
			$form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

			return $form->setSessionStore($app['session.store']);
		});
	}

}
