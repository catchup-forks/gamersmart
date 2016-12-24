<?php namespace App\Services\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider {

	public function register()
	{}
	
	
	/**
	 * Register the form builder instance.
	 *
	 * @return void
	 */
	protected function registerCrudFactory()
	{
		//$app->singleton()
		
		
		$this->app->singleton('crud', function($app)
		{
			//$crud = new CrudFactory();
		});
	}

}
