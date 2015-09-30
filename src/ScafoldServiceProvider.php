<?php namespace Bestmomo\Scafold;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ScafoldServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Get namespace
		$nameSpace = $this->app->getNamespace();

		// Set namespace alias for HomeController
		AliasLoader::getInstance()->alias('AppController', $nameSpace . 'Http\Controllers\Controller');

		// Routes
		$this->app->router->group(['namespace' => $nameSpace . 'Http\Controllers'], function()
		{
			require __DIR__.'/Http/routes.php';
		});

		// Views
		$this->publishes([
			__DIR__.'/../views' => base_path('resources/views'),
			__DIR__.'/../views/auth' => base_path('resources/views/auth'),
			__DIR__.'/../views/emails' => base_path('resources/views/emails'),
		]);
	}

	public function register() {}

}